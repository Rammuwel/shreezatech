<?php

namespace Tests\Support;

use App\Contracts\ResumeUploader;
use App\Exceptions\ResumeUploadException;
use App\Support\ResumeUploadResult;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class FakeResumeUploader implements ResumeUploader
{
    public ?string $lastPublicId = null;

    public ?string $lastExtension = null;

    public ?string $deletedPublicId = null;

    public bool $shouldFail = false;

    public function upload(UploadedFile $file): ResumeUploadResult
    {
        return $this->buildResult(
            $file->getClientOriginalName(),
            $file->getSize(),
            $file->getClientOriginalExtension(),
        );
    }

    public function uploadFromPath(string $path, string $originalName, int $size, ?string $extension = null): ResumeUploadResult
    {
        if ($this->shouldFail) {
            throw new ResumeUploadException('Simulated upload failure.');
        }

        return $this->buildResult($originalName, $size, $extension ?: pathinfo($path, PATHINFO_EXTENSION));
    }

    public function delete(string $publicId): void
    {
        $this->deletedPublicId = $publicId;
    }

    public function formatSize(int $bytes): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];
        $index = $bytes > 0 ? (int) floor(log($bytes, 1024)) : 0;
        $index = min($index, count($units) - 1);

        return round($bytes / (1024 ** $index), $index > 0 ? 2 : 0).' '.$units[$index];
    }

    private function buildResult(string $originalName, int $size, ?string $extension): ResumeUploadResult
    {
        $this->lastPublicId = 'shreeza/careers/resumes/fake'.Str::random(8);
        $this->lastExtension = $extension ?: 'pdf';

        return new ResumeUploadResult(
            publicId: $this->lastPublicId,
            secureUrl: 'https://res.cloudinary.com/fake/raw/upload/'.$this->lastPublicId,
            originalName: $originalName,
            size: $size,
            extension: $this->lastExtension,
        );
    }
}
