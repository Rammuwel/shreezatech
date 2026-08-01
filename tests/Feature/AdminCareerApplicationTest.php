<?php

namespace Tests\Feature;

use App\Contracts\ResumeUploader;
use App\Models\CareerApplication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Support\FakeResumeUploader;
use Tests\TestCase;

class AdminCareerApplicationTest extends TestCase
{
    use RefreshDatabase;

    private FakeResumeUploader $uploader;

    protected function setUp(): void
    {
        parent::setUp();

        $this->uploader = new FakeResumeUploader;
        $this->app->instance(ResumeUploader::class, $this->uploader);

        config(['services.admin_token' => 'secret-token']);
    }

    public function test_admin_index_requires_valid_token(): void
    {
        $this->get('/admin/careers')->assertForbidden();

        $this->get('/admin/careers?token=secret-token')->assertOk();
    }

    public function test_admin_can_view_application_details(): void
    {
        $application = CareerApplication::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'position' => 'UI/UX Designer',
            'experience' => '1-2',
            'resume_url' => 'https://res.cloudinary.com/fake/raw/upload/resume',
            'resume_public_id' => 'shreeza/careers/resumes/resume',
            'resume_original_name' => 'resume.pdf',
            'resume_size' => 1024,
        ]);

        $this->get('/admin/careers/'.$application->id.'?token=secret-token')
            ->assertOk()
            ->assertSee('resume.pdf')
            ->assertSee('1 KB');
    }

    public function test_admin_delete_removes_cloudinary_file_and_metadata(): void
    {
        $application = CareerApplication::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'position' => 'UI/UX Designer',
            'experience' => '1-2',
            'resume_url' => 'https://res.cloudinary.com/fake/raw/upload/resume',
            'resume_public_id' => 'shreeza/careers/resumes/resume',
            'resume_original_name' => 'resume.pdf',
            'resume_size' => 1024,
        ]);

        $this->delete('/admin/careers/'.$application->id.'/resume?token=secret-token')
            ->assertRedirect();

        $this->assertSame('shreeza/careers/resumes/resume', $this->uploader->deletedPublicId);

        $application->refresh();

        $this->assertNull($application->resume_url);
        $this->assertNull($application->resume_public_id);
        $this->assertNull($application->resume_original_name);
        $this->assertNull($application->resume_size);
        $this->assertFalse($application->hasResume());
    }

    public function test_admin_download_redirects_to_cloudinary_attachment_url(): void
    {
        $application = CareerApplication::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'position' => 'UI/UX Designer',
            'experience' => '1-2',
            'resume_url' => 'https://res.cloudinary.com/demo/raw/upload/v1722345678/resume-id',
            'resume_public_id' => 'shreeza/careers/resumes/resume',
            'resume_original_name' => 'Jane Smith Resume.pdf',
            'resume_size' => 1024,
        ]);

        $response = $this->get('/admin/careers/'.$application->id.'/resume/download?token=secret-token')
            ->assertRedirect();

        $this->assertStringContainsString(
            'fl_attachment:Jane-Smith-Resume.pdf',
            (string) $response->headers->get('Location'),
        );
    }

    public function test_admin_download_without_resume_redirects_back_with_error(): void
    {
        $application = CareerApplication::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'position' => 'UI/UX Designer',
            'experience' => '1-2',
        ]);

        $this->from('/admin/careers/'.$application->id.'?token=secret-token')
            ->get('/admin/careers/'.$application->id.'/resume/download?token=secret-token')
            ->assertRedirect('/admin/careers/'.$application->id.'?token=secret-token')
            ->assertSessionHas('error');
    }

    public function test_admin_preview_redirects_to_cloudinary_url(): void
    {
        $application = CareerApplication::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'position' => 'UI/UX Designer',
            'experience' => '1-2',
            'resume_url' => 'https://res.cloudinary.com/demo/raw/upload/v1722345678/resume-id',
            'resume_public_id' => 'shreeza/careers/resumes/resume',
            'resume_original_name' => 'resume.pdf',
        ]);

        $this->get('/admin/careers/'.$application->id.'/resume/preview?token=secret-token')
            ->assertRedirect($application->resume_url);
    }
}
