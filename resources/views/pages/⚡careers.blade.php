<?php

use App\Contracts\ResumeUploader;
use App\Exceptions\ResumeUploadException;
use App\Http\Requests\CareerApplicationRequest;
use App\Jobs\UploadResume;
use App\Models\CareerApplication;
use App\Support\ResumeUploadResult;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public $title = "Shreeza | Careers";
    public $metaDescription = "Join Shreeza and be part of a team building the future of digital innovation. Explore exciting career opportunities.";

    public $name = '';
    public $email = '';
    public $phone = '';
    public $position = '';
    public $experience = '';
    public $message = '';
    public $resume = null;

    public array $positions = [
        'Senior Laravel Developer',
        'Frontend Developer (React/Vue)',
        'UI/UX Designer',
        'DevOps Engineer',
        'Project Manager',
        'AI/ML Engineer',
        'Mobile App Developer (Flutter)',
        'Quality Assurance Engineer',
    ];

    protected function rules(): array
    {
        return (new CareerApplicationRequest())->rules();
    }

    protected function messages(): array
    {
        return (new CareerApplicationRequest())->messages();
    }

    public function submit()
    {
        $validated = $this->validate();

        if ($this->resume && $this->resume->getSize() > config('services.resume.queue_threshold')) {
            $this->submitQueued($validated);
        } else {
            $this->submitSynchronously($validated);
        }

        $this->reset(['name', 'email', 'phone', 'position', 'experience', 'message', 'resume']);

        session()->flash('success', 'Application submitted successfully! We will review your application and get back to you.');
    }

    private function submitSynchronously(array $validated): void
    {
        $uploader = app(ResumeUploader::class);

        try {
            $result = $uploader->upload($this->resume);
        } catch (ResumeUploadException $e) {
            throw ValidationException::withMessages(['resume' => $e->getMessage()]);
        }

        try {
            DB::transaction(function () use ($validated, $result): void {
                CareerApplication::create($this->applicationData($validated, $result));
            });
        } catch (Throwable $e) {
            $uploader->delete($result->publicId);

            Log::error('Failed to persist career application.', [
                'email' => $validated['email'],
                'exception' => $e,
            ]);

            throw $e;
        }
    }

    private function submitQueued(array $validated): void
    {
        $application = DB::transaction(function () use ($validated): CareerApplication {
            return CareerApplication::create($this->applicationData($validated));
        });

        dispatch(new UploadResume(
            $application->id,
            config('livewire.temporary_file_upload.disk') ?? config('filesystems.default'),
            'livewire-tmp/'.$this->resume->getFilename(),
            $this->resume->getClientOriginalName(),
        ));
    }

    private function applicationData(array $validated, ?ResumeUploadResult $result = null): array
    {
        return [
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? null,
            'position' => $validated['position'],
            'experience' => $validated['experience'],
            'message' => $validated['message'] ?? null,
            'resume_url' => $result?->secureUrl,
            'resume_public_id' => $result?->publicId,
            'resume_original_name' => $result?->originalName,
            'resume_size' => $result?->size,
        ];
    }
};
?>

<div>
    <x-seo.meta :title="$title" :description="$metaDescription" />

    <section class="py-16 sm:py-20 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div wire:ignore x-intersect="animate-fade-in-up" class="opacity-0 text-center max-w-2xl mx-auto mb-12">
                <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">CAREERS</span>
                <h1 class="text-3xl sm:text-4xl font-bold text-heading mt-3">Join Our Team</h1>
                <p class="mt-3 text-text/80">Be part of a passionate team building innovative solutions that make a real impact.</p>
            </div>

            @if(session('success'))
            <div class="fixed inset-0 z-50 flex items-center justify-center p-4 pointer-events-none">
                <div id="career-modal" class="pointer-events-auto w-full max-w-md rounded-2xl border border-border bg-card p-8 text-center shadow-2xl">
                    <svg class="w-16 h-16 mx-auto text-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    <h3 class="text-2xl font-bold text-heading mt-4">Application Submitted!</h3>
                    <p class="text-muted mt-2">{{ session('success') }}</p>
                    <button type="button" onclick="document.getElementById('career-modal').style.display='none'" class="mt-6 w-full rounded-full bg-primary px-6 py-3 font-semibold text-white hover:bg-primary-hover transition-all">Done</button>
                </div>
            </div>
            @endif
            <div class="grid lg:grid-cols-2 gap-10 max-w-5xl mx-auto">
                <div wire:ignore x-intersect="animate-fade-in-up" class="opacity-0 space-y-6">
                    <h2 class="text-2xl font-bold text-heading">Why Work With Us?</h2>
                    @foreach([
                        ['title' => 'Innovative Projects', 'desc' => 'Work on cutting-edge technologies and challenging problems.'],
                        ['title' => 'Growth & Learning', 'desc' => 'Continuous learning opportunities, workshops, and conference budgets.'],
                        ['title' => 'Flexible Culture', 'desc' => 'Remote-friendly environment with flexible working hours.'],
                        ['title' => 'Great Benefits', 'desc' => 'Competitive salary, health insurance, and more.'],
                    ] as $benefit)
                    <div class="flex gap-4 p-4 rounded-xl border border-border bg-card/50">
                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary">
                            <x-svg.index icon="check" class="w-5 h-5" />
                        </div>
                        <div>
                            <h3 class="font-semibold text-heading">{{ $benefit['title'] }}</h3>
                            <p class="text-sm text-muted mt-1">{{ $benefit['desc'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div>
                    <div class="rounded-2xl border border-border bg-card p-6 sm:p-8">
                        <h2 class="text-xl font-bold text-heading mb-6">Apply Now</h2>

                        <form
                            wire:submit.prevent="submit"
                            class="space-y-4"
                            x-data="{
                                uploading: false,
                                progress: 0,
                                startUpload() { this.uploading = true; this.progress = 0; },
                                updateProgress(event) { this.progress = event.detail.progress; },
                                finishUpload() { this.uploading = false; },
                                errorUpload() { this.uploading = false; this.progress = 0; },
                            }"
                            x-on:livewire-upload-start="startUpload"
                            x-on:livewire-upload-progress="updateProgress"
                            x-on:livewire-upload-finish="finishUpload"
                            x-on:livewire-upload-error="errorUpload"
                        >
                            <div>
                                <label class="block text-sm font-medium text-heading mb-1.5">Full Name *</label>
                                <input wire:model="name" type="text" class="w-full rounded-lg border border-border bg-background px-4 py-2.5 text-sm text-heading placeholder-muted focus:border-primary focus:outline-none transition-colors" placeholder="John Doe">
                                @error('name') <p class="mt-1 text-xs text-danger">{{ $message }}</p> @enderror
                            </div>

                            <div class="grid sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-heading mb-1.5">Email *</label>
                                    <input wire:model="email" type="email" class="w-full rounded-lg border border-border bg-background px-4 py-2.5 text-sm text-heading placeholder-muted focus:border-primary focus:outline-none transition-colors" placeholder="john@example.com">
                                    @error('email') <p class="mt-1 text-xs text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-heading mb-1.5">Phone</label>
                                    <input wire:model="phone" type="tel" class="w-full rounded-lg border border-border bg-background px-4 py-2.5 text-sm text-heading placeholder-muted focus:border-primary focus:outline-none transition-colors" placeholder="+1 234 567 890">
                                    @error('phone') <p class="mt-1 text-xs text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div class="grid sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-heading mb-1.5">Position *</label>
                                    <select wire:model="position" class="w-full rounded-lg border border-border bg-background px-4 py-2.5 text-sm text-heading focus:border-primary focus:outline-none transition-colors">
                                        <option value="">Select a position</option>
                                        @foreach($positions as $pos)
                                        <option value="{{ $pos }}">{{ $pos }}</option>
                                        @endforeach
                                    </select>
                                    @error('position') <p class="mt-1 text-xs text-danger">{{ $message }}</p> @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-heading mb-1.5">Experience *</label>
                                    <select wire:model="experience" class="w-full rounded-lg border border-border bg-background px-4 py-2.5 text-sm text-heading focus:border-primary focus:outline-none transition-colors">
                                        <option value="">Select experience</option>
                                        <option value="0-1">Less than 1 year</option>
                                        <option value="1-2">1-2 years</option>
                                        <option value="3-5">3-5 years</option>
                                        <option value="5-10">5-10 years</option>
                                        <option value="10+">10+ years</option>
                                    </select>
                                    @error('experience') <p class="mt-1 text-xs text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-heading mb-1.5">Resume (PDF, DOC, DOCX) *</label>
                                <input wire:model="resume" type="file" accept=".pdf,.doc,.docx" class="w-full rounded-lg border border-border bg-background px-4 py-2.5 text-sm text-heading file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:bg-primary/10 file:text-primary file:text-sm hover:file:bg-primary/20 transition-colors">
                                @error('resume') <p class="mt-1 text-xs text-danger">{{ $message }}</p> @enderror

                                <div x-show="uploading" x-cloak class="mt-3">
                                    <div class="flex items-center gap-3">
                                        <div class="h-2 flex-1 overflow-hidden rounded-full bg-background">
                                            <div class="h-2 rounded-full bg-primary transition-all duration-150" :style="'width: ' + progress + '%'"></div>
                                        </div>
                                        <span class="text-xs text-muted whitespace-nowrap">Uploading... <span x-text="Math.round(progress) + '%'"></span></span>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-heading mb-1.5">Cover Letter</label>
                                <textarea wire:model="message" rows="4" class="w-full rounded-lg border border-border bg-background px-4 py-2.5 text-sm text-heading placeholder-muted focus:border-primary focus:outline-none transition-colors" placeholder="Tell us why you'd be a great fit..."></textarea>
                                @error('message') <p class="mt-1 text-xs text-danger">{{ $message }}</p> @enderror
                            </div>

                            <button type="submit" wire:loading.attr="disabled" wire:target="submit" :disabled="uploading" class="w-full rounded-full bg-primary px-6 py-3 font-semibold text-white hover:bg-primary-hover active:scale-95 transition-all disabled:opacity-50">
                                <span wire:loading.remove wire:target="submit">Submit Application</span>
                                <span wire:loading wire:target="submit">Submitting...</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-careers.faq />
</div>
