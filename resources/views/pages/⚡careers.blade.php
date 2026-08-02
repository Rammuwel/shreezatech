<?php

use App\Models\CareerApplication;
use Cloudinary\Api\Upload\UploadApi;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public string $title = 'Shreeza | Careers';

    public string $metaDescription = 'Join Shreeza and be part of a team building the future of digital innovation. Explore exciting career opportunities.';

    public string $name = '';

    public string $email = '';

    public string $phone = '';

    public string $position = '';

    public string $experience = '';

    public string $message = '';

    public TemporaryUploadedFile|string|null $resume = null;

    protected function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'experience' => 'required|string|max:50',
            'message' => 'nullable|string|max:2000',
            'resume' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ];
    }

    public function submit(): void
    {
        $this->validate();

        $upload = new UploadApi();

        $response = $upload->upload($this->resume->getRealPath(), [
            'resource_type' => 'auto',
            'folder' => 'career_resumes',
            'filename_override' => $this->resume->getClientOriginalName(),
        ]);

        CareerApplication::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'position' => $this->position,
            'experience' => $this->experience,
            'message' => $this->message,
            'resume_url' => $response['secure_url'],
            'resume_public_id' => $response['public_id'],
            'resume_original_name' => $this->resume->getClientOriginalName(),
            'resume_size' => $this->resume->getSize(),
        ]);

        $this->reset([
            'name',
            'email',
            'phone',
            'position',
            'experience',
            'message',
            'resume',
        ]);

        session()->flash('success', 'Thank you! Your application has been submitted successfully.');
    }
};
?>

<div>
    <x-seo.meta :title="$title" :description="$metaDescription" />

    <section class="pt-20 pb-0 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-2xl mx-auto mb-2">
                <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">CAREERS</span>
                <h1 class="text-3xl sm:text-4xl font-bold text-heading mt-3">Join Our Team</h1>
                <p class="mt-3 text-text/80">Be part of a passionate team building innovative solutions that make a real impact.</p>
            </div>
        </div>
    </section>

    <x-careers.apply-form :resume="$resume" />

    <x-careers.faq />
</div>
