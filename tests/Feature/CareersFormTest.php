<?php

namespace Tests\Feature;

use App\Contracts\ResumeUploader;
use App\Models\CareerApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;
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

    public function test_careers_submit_flashes_success_and_resets(): void
    {
        $component = Livewire::test('pages::careers')
            ->set('name', 'John Doe')
            ->set('email', 'john@example.com')
            ->set('position', 'Senior Laravel Developer')
            ->set('experience', '3-5')
            ->set('resume', UploadedFile::fake()->create('resume.pdf', 100, 'application/pdf'))
            ->call('submit')
            ->assertHasNoErrors();

        $html = $component->html();

        $this->assertStringContainsString('Application Submitted', $html);
        $this->assertStringContainsString('career-modal', $html);

        $component
            ->assertSet('name', '')
            ->assertSet('email', '')
            ->assertSet('position', '');
    }

    public function test_careers_submit_persists_application_and_resume_metadata(): void
    {
        $resume = UploadedFile::fake()->create('resume.pdf', 100, 'application/pdf');

        Livewire::test('pages::careers')
            ->set('name', 'Jane Smith')
            ->set('email', 'jane@example.com')
            ->set('phone', '1234567890')
            ->set('position', 'UI/UX Designer')
            ->set('experience', '1-2')
            ->set('message', 'I am a great fit!')
            ->set('resume', $resume)
            ->call('submit')
            ->assertHasNoErrors();

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
        Livewire::test('pages::careers')
            ->call('submit')
            ->assertHasErrors(['name', 'email', 'position', 'experience', 'resume']);
    }

    public function test_large_resume_is_queued_and_metadata_saved_by_job(): void
    {
        $resume = UploadedFile::fake()->create('resume.pdf', 3 * 1024, 'application/pdf');

        Livewire::test('pages::careers')
            ->set('name', 'Queued Applicant')
            ->set('email', 'queued@example.com')
            ->set('position', 'DevOps Engineer')
            ->set('experience', '5-10')
            ->set('resume', $resume)
            ->call('submit')
            ->assertHasNoErrors();

        $application = CareerApplication::first();

        $this->assertNotNull($application);
        $this->assertNotNull($application->resume_public_id);
        $this->assertNotNull($application->resume_url);
        $this->assertSame('resume.pdf', $application->resume_original_name);
    }
}
