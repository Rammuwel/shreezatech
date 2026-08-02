<?php

namespace Tests\Feature;

use App\Contracts\ResumeUploader;
use App\Models\CareerApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Tests\Support\FakeResumeUploader;
use Tests\TestCase;

class CareersFormTest extends TestCase
{
    use RefreshDatabase;

    private FakeResumeUploader $uploader;

    protected function setUp(): void
    {
        parent::setUp();

        $this->uploader = new FakeResumeUploader;
        $this->app->instance(ResumeUploader::class, $this->uploader);
    }

    public function test_careers_submit_flashes_success_and_persists(): void
    {
        $resume = UploadedFile::fake()->create('resume.pdf', 100, 'application/pdf');

        $response = $this->from('/careers')->post('/careers', [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '1234567890',
            'position' => 'UI/UX Designer',
            'experience' => '1-2',
            'message' => 'I am a great fit!',
            'resume' => $resume,
        ]);

        $response->assertRedirect('/careers');
        $response->assertSessionHas('success');

        $application = CareerApplication::first();

        $this->assertNotNull($application);
        $this->assertSame('Jane Smith', $application->name);
        $this->assertSame('jane@example.com', $application->email);
        $this->assertSame('1234567890', $application->phone);
        $this->assertSame('UI/UX Designer', $application->position);
        $this->assertSame('1-2', $application->experience);
        $this->assertSame('I am a great fit!', $application->message);
        $this->assertSame('new', $application->status);
        $this->assertFalse($application->is_read);
        $this->assertNotNull($application->resume_url);
        $this->assertSame($this->uploader->lastPublicId, $application->resume_public_id);
        $this->assertSame('resume.pdf', $application->resume_original_name);
        $this->assertSame($resume->getSize(), $application->resume_size);
        $this->assertTrue($application->hasResume());
    }

    public function test_careers_validation_blocks_empty_submit(): void
    {
        $response = $this->from('/careers')->post('/careers', [
            'name' => '',
            'email' => '',
            'position' => '',
            'experience' => '',
        ]);

        $response->assertRedirect('/careers');
        $response->assertSessionHasErrors(['name', 'email', 'position', 'experience', 'resume']);
    }

    public function test_upload_failure_redirects_back_without_persisting(): void
    {
        $this->uploader->shouldFail = true;

        $response = $this->from('/careers')->post('/careers', [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'position' => 'UI/UX Designer',
            'experience' => '1-2',
            'resume' => UploadedFile::fake()->create('resume.pdf', 100, 'application/pdf'),
        ]);

        $response->assertRedirect('/careers');
        $response->assertSessionHas('error');

        $this->assertNull(CareerApplication::first());
    }
}
