<section class="portfolio-hero overflow-hidden bg-background">
    <div class="relative mt-20 py-5 flex items-center">

        <!-- ================= Background ================= -->

        <div class="absolute inset-0">

            <!-- Grid -->
            <div
                class="absolute inset-0 opacity-10
            bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)]
            bg-size-[80px_80px]">
            </div>

            <!-- Blue Glow -->
            <div class="absolute top-20 left-0 w-96 h-96 bg-primary/20 rounded-full blur-[140px]"></div>

            <!-- Gold Glow -->
            <div class="absolute bottom-0 right-0 w-125 h-125 bg-secondary/20 rounded-full blur-[180px]"></div>

        </div>

        <!-- ================= Container ================= -->

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid lg:grid-cols-4 gap-14 lg:gap-20 items-center">

                <!-- ================================================= -->
                <!-- LEFT -->
                <!-- ================================================= -->

                <div x-intersect="animate-fade-in-up" class="opacity-0 col-span-2">

                    <!-- Badge -->
                    <div class="inline-flex items-center gap-3 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-1.5">
                        <span class="h-2 w-2 rounded-full bg-secondary animate-pulse"></span>
                        <small class="text-xs font-bold tracking-[0.25em] uppercase text-secondary">
                            Contact Us
                        </small>
                    </div>

                    <!-- Heading -->
                    <h1 class="portfolio-hero-title mt-5 text-3xl lg:text-5xl font-bold leading-tight text-heading">
                        Let's Start
                        <br>
                        <span class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                            a Project Together
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="portfolio-hero-description mt-5 max-w-xl text-lg leading-8 text-text">
                        Have an exciting idea? We'd love to hear from you. Fill out the form and we'll contact you within one business day.
                    </p>

                    <!-- Buttons -->
                    <div class="portfolio-hero-buttons mt-10 flex flex-wrap gap-5">
                        <a href="#contact-form"
                            class="rounded-full bg-primary px-8 py-4 font-semibold text-white transition hover:scale-105 hover:bg-primary-hover">
                            Send a Message
                        </a>
                        <a href="tel:+918770699454"
                            class="rounded-full border border-border px-8 py-4 font-semibold text-heading hover:border-primary hover:bg-card">
                            <i class="fa-solid fa-phone mr-2 text-primary"></i>
                            Call Us Now
                        </a>
                    </div>

                </div>

                <!-- ================================================= -->
                <!-- RIGHT -->
                <!-- ================================================= -->

                <div x-intersect="animate-fade-in-up" class="opacity-0 relative flex justify-center col-span-2">

                    <!-- Glow behind image -->
                    <div class="absolute inset-0 bg-linear-to-br from-primary/20 via-transparent to-secondary/20 blur-3xl"></div>

                    <img
                        src="{{ asset('/images/shreeza-tech-global-network.webp') }}"
                        width="1024" height="1024"
                        class="portfolio-image relative z-0 w-full h-auto md:max-w-[34rem] lg:max-w-[38rem] xl:max-w-[42rem] mx-auto object-cover opacity-70"
                        alt="Shreeza Tech contact hero banner">

                </div>
            </div>

        </div>
    </div>

    <!-- ================= Features Strip ================= -->

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 pb-6">
        <div x-intersect="animate-fade-in-up" class="opacity-0 grid gap-8 md:grid-cols-2 lg:grid-cols-4 rounded-3xl border border-border bg-card/30 p-6 sm:p-8">

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center text-center transition-all duration-500 lg:border-r lg:border-border lg:pr-6">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl transition duration-300 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <h3 class="mt-4 text-xl font-bold text-heading">Fast Response</h3>
                <p class="mt-3 text-muted leading-7">We reply to every inquiry within one business day.</p>
            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center text-center transition-all duration-500 lg:border-r lg:border-border lg:pr-6">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl transition duration-300 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white">
                    <i class="fa-solid fa-headset"></i>
                </div>
                <h3 class="mt-4 text-xl font-bold text-heading">Expert Support</h3>
                <p class="mt-3 text-muted leading-7">Talk directly with our engineers, not a call center.</p>
            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center text-center transition-all duration-500 lg:border-r lg:border-border lg:pr-6">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl transition duration-300 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white">
                    <i class="fa-solid fa-globe"></i>
                </div>
                <h3 class="mt-4 text-xl font-bold text-heading">Global Reach</h3>
                <p class="mt-3 text-muted leading-7">Serving clients worldwide across every time zone.</p>
            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center text-center transition-all duration-500">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl transition duration-300 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white">
                    <i class="fa-solid fa-handshake"></i>
                </div>
                <h3 class="mt-4 text-xl font-bold text-heading">Free Consultation</h3>
                <p class="mt-3 text-muted leading-7">Get honest advice and a clear roadmap, no cost.</p>
            </div>

        </div>
    </div>
</section>
