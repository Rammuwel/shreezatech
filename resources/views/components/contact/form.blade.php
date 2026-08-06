<section id="contact-form" class="relative mt-20 py-16 sm:py-20 overflow-hidden">

    <!-- Decorative Glows -->
    <div class="absolute -top-24 -left-24 h-80 w-80 rounded-full bg-primary/5 blur-[120px]"></div>
    <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-secondary/5 blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        @if (session()->has('success'))
            <div class="mb-8 rounded-xl border border-green-500/20 bg-green-500/10 p-4 text-sm text-green-400">
                <i class="fa-solid fa-circle-check mr-2"></i>{{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="mb-8 rounded-xl border border-red-500/20 bg-red-500/10 p-4 text-sm text-red-400">
                <i class="fa-solid fa-circle-exclamation mr-2"></i>{{ session('error') }}
            </div>
        @endif

        <div class="grid lg:grid-cols-5 gap-12 lg:gap-12 items-start">

            <!-- LEFT -->
            <div x-intersect="animate-fade-in-up" class="opacity-0 lg:col-span-2">

                <span class="inline-flex rounded-full bg-secondary/10 px-4 py-2 text-xs font-semibold tracking-[0.3em] uppercase text-secondary">
                    Contact Us
                </span>

                <h2 class="mt-6 text-4xl sm:text-5xl font-bold leading-tight text-heading">
                    Let's Start
                    <br>
                    <span class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                        a Project Together
                    </span>
                </h2>

                <p class="mt-6 max-w-md leading-8 text-muted">
                    Have an exciting idea? We'd love to hear from you. Fill out the form and we'll contact you within one business day.
                </p>

                <!-- CONTACT ITEMS -->
                <div class="mt-12 space-y-4">

                    @php
                        $items = [
                            ['icon' => 'fa-phone', 'title' => 'Phone', 'value' => '+91 87706 99454'],
                            ['icon' => 'fa-envelope', 'title' => 'Email', 'value' => 'info@shreezatech.com'],
                            ['icon' => 'fa-location-dot', 'title' => 'Address', 'value' => 'Ring Road, Mushakhedi, Indore, Madhya Pradesh'],
                        ];
                    @endphp

                    @foreach($items as $item)
                        <div class="group flex items-center gap-5">
                            <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl border border-primary/20 bg-primary/10 text-primary text-lg transition-all duration-300 group-hover:bg-primary group-hover:text-white">
                                <i class="fa-solid {{ $item['icon'] }}"></i>
                            </div>
                            <div>
                                <h4 class="font-semibold text-heading">{{ $item['title'] }}</h4>
                                <p class="mt-0.5 text-sm text-muted">{{ $item['value'] }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>

                <!-- SOCIAL -->
                <div class="mt-10">
                    <h4 class="font-semibold text-heading">Follow Us</h4>
                    <div class="mt-5 flex gap-4">
                        @php
                            $socials = [
                                ['icon' => 'facebook-f', 'url' => 'https://www.facebook.com/shreezatech'],
                                ['icon' => 'linkedin-in', 'url' => 'https://www.linkedin.com/company/shreezatech'],
                                ['icon' => 'instagram', 'url' => 'https://www.instagram.com/shreezatech'],
                                ['icon' => 'x-twitter', 'url' => 'https://x.com/shreezatech'],
                            ];
                        @endphp
                        @foreach($socials as $social)
                            <a
                                href="{{ $social['url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                aria-label="Follow us on {{ str_replace(['-'], ' ', $social['icon']) }}"
                                class="group flex h-11 w-11 items-center justify-center rounded-full border border-border bg-card text-muted transition-all duration-300 hover:-translate-y-1 hover:border-primary hover:bg-primary hover:text-white hover:shadow-lg hover:shadow-primary/20">
                                <i class="fab fa-{{ $social['icon'] }}"></i>
                            </a>
                        @endforeach
                    </div>
                </div>

            </div>

            <!-- RIGHT -->
            <div x-intersect="animate-fade-in-up" style="animation-delay: 100ms" class="opacity-0 lg:col-span-3">

                <div class="rounded-3xl border border-border bg-card/80 backdrop-blur-xl p-8 shadow-2xl shadow-black/5">

                    <form wire:submit.prevent="submit" class="space-y-5">

                        <div class="grid gap-5 sm:grid-cols-2">

                            <!-- Name -->
                            <div class="relative">
                                <input
                                    type="text"
                                    placeholder="Your Name"
                                    wire:model="name"
                                    class="h-14 w-full rounded-xl border border-border bg-background px-5 text-sm text-text outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20">
                                @error('name')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="relative">
                                <input
                                    type="email"
                                    placeholder="Your Email"
                                    wire:model="email"
                                    class="h-14 w-full rounded-xl border border-border bg-background px-5 text-sm text-text outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20">
                                @error('email')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->
                            <div class="relative">
                                <input
                                    type="text"
                                    placeholder="Phone Number"
                                    wire:model="phone"
                                    class="h-14 w-full rounded-xl border border-border bg-background px-5 text-sm text-text outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20">
                                @error('phone')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Service -->
                            <div class="relative">
                                <select
                                    wire:model="service"
                                    class="h-14 w-full rounded-xl border border-border bg-background px-5 text-sm text-text outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20">
                                    <option value="">Select Service</option>
                                    <option>Website Development</option>
                                    <option>Web Application</option>
                                    <option>Mobile App</option>
                                    <option>UI/UX Design</option>
                                    <option>Consulting</option>
                                </select>
                                @error('service')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <!-- Message -->
                        <div class="relative">
                            <textarea
                                wire:model="message"
                                rows="4"
                                placeholder="Your Message"
                                class="w-full rounded-xl border border-border bg-background px-5 py-4 text-sm text-text outline-none transition focus:border-primary focus:ring-2 focus:ring-primary/20"></textarea>
                            @error('message')
                                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Button -->
                        <button
                            wire:loading.attr="disabled"
                            wire:target="submit"
                            class="mt-2 flex h-14 w-full items-center justify-center gap-2 rounded-xl bg-primary font-semibold text-white transition-all duration-300 hover:-translate-y-0.5 hover:bg-blue-500 hover:shadow-xl hover:shadow-primary/20 cursor-pointer disabled:cursor-not-allowed disabled:opacity-70 disabled:hover:translate-y-0">

                            <span wire:loading.remove>
                                Send Message
                            </span>

                            <span wire:loading class="flex items-center gap-2">
                                <i class="fa-solid fa-circle-notch animate-spin"></i>
                                Sending...
                            </span>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>
