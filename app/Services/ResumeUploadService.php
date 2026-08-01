<?php

namespace App\Services;

use App\Contracts\ResumeUploader;
use App\Exceptions\ResumeUploadException;
use App\Support\ResumeUploadResult;
use Cloudinary\Cloudinary;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Throwable;

final class ResumeUploadService implements ResumeUploader
{
    public function __construct(private readonly Cloudinary $cloudinary) {}

    public function upload(UploadedFile $file): ResumeUploadResult
    {
        if (! $file->isValid() || ! is_string($file->getRealPath())) {
            throw new ResumeUploadException('The uploaded resume could not be read.');
        }

        return $this->uploadFromPath(
            path: $file->getRealPath(),
            originalName: $file->getClientOriginalName(),
            size: $file->getSize(),
            extension: $file->getClientOriginalExtension(),
        );
    }

    public function uploadFromPath(string $path, string $originalName, int $size, ?string $extension = null): ResumeUploadResult
    {
        $extension = strtolower($extension ?: (string) pathinfo($path, PATHINFO_EXTENSION));

        $this->assertAllowedExtension($extension);

        try {
            $result = $this->cloudinary->uploadApi()->upload($path, [
                'folder' => (string) config('services.resume.folder'),
                'public_id' => Str::random(40),
                'resource_type' => 'raw',
                'unique_filename' => false,
                'overwrite' => false,
            ]);
        } catch (Throwable $e) {
            Log::error('Resume upload to Cloudinary failed.', [
                'extension' => $extension,
                'size' => $size,
                'exception' => $e,
            ]);

            throw new ResumeUploadException('Unable to upload the resume. Please try again.', 0, $e);
        }

        return new ResumeUploadResult(
            publicId: $result['public_id'],
            secureUrl: $result['secure_url'],
            originalName: $this->sanitizeOriginalName($originalName),
            size: $result['bytes'] ?? $size,
            extension: $extension,
        );
    }

    public function delete(string $publicId): void
    {
        try {
            $this->cloudinary->uploadApi()->destroy($publicId, ['resource_type' => 'raw']);
        } catch (Throwable $e) {
            Log::warning('Resume delete from Cloudinary failed.', [
                'public_id' => $publicId,
                'exception' => $e,
            ]);
        }
    }

    public function formatSize(int $bytes): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $index = $bytes > 0 ? (int) floor(log($bytes, 1024)) : 0;
        $index = min($index, count($units) - 1);

        return round($bytes / (1024 ** $index), $index > 0 ? 2 : 0).' '.$units[$index];
    }

    private function assertAllowedExtension(string $extension): void
    {
        if (! in_array($extension, config('services.resume.allowed_extensions'), true)) {
            throw new ResumeUploadException('Resume must be a PDF, DOC or DOCX file.');
        }
    }

    private function sanitizeOriginalName(string $name): string
    {
        $name = Str::ascii($name);
        $extension = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        $basename = pathinfo($name, PATHINFO_FILENAME);
        $basename = (string) preg_replace('/[^A-Za-z0-9 _-]/', '', $basename);
        $basename = Str::limit(trim($basename, ' _-'), 180, '');

        if ($basename === '') {
            $basename = 'resume';
        }

        return $extension !== '' ? $basename.'.'.$extension : $basename;
    }
}
