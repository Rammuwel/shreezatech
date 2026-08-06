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
                        <span class="h-2 w-2 rounded-full bg-secondary"></span>
                        <small class="text-xs font-bold tracking-[0.25em] uppercase text-secondary">
                            About Shreeza
                        </small>
                    </div>

                    <!-- Heading -->
                    <h1 class="portfolio-hero-title mt-5 text-3xl lg:text-5xl font-bold leading-tight text-heading">
                        Empowering Businesses
                        <br>
                        <span class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                            Through Technology
                        </span>
                    </h1>

                    <!-- Description -->
                    <p class="portfolio-hero-description mt-5 max-w-xl text-lg leading-8 text-text">
                        Shreeza is a technology consulting and software development company dedicated to building innovative digital solutions that help businesses grow, transform, and succeed. We combine strategy, creativity, and cutting-edge technology to deliver secure, scalable, and future-ready software for organizations worldwide.
                    </p>

                    <!-- Buttons -->
                    <div class="portfolio-hero-buttons mt-10 flex flex-wrap gap-5">
                        <a href="{{ url('/contact') }}"
                            class="rounded-full bg-primary px-8 py-4 font-semibold text-white transition hover:scale-105 hover:bg-primary-hover">
                            Start Your Project
                        </a>
                        <a href="{{ url('/portfolio') }}"
                            class="rounded-full border border-border px-8 py-4 font-semibold text-heading hover:border-primary hover:bg-card">
                            Explore Work
                        </a>
                    </div>

                </div>

                <!-- ================================================= -->
                <!-- RIGHT -->
                <!-- ================================================= -->

                <div x-intersect="animate-fade-in-up" class="opacity-0 relative flex justify-center col-span-2">

                    <!-- Glow behind image -->
                    <div class="absolute inset-0 bg-linear-to-br from-primary/20 via-transparent to-secondary/20 blur-3xl"></div>

                    <!-- Framed image -->
                    <div class="relative rounded-[2rem] border border-border bg-card p-3 shadow-2xl shadow-primary/10">
                        <img
                            src="{{ asset('/images/about/shreeza-tech-about-hero.webp') }}"
                            width="1536" height="1024"
                            class="w-full h-auto rounded-[1.6rem] object-cover"
                            alt="Shreeza Tech about us hero banner">

                        <!-- Overlay chip -->
                        <div class="absolute -bottom-5 left-1/2 -translate-x-1/2 flex items-center gap-3 rounded-2xl border border-border bg-card px-5 py-3 shadow-xl whitespace-nowrap">
                            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary/10 text-primary">
                                <i class="fa-solid fa-award"></i>
                            </div>
                            <div>
                                <p class="text-sm font-bold text-heading leading-none">Trusted Worldwide</p>
                                <p class="mt-1 text-xs text-muted">Global clients & partners</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- ================= Mission / Vision / Values ================= -->

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-6 pb-6">
        <div x-intersect="animate-fade-in-up" class="opacity-0 grid gap-8 md:grid-cols-3 rounded-3xl border border-border bg-card p-6 sm:p-8">

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center text-center transition-all duration-500 md:border-r md:border-border md:pr-8">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl transition duration-300 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white">
                    <i class="fa-solid fa-bullseye"></i>
                </div>
                <h3 class="mt-4 text-xl font-bold text-heading">Our Mission</h3>
                <p class="mt-3 text-muted leading-7">Empowering businesses through technology and innovation.</p>
            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center text-center transition-all duration-500 md:border-r md:border-border md:pr-8">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl transition duration-300 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white">
                    <i class="fa-solid fa-eye"></i>
                </div>
                <h3 class="mt-4 text-xl font-bold text-heading">Our Vision</h3>
                <p class="mt-3 text-muted leading-7">To be a global leader in delivering digital excellence.</p>
            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center text-center transition-all duration-500">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl transition duration-300 group-hover:scale-110 group-hover:bg-secondary group-hover:text-white">
                    <i class="fa-solid fa-gem"></i>
                </div>
                <h3 class="mt-4 text-xl font-bold text-heading">Our Values</h3>
                <p class="mt-3 text-muted leading-7">Integrity, innovation, quality, and customer success.</p>
            </div>

        </div>
    </div>
</section>
