<footer class="w-full border-t border-border bg-background py-12 text-muted font-sans">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <!-- Main Structure Grid -->
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-6">

            <!-- Company Profile & Meta Section -->
            <div class="lg:col-span-2">
                <!-- Logo -->
                <a href="{{ route('home') }}" wire:navigate class="flex items-center font-sans">

                    <img src="{{ asset('logo.png') }}" class="w-15 invert-20" alt="Shreeza">

                    <div class="ml-0.5">
                        <h2 class=" text-3xl font-bold  text-text">
                            Shreeza
                        </h2>

                        <p class="text-xs text-muted">
                            Tech. Consulting & Software Solutions
                        </p>
                    </div>

                </a>
                <p class="mt-4 max-w-xs text-sm leading-relaxed text-muted">
                    We help businesses innovate, automate, and scale with cutting-edge technology and modern engineering practices.
                </p>
                <!-- Monochromatic Circle Social Triggers -->
                <div class="mt-6 flex items-center gap-x-3">
                    <a href="javascript:void[0]" class="flex h-7 w-7 items-center justify-center rounded-full bg-[--color-card] text-muted hover:text-heading transition-colors border border-[--color-border] text-xs">f</a>
                    <a href="javascript:void[0]" class="flex h-7 w-7 items-center justify-center rounded-full bg-[--color-card] text-muted hover:text-heading transition-colors border border-[--color-border] text-xs">in</a>
                    <a href="javascript:void[0]" class="flex h-7 w-7 items-center justify-center rounded-full bg-[--color-card] text-muted hover:text-heading transition-colors border border-[--color-border] text-xs">t</a>
                    <a href="javascript:void[0]" class="flex h-7 w-7 items-center justify-center rounded-full bg-[--color-card] text-muted hover:text-heading transition-colors border border-[--color-border] text-xs">ig</a>
                </div>
            </div>

            <!-- Links Column: Services -->
            <div>
                <h3 class="font-heading text-xs font-semibold text-heading tracking-wider uppercase">Services</h3>
                <ul role="list" class="mt-4 space-y-2 text-xs">
                    <li><a href="/services/web-development" wire:navigate class="hover:text-heading transition-colors duration-200">Web Development</a></li>
                    <li><a href="/services/mobile-app-development" wire:navigate class="hover:text-heading transition-colors duration-200">Mobile Apps</a></li>
                    <li><a href="/services/cloud-solutions" wire:navigate class="hover:text-heading transition-colors duration-200">Cloud Solutions</a></li>
                    <li><a href="/services/ai-automation" wire:navigate class="hover:text-heading transition-colors duration-200">AI & Automation</a></li>
                    <li><a href="/services/ui-ux-design" wire:navigate class="hover:text-heading transition-colors duration-200">UI/UX Design</a></li>
                    <li><a href="/services/iot-development" wire:navigate class="hover:text-heading transition-colors duration-200">IoT Development</a></li>
                </ul>
            </div>

            <!-- Links Column: Solutions -->
            <div>
                <h3 class="font-heading text-xs font-semibold text-heading tracking-wider uppercase">Solutions</h3>
                <ul role="list" class="mt-4 space-y-2 text-xs">
                    <li><a href="/solutions/healthcare" wire:navigate class="hover:text-heading transition-colors duration-200">Healthcare</a></li>
                    <li><a href="/solutions/finance" wire:navigate class="hover:text-heading transition-colors duration-200">Finance</a></li>
                    <li><a href="/solutions/education" wire:navigate class="hover:text-heading transition-colors duration-200">Education</a></li>
                    <li><a href="/solutions/real-estate" wire:navigate class="hover:text-heading transition-colors duration-200">Real Estate</a></li>
                    <li><a href="/solutions/manufacturing" wire:navigate class="hover:text-heading transition-colors duration-200">Manufacturing</a></li>
                    <li><a href="/solutions/retail" wire:navigate class="hover:text-heading transition-colors duration-200">Retail</a></li>
                </ul>
            </div>

            <!-- Links Column: Company -->
            <div>
                <h3 class="font-heading text-xs font-semibold text-heading tracking-wider uppercase">Company</h3>
                <ul role="list" class="mt-4 space-y-2 text-xs">
                    <li><a href="/about" wire:navigate class="hover:text-heading transition-colors duration-200">About Us</a></li>
                    <li><a href="/careers" wire:navigate class="hover:text-heading transition-colors duration-200">Careers</a></li>
                    <li><a href="/blog" wire:navigate class="hover:text-heading transition-colors duration-200">Blog</a></li>
                    <li><a href="/portfolio" wire:navigate class="hover:text-heading transition-colors duration-200">Case Studies</a></li>
                    <li><a href="/contact" wire:navigate class="hover:text-heading transition-colors duration-200">Contact</a></li>
                </ul>
            </div>

            <!-- Links Column: Resources -->
            <div>
                <h3 class="font-heading text-xs font-semibold text-heading tracking-wider uppercase">Resources</h3>
                <ul role="list" class="mt-4 space-y-2 text-xs">
                    <li><a href="javascript:void[0]" wire:navigate class="hover:text-heading transition-colors duration-200">Documentation</a></li>
                    <li><a href="javascript:void[0]" wire:navigate class="hover:text-heading transition-colors duration-200">Guides</a></li>
                    <li><a href="javascript:void[0]" wire:navigate class="hover:text-heading transition-colors duration-200">FAQ</a></li>
                    <li><a href="javascript:void[0]" wire:navigate class="hover:text-heading transition-colors duration-200">Privacy Policy</a></li>
                    <li><a href="javascript:void[0]" wire:navigate class="hover:text-heading transition-colors duration-200">Terms of Service</a></li>
                </ul>
            </div>
        </div>

        <!-- Lower Section: Newsletter Grid Entry & Back to Top -->
        <div class="mt-12 flex flex-col items-center justify-between gap-6 border-t border-border pt-8 lg:flex-row">

            <!-- Newsletter Capture Sub-Layout -->
            <div class="w-full max-w-md lg:max-w-xl">
                <h3 class="font-heading text-xs font-semibold text-heading uppercase tracking-wider">Newsletter</h3>
                <p class="mt-1 text-xs text-muted">Stay updated with our latest news and insights.</p>

                <form id="newsletter-form" action="{{ route('newsletter.subscribe') }}" method="POST" class="relative mt-3 flex items-center">
                    @csrf
                    <input type="email" name="email" id="newsletter-email" placeholder="Enter your email" required
                        class="w-full rounded-md border border-[--color-border] bg-[--color-card] py-2.5 pl-4 pr-14 text-xs text-heading placeholder-muted focus:border-[--color-primary] focus:outline-none transition-colors" />

                    <button type="submit" class="absolute right-1 top-1 bottom-1 rounded-md bg-secondary px-3.5 hover:brightness-110 active:scale-95 transition-all text-white">
                        <svg class="h-3.5 w-3.5 transform rotate-45 hover:rotate-0 transition-all" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                        </svg>
                    </button>
                </form>
                <div id="newsletter-message" class="mt-1 block text-[11px]"></div>

                <script>
                    document.getElementById('newsletter-form')?.addEventListener('submit', async function (e) {
                        e.preventDefault();
                        const form = this;
                        const msg = document.getElementById('newsletter-message');
                        const email = document.getElementById('newsletter-email').value;

                        try {
                            const res = await fetch(form.action, {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                                    'Accept': 'application/json',
                                },
                                body: JSON.stringify({ email }),
                            });

                            const data = await res.json();

                            if (res.ok) {
                                msg.className = 'mt-1 block text-[11px] text-green-600';
                                msg.textContent = data.message;
                                form.reset();
                            } else {
                                msg.className = 'mt-1 block text-[11px] text-red-500';
                                msg.textContent = data.errors?.email?.[0] || 'Something went wrong.';
                            }
                        } catch {
                            msg.className = 'mt-1 block text-[11px] text-red-500';
                            msg.textContent = 'Network error. Please try again.';
                        }
                    });
                </script>
            </div>

            <!-- Kinetic Window Back-to-Top Button -->
            <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})"
                class="flex h-9 w-9 items-center justify-center rounded-full bg-[--color-card] border border-[--color-border] text-muted hover:text-heading hover:border-[--color-primary] transition-all shadow-md group">
                <svg class="h-4 w-4 transform group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18" />
                </svg>
            </button>
        </div>
    </div>
</footer>