@props([
    'resumeUrl' => null,
    'resumePublicId' => null,
    'resumeOriginalName' => null,
    'resumeSize' => null,
])

<section id="apply" class="py-20 mt-2">
    <div class="max-w-7xl mx-auto px-6">

        @if (session()->has('success'))
        <div class="mx-auto mb-8 flex max-w-2xl items-start gap-3 rounded-2xl border border-green-500/20 bg-green-500/10 p-4 text-green-400">
            <i class="fa-solid fa-circle-check mt-0.5"></i>
            <div>
                <p class="font-semibold">Application Submitted!</p>
                <p class="text-sm mt-1">{{ session('success') }}</p>
            </div>
        </div>
        @endif

        <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-start">

            <!-- LEFT -->
            <div>

                <!-- Small Title -->
                <span class="text-secondary text-sm font-semibold tracking-[0.25em] uppercase">
                    Apply Now
                </span>

                <!-- Heading -->
                <h2 class="mt-4 max-w-md text-4xl sm:text-5xl font-bold leading-tight text-heading">
                    Let's Build Your Career Together
                </h2>

                <!-- Description -->
                <p class="mt-6 max-w-md leading-8 text-muted">
                    Have a passion for technology and innovation?
                    We'd love to hear from you. Fill out the form and
                    our team will get back to you within one business day.
                </p>

                <!-- BENEFIT ITEMS -->
                <div class="mt-8 space-y-3">

                    <!-- Quick Response -->
                    <div class="group flex items-center gap-4 rounded-2xl border border-border bg-card/60 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-primary/40">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl border border-primary/20 bg-primary/10">
                            <i class="fa-solid fa-bolt text-primary text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-heading">Quick Response</h4>
                            <p class="text-sm text-muted">We review applications and reply within one business day.</p>
                        </div>
                    </div>

                    <!-- Transparent Process -->
                    <div class="group flex items-center gap-4 rounded-2xl border border-border bg-card/60 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-secondary/40">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl border border-secondary/20 bg-secondary/10">
                            <i class="fa-solid fa-handshake text-secondary text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-heading">Transparent Process</h4>
                            <p class="text-sm text-muted">Clear steps, honest feedback, and no surprises along the way.</p>
                        </div>
                    </div>

                    <!-- Career Growth -->
                    <div class="group flex items-center gap-4 rounded-2xl border border-border bg-card/60 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-emerald-400/40">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl border border-emerald-400/20 bg-emerald-500/10">
                            <i class="fa-solid fa-arrow-trend-up text-emerald-400 text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-heading">Career Growth</h4>
                            <p class="text-sm text-muted">Mentorship, certifications, and a clear path to grow with us.</p>
                        </div>
                    </div>

                    <!-- Remote Friendly -->
                    <div class="group flex items-center gap-4 rounded-2xl border border-border bg-card/60 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-violet-400/40">
                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl border border-violet-400/20 bg-violet-500/10">
                            <i class="fa-solid fa-house-laptop text-violet-400 text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-heading">Remote Friendly</h4>
                            <p class="text-sm text-muted">Hybrid and remote options with flexible working hours.</p>
                        </div>
                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div>

                <div class="rounded-3xl border border-border bg-card/80 backdrop-blur-xl p-6 sm:p-10 shadow-sm">
                    <form wire:submit.prevent="submit" class="space-y-6">
                        <div class="grid gap-6 sm:grid-cols-2">
                            <div>
                                <label class="mb-2 block text-sm font-medium text-heading">Full Name <span class="text-primary">*</span></label>
                                <div class="relative">
                                    <i class="fa-solid fa-user absolute left-4 top-1/2 -translate-y-1/2 text-muted text-sm"></i>
                                    <input type="text" placeholder="John Doe" wire:model="name"
                                        class="h-14 w-full rounded-xl border border-border bg-background pl-11 pr-4 text-sm text-text outline-none transition focus:border-primary">
                                </div>
                                @error('name')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-heading">Email Address <span class="text-primary">*</span></label>
                                <div class="relative">
                                    <i class="fa-solid fa-envelope absolute left-4 top-1/2 -translate-y-1/2 text-muted text-sm"></i>
                                    <input type="email" placeholder="john@example.com" wire:model="email"
                                        class="h-14 w-full rounded-xl border border-border bg-background pl-11 pr-4 text-sm text-text outline-none transition focus:border-primary">
                                </div>
                                @error('email')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-heading">Phone Number <span class="text-primary">*</span></label>
                                <div class="relative">
                                    <i class="fa-solid fa-phone absolute left-4 top-1/2 -translate-y-1/2 text-muted text-sm"></i>
                                    <input type="text" placeholder="+91 98765 43210" wire:model="phone"
                                        class="h-14 w-full rounded-xl border border-border bg-background pl-11 pr-4 text-sm text-text outline-none transition focus:border-primary">
                                </div>
                                @error('phone')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-heading">Position Applying For <span class="text-primary">*</span></label>
                                <div class="relative">
                                    <i class="fa-solid fa-briefcase absolute left-4 top-1/2 -translate-y-1/2 text-muted text-sm"></i>
                                    <input type="text" placeholder="e.g. Backend Developer" wire:model="position"
                                        class="h-14 w-full rounded-xl border border-border bg-background pl-11 pr-4 text-sm text-text outline-none transition focus:border-primary">
                                </div>
                                @error('position')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-heading">Years of Experience <span class="text-primary">*</span></label>
                                <div class="relative">
                                    <i class="fa-solid fa-calendar-days absolute left-4 top-1/2 -translate-y-1/2 text-muted text-sm"></i>
                                    <select wire:model="experience"
                                        class="h-14 w-full appearance-none rounded-xl border border-border bg-background pl-11 pr-4 text-sm text-text outline-none transition focus:border-primary">
                                        <option value="">Select experience</option>
                                        <option value="0-1 Years">0-1 Years</option>
                                        <option value="1-3 Years">1-3 Years</option>
                                        <option value="3-5 Years">3-5 Years</option>
                                        <option value="5+ Years">5+ Years</option>
                                    </select>
                                    <i class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-muted text-xs"></i>
                                </div>
                                @error('experience')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label class="mb-2 block text-sm font-medium text-heading">Cover Letter <span class="text-muted">(optional)</span></label>
                                <div class="relative">
                                    <i class="fa-solid fa-file-lines absolute left-4 top-4 text-muted text-sm"></i>
                                    <textarea wire:model="message" rows="2" placeholder="Tell us a bit about yourself..."
                                        class="w-full rounded-xl border border-border bg-background pl-11 pr-4 py-4 text-sm text-text outline-none transition focus:border-primary"></textarea>
                                </div>
                                @error('message')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-heading">Upload Resume <span class="text-primary">*</span></label>
                            <label class="flex cursor-pointer flex-col items-center justify-center gap-3 rounded-2xl border-2 border-dashed border-border bg-background px-5 py-8 transition hover:border-primary hover:bg-primary/5">
                                <div class="flex h-14 w-14 items-center justify-center rounded-full bg-primary/10 text-primary text-2xl">
                                    <i class="fa-solid fa-cloud-arrow-up"></i>
                                </div>

                                @if ($resumeOriginalName)
                                <div class="flex items-center gap-2 rounded-xl border border-border bg-card px-4 py-2.5">
                                    <i class="fa-solid fa-file-pdf text-red-500"></i>
                                    <span class="text-sm font-medium text-heading">{{ $resumeOriginalName }}</span>
                                </div>
                                <p class="text-xs text-muted">Click to replace</p>
                                @else
                                <span class="text-sm font-medium text-heading">Click to upload your resume</span>
                                <span class="text-xs text-muted">PDF, DOC, DOCX — Max 5MB</span>
                                @endif

                                <input type="file" id="resume-input" accept=".pdf,.doc,.docx" class="hidden" onchange="handleResumeUpload(event)">
                            </label>
                            <div id="resume-upload-status" class="mt-3 hidden items-center gap-2 text-sm text-primary">
                                <i class="fa-solid fa-spinner fa-spin"></i>
                                Uploading file...
                            </div>
                            <p id="resume-upload-error" class="mt-1 hidden text-sm text-red-500"></p>
                            @error('resume_url')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <button wire:loading.attr="disabled" wire:target="submit" type="submit"
                            class="flex h-14 w-full items-center justify-center gap-2 rounded-xl bg-primary font-semibold text-white transition-all duration-300 cursor-pointer hover:-translate-y-0.5 hover:bg-blue-500">
                            <span wire:loading.remove>
                                <i class="fa-solid fa-paper-plane mr-2"></i>
                                Submit Application
                            </span>
                            <span wire:loading>
                                <i class="fa-solid fa-spinner fa-spin mr-2"></i>
                                Submitting...
                            </span>
                        </button>
                    </form>
                </div>

            </div>

        </div>

    </div>
</section>

<script>
    window.handleResumeUpload = async function (event) {
        const input = event.target;
        const file = input.files[0];
        if (!file) return;

        const statusEl = document.getElementById('resume-upload-status');
        const errorEl = document.getElementById('resume-upload-error');

        errorEl.classList.add('hidden');
        statusEl.classList.remove('hidden');
        statusEl.classList.add('flex');

        if (file.size > 5 * 1024 * 1024) {
            statusEl.classList.add('hidden');
            statusEl.classList.remove('flex');
            errorEl.textContent = 'The resume is too large. Maximum size is 5MB.';
            errorEl.classList.remove('hidden');
            input.value = '';
            return;
        }

        const form = new FormData();
        form.append('file', file);
        form.append('upload_preset', '{{ config('cloudinary.upload_preset') }}');

        try {
            const response = await fetch(
                'https://api.cloudinary.com/v1_1/{{ config('cloudinary.cloud_name') }}/auto/upload',
                { method: 'POST', body: form }
            );

            if (!response.ok) throw new Error('Upload failed');

            const data = await response.json();

            const wire = Livewire.first();
            await wire.set('resume_url', data.secure_url);
            await wire.set('resume_public_id', data.public_id);
            await wire.set('resume_original_name', file.name);
            await wire.set('resume_size', data.bytes);
        } catch (error) {
            statusEl.classList.add('hidden');
            statusEl.classList.remove('flex');
            errorEl.textContent = 'The resume failed to upload. Please try again.';
            errorEl.classList.remove('hidden');
            input.value = '';
        }
    };
</script>
