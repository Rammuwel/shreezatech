<?php

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
    public $resume;

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

    protected function rules()
    {
        return [
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|max:254',
            'phone' => 'nullable|string|max:20',
            'position' => 'required|string',
            'experience' => 'required|string',
            'message' => 'nullable|string|max:2000',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        ];
    }

    public function submit()
    {
        $this->validate();

        $this->reset(['name', 'email', 'phone', 'position', 'experience', 'message', 'resume']);

        session()->flash('success', 'Application submitted successfully! We will review your application and get back to you.');
    }
};
?>

<div>
    <x-seo.meta :title="$title" :description="$metaDescription" />

    <section class="py-16 sm:py-20 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div x-intersect="animate-fade-in-up" class="opacity-0 text-center max-w-2xl mx-auto mb-12">
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
                <div x-intersect="animate-fade-in-up" class="opacity-0 space-y-6">
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

                <div x-intersect="animate-fade-in-up" class="opacity-0">
                    <div class="rounded-2xl border border-border bg-card p-6 sm:p-8">
                        <h2 class="text-xl font-bold text-heading mb-6">Apply Now</h2>
                        
                        <form wire:submit="submit" class="space-y-4">
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
                                <label class="block text-sm font-medium text-heading mb-1.5">Resume (PDF, DOC)</label>
                                <input wire:model="resume" type="file" accept=".pdf,.doc,.docx" class="w-full rounded-lg border border-border bg-background px-4 py-2.5 text-sm text-heading file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:bg-primary/10 file:text-primary file:text-sm hover:file:bg-primary/20 transition-colors">
                                @error('resume') <p class="mt-1 text-xs text-danger">{{ $message }}</p> @enderror
                                <div wire:loading wire:target="resume" class="mt-1 text-xs text-muted">Uploading...</div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-heading mb-1.5">Cover Letter</label>
                                <textarea wire:model="message" rows="4" class="w-full rounded-lg border border-border bg-background px-4 py-2.5 text-sm text-heading placeholder-muted focus:border-primary focus:outline-none transition-colors" placeholder="Tell us why you'd be a great fit..."></textarea>
                                @error('message') <p class="mt-1 text-xs text-danger">{{ $message }}</p> @enderror
                            </div>

                            <button type="submit" wire:loading.attr="disabled" class="w-full rounded-full bg-primary px-6 py-3 font-semibold text-white hover:bg-primary-hover active:scale-95 transition-all disabled:opacity-50">
                                <span wire:loading.remove>Submit Application</span>
                                <span wire:loading>Submitting...</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-careers.faq />
</div>
