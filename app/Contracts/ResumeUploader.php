<?php

namespace App\Contracts;

use App\Exceptions\ResumeUploadException;
use App\Support\ResumeUploadResult;
use Illuminate\Http\UploadedFile;

interface ResumeUploader
{
    /**
     * Upload a validated file to Cloudinary.
     *
     * @throws ResumeUploadException
     */
    public function upload(UploadedFile $file): ResumeUploadResult;

    /**
     * Upload a file from an absolute local path to Cloudinary.
     *
     * @throws ResumeUploadException
     */
    public function uploadFromPath(string $path, string $originalName, int $size, ?string $extension = null): ResumeUploadResult;

    /**
     * Delete a raw asset from Cloudinary. Failures are logged, not thrown.
     */
    public function delete(string $publicId): void;

    /**
     * Format a byte count as a human readable string.
     */
    public function formatSize(int $bytes): string;
}
