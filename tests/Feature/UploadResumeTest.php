<?php

namespace Tests\Feature;

use App\Contracts\ResumeUploader;
use App\Exceptions\ResumeUploadException;
use App\Jobs\UploadResume;
use App\Models\CareerApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\Support\FakeResumeUploader;
use Tests\TestCase;

class UploadResumeTest extends TestCase
{
    use RefreshDatabase;

    private FakeResumeUploader $uploader;

    protected function setUp(): void
    {
        parent::setUp();

        $this->uploader = new FakeResumeUploader;
        $this->app->instance(ResumeUploader::class, $this->uploader);
    }

    public function test_success_persists_metadata_and_cleans_up_source(): void
    {
        Storage::fake('local');
        Storage::disk('local')->put('livewire-tmp/abc123', 'pdf-bytes');
        Storage::disk('local')->put('livewire-tmp/abc123.json', '{}');

        $application = CareerApplication::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'position' => 'DevOps Engineer',
            'experience' => '5-10',
        ]);

        $job = new UploadResume($application->id, 'local', 'livewire-tmp/abc123', 'John Doe Resume.pdf');
        $job->handle($this->uploader);

        $application->refresh();

        $this->assertNotNull($application->resume_public_id);
        $this->assertNotNull($application->resume_url);
        $this->assertSame('John Doe Resume.pdf', $application->resume_original_name);
        $this->assertSame('new', $application->status);

        Storage::disk('local')->assertMissing('livewire-tmp/abc123');
        Storage::disk('local')->assertMissing('livewire-tmp/abc123.json');
    }

    public function test_failure_retains_source_for_retries_and_marks_failed_when_exhausted(): void
    {
        Storage::fake('local');
        Storage::disk('local')->put('livewire-tmp/abc123', 'pdf-bytes');

        $application = CareerApplication::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'position' => 'DevOps Engineer',
            'experience' => '5-10',
        ]);

        $this->uploader->shouldFail = true;
        $job = new UploadResume($application->id, 'local', 'livewire-tmp/abc123', 'resume.pdf');

        try {
            $job->handle($this->uploader);
            $this->fail('Expected ResumeUploadException was not thrown.');
        } catch (ResumeUploadException) {
            // Expected: the exception propagates so the queue can retry.
        }

        $application->refresh();

        $this->assertSame('new', $application->status);
        Storage::disk('local')->assertExists('livewire-tmp/abc123');

        $job->failed(new ResumeUploadException('retries exhausted'));

        $application->refresh();

        $this->assertSame('failed', $application->status);
        Storage::disk('local')->assertMissing('livewire-tmp/abc123');
    }
}
