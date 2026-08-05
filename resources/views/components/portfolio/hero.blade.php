<section class="portfolio-hero overflow-hidden  bg-background">
    <div class="relative mt-20 py-4 flex items-center">

        <!-- ================= Background ================= -->

         <div class="absolute inset-0">

            <!-- Grid -->

            <div
                class="absolute inset-0 opacity-10
            bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)]
            bg-size-[80px_80px]">
            </div>

            <!-- Blue Glow -->
            <div
                class="absolute top-20 left-0 w-96 h-96  bg-linear-to-r from-primary/10 to-transparent  rounded-full blur-[140px]">
            </div>

            <!-- Gold Glow -->

            <div
                class="absolute bottom-0 right-0 w-125 h-125  bg-linear-to-r to-transparent from-background  to-b rounded-full blur-[680px]">
            </div>
           

        </div>

        <!-- ================= Container ================= -->

        <div
            class="relative mt-4 z-10 max-w-7xl mx-auto px-6 lg:px-8">

            <div
                class="grid lg:grid-cols-4 gap-10 lg:gap-20 items-center">

                <!-- ================================================= -->
                <!-- LEFT -->
                <!-- ================================================= -->

                <div class="col-span-2">

                    <!-- Badge -->

                    <div
                        class="portfolio-hero-badge  inline-flex items-center gap-3  px-3 py-1">

                        

                        <small
                            class="text-secondary ">

                            Our Portfolio

                        </small>
                    </div>

                    <!-- Heading -->

                    <h1
                        class="portfolio-hero-title mt-3 text-3xl lg:text-5xl font-semibold leading-tight text-heading">

                        Building Digital Products

                        <br>
                        <span
                            class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                            That Make an Impact

                        </span>

                    </h1>

                    <!-- Description -->

                    <p
                        class="portfolio-hero-description mt-8 max-w-xl text-lg leading-8 text-text">

                        Discover a collection of successful projects across web development, mobile applications, enterprise software, AI-powered solutions, cloud platforms, and UI/UX design—crafted to help businesses innovate, grow, and lead their industries.

                    </p>

                    <!-- Buttons -->

                    <div
                        class="portfolio-hero-buttons mt-10 flex flex-wrap gap-5">

                        <a
                            href="{{ url('/contact') }}"
                            class="rounded-full bg-primary px-8 py-4 font-semibold text-white transition hover:scale-105">

                            Start Your Project

                        </a>

                        <a
        href="{{ url('/portfolio') }}"
                            class="rounded-full border border-border px-8 py-4 font-semibold text-heading hover:border-primary">

                            Explore Work

                        </a>

                    </div>
                </div>

                <!-- ================================================= -->
                <!-- RIGHT -->
                <!-- ================================================= -->

                <div
                    class="relative flex justify-center col-span-2">

                    <img
                        src="{{ asset('/images/projects/shreeza-tech-portfolio-hero.webp') }}"
                        width="948" height="632"
                        class="portfolio-image relative z-0 w-full h-56 sm:h-64 md:h-auto md:max-w-[30rem] lg:max-w-[32rem] xl:max-w-[34rem] mx-auto object-cover hero-float opacity-70"
                        alt="Shreeza Tech portfolio hero banner">

                </div>
            </div>

        </div>
    </div>
       <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-3">
        <div class="border-border bg-card rounded-2xl">

        <!-- Features -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4 p-3">

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center  transition-all duration-500 border-r border-border">

                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl">

                    <i class="fa-solid fa-chart-line"></i>

                </div>

                <h3 class="mt-2 text-xl font-semibold text-heading">

                    Proven Results

                </h3>

                <p class=" text-muted leading-7 text-center justify-center">

                    Every project shipped with measurable outcomes and real business value.

                </p>

            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center  transition-all duration-500 border-r border-border">

                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl">

                    <i class="fa-solid fa-layer-group"></i>

                </div>

                <h3 class="mt-2 text-xl font-semibold text-heading">

                    Diverse Industries

                </h3>

                <p class=" text-muted leading-7 text-center justify-center">

                    Tailored solutions across healthcare, finance, education, retail, and more.

                </p>

            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center  transition-all duration-500 border-r border-border">

                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl">

                    <i class="fa-solid fa-code"></i>

                </div>

                <h3 class="mt-2 text-xl font-semibold text-heading">

                    Full-Stack Expertise

                </h3>

                <p class=" text-muted leading-7 text-center justify-center">

                    End-to-end product engineering from design to deployment and beyond.

                </p>

            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center   transition-all duration-500 ">

                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl">

                    <i class="fa-solid fa-handshake"></i>

                </div>

                <h3 class="mt-2 text-xl font-semibold text-heading">

                    Client-First Approach

                </h3>

                <p class=" text-muted leading-7 text-center justify-center">

                    Transparent collaboration and dedicated support from idea to launch.

                </p>

            </div>

        </div>

        </div>

    </div>
</section>