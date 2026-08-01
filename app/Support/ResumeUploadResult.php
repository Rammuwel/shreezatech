<?php

namespace App\Support;

final readonly class ResumeUploadResult
{
    public function __construct(
        public string $publicId,
        public string $secureUrl,
        public string $originalName,
        public int $size,
        public string $extension,
    ) {}
}
