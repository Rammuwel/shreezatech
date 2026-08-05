<section class="portfolio-hero overflow-hidden  bg-background">
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
            <div
                class="absolute top-20 left-0 w-96 h-96  bg-linear-to-r from-primary/10 to-transparent  rounded-full blur-[140px]">
            </div>

            <!-- Gold Glow -->

            <div
                class="absolute bottom-0 right-0 w-125 h-125  bg-linear-to-r to-transparent from-background  to-b rounded-full blur-[680px]">
            </div>


        </div>

        <div
            class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">

            <div
                class="grid lg:grid-cols-4 gap-20 items-center">

                <!-- ================================================= -->
                <!-- LEFT -->
                <!-- ================================================= -->

                <div class="col-span-2">

                    <!-- Badge -->

                    <div
                        class="portfolio-hero-badge  inline-flex items-center gap-3  px-3 py-1">



                        <small
                            class="text-secondary ">

                            Our Technologies

                        </small>
                    </div>

                    <!-- Heading -->

                    <h1
                        class="portfolio-hero-title mt-3 text-3xl lg:text-5xl font-semibold leading-tight text-heading">

                        Engineering Tomorrow
                       
                        <br>
                        <span
                            class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                            With Modern Technology

                        </span>

                    </h1>

                    <!-- Description -->

                    <p
                        class="portfolio-hero-description mt-8 max-w-xl text-lg leading-8 text-text">

                       Our expertise spans modern programming languages, frameworks, cloud platforms, databases, AI technologies, and DevOps tools—enabling us to build innovative, scalable, and secure digital products for businesses of every size.

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
                        src="{{ asset('/images/technology/shreeza-tech-technology-hero.webp') }}"
                        width="1152" height="768"
                        class="portfolio-image relative z-0 w-full h-56 sm:h-64 md:h-auto md:max-w-[30rem] lg:max-w-[32rem] xl:max-w-[34rem] mx-auto object-cover hero-float opacity-70"
                        alt="Shreeza Tech technology expertise hero banner">

                </div>
            </div>

        </div>
    </div>
    <div class="max-w-7xl mt-4 mx-auto  border-border bg-card/30 rounded-2xl mb-3 ">

        <!-- Features -->
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-4 p-3">

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center  transition-all duration-500 border-r border-border">

                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl">

                    <i class="fa-solid fa-layer-group"></i>

                </div>

                <h3 class="mt-2 text-xl font-semibold text-heading">

                    Future-Ready Stack

                </h3>

                <p class=" text-muted leading-7 text-center justify-center">

                    Curated modern languages, frameworks, and platforms built to scale with you.

                </p>

            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center  transition-all duration-500 border-r border-border">

                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl">

                    <i class="fa-solid fa-brain"></i>

                </div>

                <h3 class="mt-2 text-xl font-semibold text-heading">

                    AI & Data Powered

                </h3>

                <p class=" text-muted leading-7 text-center justify-center">

                    Machine learning, analytics, and intelligent automation embedded in your products.

                </p>

            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center  transition-all duration-500 border-r border-border">

                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl">

                    <i class="fa-solid fa-cloud"></i>

                </div>

                <h3 class="mt-2 text-xl font-semibold text-heading">

                    Cloud-Native & DevOps

                </h3>

                <p class=" text-muted leading-7 text-center justify-center">

                    Deploy, monitor, and scale with confidence on any cloud provider.

                </p>

            </div>

            <!-- Card -->
            <div class="group flex flex-col items-center justify-center   transition-all duration-500 ">

                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-secondary/10 text-secondary text-2xl">

                    <i class="fa-solid fa-shield-halved"></i>

                </div>

                <h3 class="mt-2 text-xl font-semibold text-heading">

                    Secure & Performant

                </h3>

                <p class=" text-muted leading-7 text-center justify-center">

                    Battle-tested foundations prioritizing security, speed, and reliability.

                </p>

            </div>

        </div>

    </div>
</section>