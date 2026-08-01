<?php

namespace App\Jobs;

use App\Contracts\ResumeUploader;
use App\Models\CareerApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class UploadResume implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public int $tries = 3;

    public int $backoff = 10;

    public function __construct(
        public int $applicationId,
        public string $sourceDisk,
        public string $sourcePath,
        public string $originalName,
    ) {}

    public function handle(ResumeUploader $uploader): void
    {
        $application = CareerApplication::find($this->applicationId);

        if (! $application || $application->resume_public_id !== null) {
            $this->cleanupSource();

            return;
        }

        $result = $uploader->uploadFromPath(
            path: (string) Storage::disk($this->sourceDisk)->path($this->sourcePath),
            originalName: $this->originalName,
            size: $this->sourceSize(),
        );

        $application->update([
            'resume_url' => $result->secureUrl,
            'resume_public_id' => $result->publicId,
            'resume_original_name' => $result->originalName,
            'resume_size' => $result->size,
        ]);

        $this->cleanupSource();
    }

    public function failed(?Throwable $e): void
    {
        $application = CareerApplication::find($this->applicationId);

        if ($application) {
            $application->update(['status' => 'failed']);
        }

        $this->cleanupSource();

        Log::error('Queued resume upload failed.', [
            'application_id' => $this->applicationId,
            'exception' => $e,
        ]);
    }

    private function sourceSize(): int
    {
        $disk = Storage::disk($this->sourceDisk);

        return $disk->exists($this->sourcePath) ? (int) $disk->size($this->sourcePath) : 0;
    }

    private function cleanupSource(): void
    {
        Storage::disk($this->sourceDisk)->delete([
            $this->sourcePath,
            $this->sourcePath.'.json',
        ]);
    }
}
