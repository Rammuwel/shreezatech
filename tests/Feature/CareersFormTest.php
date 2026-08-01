<?php

namespace Tests\Feature;

use App\Models\CareerApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;
use Storage;
use Tests\TestCase;

class CareersFormTest extends TestCase
{
    use RefreshDatabase;

    public function test_careers_submit_flashes_success_and_resets(): void
    {
        Storage::fake('local');

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

    public function test_careers_submit_persists_application_and_resume(): void
    {
        Storage::fake('local');

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
        $this->assertNotNull($application->resume_path);

        Storage::disk('local')->assertExists($application->resume_path);
    }

    public function test_careers_validation_blocks_empty_submit(): void
    {
        Livewire::test('pages::careers')
            ->call('submit')
            ->assertHasErrors(['name', 'email', 'position', 'experience', 'resume']);
    }
}
