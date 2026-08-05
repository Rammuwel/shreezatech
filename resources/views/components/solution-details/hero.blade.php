@props(['solution'])

<section class="py-10 hero overflow-hidden  bg-background">
    <div class="relative mt-10  flex items-center">

       

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
            class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">

            <div
                class="grid lg:grid-cols-4 gap-20 items-center">

                <!-- ================================================= -->
                <!-- LEFT -->
                <!-- ================================================= -->

                <div class="col-span-2">

                    <!-- Badge -->

                    <nav class="mb-3 flex items-center gap-3 text-sm text-muted">

                        <a  wire:navigate href="{{ route('home') }}" class="transition text-secondary hover:text-secondary">
                            Home
                        </a>

                        <i class="fa-solid fa-chevron-right text-xs"></i>

                        <a  wire:navigate href="{{ route('solutions') }}" class="transition text-secondary hover:text-secondary">
                            solutions
                        </a>

                        <i class="fa-solid fa-chevron-right text-xs"></i>

                        <span class="text-heading">
                            {{ $solution['name'] }}
                        </span>

                    </nav>

                    <!-- Heading -->

                    <h1
                        class="hero-title mt-3 text-3xl lg:text-5xl font-semibold leading-tight text-heading">

                         {{ $solution['hero']['title'] }}
                      
                    </h1>

                    <!-- Description -->

                    <p
                        class="hero-description mt-3 max-w-xl text-lg leading-8 text-text">

                        {{ $solution['hero']['description'] }}

                    </p>

                    <!-- Buttons -->

                    <div
                        class="hero-buttons mt-5 flex flex-wrap gap-5">

                        <a
                            wire:navigate
                            href="{{ route('contact') }}"
                            class="rounded-full bg-primary px-8 py-4 font-semibold text-white transition hover:scale-105">

                            Start Your Project

                        </a>

                        <a
                             wire:navigate
                            href="{{ route('contact') }}"
                            class="rounded-full border border-border px-8 py-4 font-semibold text-heading hover:border-primary">

                            Explore Work

                        </a>

                    </div>

                    <!-- Stats -->

                </div>

                <!-- ================================================= -->
                <!-- RIGHT -->
                <!-- ================================================= -->

                <div
                    class="relative flex justify-center col-span-2">

                    <!-- Logo -->

                    <img
                        src="{{ asset('/images/solutions/shreeza-tech-solutions-hero.webp') }}"
                        class="relative z-0 w-full h-72 sm:h-80 md:h-auto md:w-[30rem] lg:w-[34rem] xl:w-[36rem] object-cover hero-float"
                        alt="Shreeza Tech industry solutions">

                    <!-- Floating Cards -->

                 
                </div>

            </div>

        </div>
    </div>
   
</section>