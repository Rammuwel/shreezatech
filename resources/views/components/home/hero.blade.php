<section class=" hero overflow-hidden  bg-background">
    <div class="relative mt-25  flex items-center">

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
                class="absolute top-20 left-0 w-96 h-96 bg-primary/20 rounded-full blur-[140px]">
            </div>

            <!-- Gold Glow -->

            <div
                class="absolute bottom-0 right-0 w-125 h-125 bg-secondary/20 rounded-full blur-[180px]">
            </div>

        </div>

        <!-- ================= Container ================= -->

        <div
            class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">

            <div
                class="grid lg:grid-cols-5 gap-20 items-center">

                <!-- ================================================= -->
                <!-- LEFT -->
                <!-- ================================================= -->

                <div class="col-span-3">

                    <!-- Badge -->

                    <div
                        class="hero-badge  inline-flex items-center gap-3   rounded-full border border-secondary/30 bg-secondary/10 px-3 py-1">

                        <span
                            class="w-2 h-2 rounded-full bg-secondary animate-pulse">
                        </span>

                        <small
                            class="text-secondary ">

                            Welcome To Shreeza

                        </small>
                    </div>

                    <!-- Heading -->

                    <h1
                        class="hero-title mt-3 text-3xl lg:text-5xl font-semibold leading-tight text-heading">

                        Engineering the Future of 
                        <br>
                        <span
                            class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                            Digital Innovation

                        </span>

                    </h1>

                    <!-- Description -->

                    <p
                        class="hero-description mt-3 max-w-xl text-lg leading-8 text-text">

                        We build enterprise software,
                        AI-powered platforms,
                        cloud infrastructure,
                        mobile applications,
                        and digital products
                        that transform businesses worldwide.

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
                            href="{{ route('portfolio') }}"
                            class="rounded-full border border-border px-8 py-4 font-semibold text-heading hover:border-primary">

                            Explore Work

                        </a>

                    </div>

                    <!-- Stats -->

                    <div
                        class="hero-stats mt-10 grid grid-cols-2 md:grid-cols-4 gap-4 w-[80%]">

                        <div>
                            <div class="flex justify-center items-center  gap-2">
                                <i class="fa-solid fa-code text-primary text-3xl"></i>

                                <h2
                                    class="counter text-3xl font-bold text-heading"
                                    data-count="50"
                                    data-suffix="+">
                                    0
                                </h2>
                            </div>

                            <p class="text-muted text-center">

                                Projects

                            </p>

                        </div>

                        <div>

                           <div class="flex justify-center items-center  gap-2">
                                <i class="fa-solid fa-handshake text-primary text-3xl"></i>

                                <h2
                                    class="counter text-3xl font-bold text-heading"
                                    data-count="30"
                                    data-suffix="+">
                                    0
                                </h2>
                            </div>

                            <p class="text-muted text-center">

                                Clients

                            </p>

                        </div>

                        <div>

                            <div class="flex justify-center items-center  gap-2">
                                <i class="fa-solid fa-award text-primary text-3xl"></i>

                                <h2
                                    class="counter text-3xl font-bold text-heading"
                                    data-count="5"
                                    data-suffix="+">
                                    0
                                </h2>
                            </div>

                            <p class="text-muted text-center">

                                Years

                            </p>

                        </div>

                        <div>

                            <div class="flex justify-center items-center  gap-2">
                                <i class="fa-solid fa-face-smile text-primary text-3xl"></i>

                                <h2
                                    class="counter text-3xl font-bold text-heading"
                                    data-count="50"
                                    data-suffix="+">
                                    0
                                </h2>
                            </div>

                            <p class="text-muted text-center">

                                Satisfaction

                            </p>

                        </div>

                    </div>

                </div>

                <!-- ================================================= -->
                <!-- RIGHT -->
                <!-- ================================================= -->

                <div
                    class="relative flex justify-center col-span-2">

                    <!-- Orbit -->

                    <div
                        class="hero-orbit hero-orbit-1 absolute w-130 h-130 rounded-full border border-primary/20 animate-spin opacity-90"
                        style="animation-duration:40s">
                    </div>

                    <div
                        class="hero-orbit hero-orbit-2 absolute w-95 h-95 rounded-full border border-secondary/20 animate-spin opacity-60"
                        style="animation-duration:20s;animation-direction:reverse">
                    </div>

                    <!-- Glow -->

                    <div
                        class="absolute w-105 h-105 rounded-full bg-primary/20 blur-[120px] opacity-90">
                    </div>

                    <!-- Logo -->

                    <img
                        src="{{ asset('logo.png') }}"
                        class="hero-logo relative z-0 w-107 hero-float opacity-60 "
                        alt="Shreeza">

                    <!-- Floating Cards -->

                    <div
                        class="hero-card hero-card-ai absolute left-0 top-16 rounded-2xl bg-card border border-border p-4 backdrop-blur-xl">

                        <div class="flex items-center gap-3">

                            <i class="fa-solid fa-robot text-primary text-xl"></i>

                            <div>

                                <h4 class="font-semibold text-heading">

                                    AI Powered

                                </h4>

                                <p class="text-xs text-muted">

                                    Automation

                                </p>

                            </div>

                        </div>

                    </div>
                    <div
                        class="hero-card hero-card-rad absolute left-0 top-80 rounded-2xl bg-card border border-border p-4 backdrop-blur-xl">

                        <div class="flex items-center gap-3">

                            <i class="fa-solid fa-laptop-code text-primary text-xl"></i>

                            <div>

                                <h4 class="font-semibold text-secondary">

                                    RAD

                                </h4>

                                <p class="text-xs text-muted">

                                    Rapid Application Development

                                </p>

                            </div>

                        </div>

                    </div>

                    <div
                        class="hero-card hero-card-cloud absolute right-0 top-32 rounded-2xl bg-card border border-border p-4">

                        <div class="flex items-center gap-3">

                            <i class="fa-solid fa-cloud text-secondary text-xl"></i>

                            <div>

                                <h4 class="font-semibold text-secondary">

                                    Cloud

                                </h4>

                                <p class="text-xs text-muted">

                                    AWS & Azure

                                </p>

                            </div>

                        </div>

                    </div>

                    <div
                        class="hero-card hero-card-security absolute bottom-20 right-5 rounded-2xl bg-card border border-border p-4">

                        <div class="flex items-center gap-3">

                            <i class="fa-solid fa-shield-halved text-primary"></i>

                            <div>

                                <h4 class="font-semibold text-primary">

                                    Secure

                                </h4>

                                <p class="text-xs text-muted">

                                    Enterprise Grade

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <div class="my-5 max-w-7xl mx-auto rounded-2xl border border-border bg-card/50 backdrop-blur-xl p-6">

        <div class="flex flex-col lg:flex-row lg:items-center gap-6">

            <!-- Left -->
            <div class="lg:w-1/4">
                <p class="text-xs tracking-[0.25em] uppercase text-secondary font-semibold">
                    Industries We Serve
                </p>

                <!-- <h3 class="mt-2 text-xl font-bold text-heading">
                    Building Solutions for Every Industry
                </h3> -->

                <p class="mt-2 text-sm text-muted">
                    Delivering scalable software solutions across multiple business sectors.
                </p>
            </div>

            <!-- Right -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 flex-1">

                <div class="group flex flex-col items-center justify-center rounded-xl border border-border bg-background/50 p-4 hover:border-primary hover:bg-primary/10 transition-all duration-300">
                    <i class="fa-solid fa-heart-pulse text-3xl text-red-400 group-hover:scale-110 transition"></i>
                    <span class="mt-3 text-sm font-semibold text-heading">Healthcare</span>
                </div>

                <div class="group flex flex-col items-center justify-center rounded-xl border border-border bg-background/50 p-4 hover:border-primary hover:bg-primary/10 transition-all duration-300">
                    <i class="fa-solid fa-graduation-cap text-3xl text-blue-400 group-hover:scale-110 transition"></i>
                    <span class="mt-3 text-sm font-semibold text-heading">Education</span>
                </div>

                <div class="group flex flex-col items-center justify-center rounded-xl border border-border bg-background/50 p-4 hover:border-primary hover:bg-primary/10 transition-all duration-300">
                    <i class="fa-solid fa-building-columns text-3xl text-yellow-400 group-hover:scale-110 transition"></i>
                    <span class="mt-3 text-sm font-semibold text-heading">Finance</span>
                </div>

                <div class="group flex flex-col items-center justify-center rounded-xl border border-border bg-background/50 p-4 hover:border-primary hover:bg-primary/10 transition-all duration-300">
                    <i class="fa-solid fa-cart-shopping text-3xl text-green-400 group-hover:scale-110 transition"></i>
                    <span class="mt-3 text-sm font-semibold text-heading">Retail</span>
                </div>

                <div class="group flex flex-col items-center justify-center rounded-xl border border-border bg-background/50 p-4 hover:border-primary hover:bg-primary/10 transition-all duration-300">
                    <i class="fa-solid fa-industry text-3xl text-orange-400 group-hover:scale-110 transition"></i>
                    <span class="mt-3 text-sm font-semibold text-heading">Manufacturing</span>
                </div>

                <div class="group flex flex-col items-center justify-center rounded-xl border border-border bg-background/50 p-4 hover:border-primary hover:bg-primary/10 transition-all duration-300">
                    <i class="fa-solid fa-chart-line text-3xl text-purple-400 group-hover:scale-110 transition"></i>
                    <span class="mt-3 text-sm font-semibold text-heading">Startups</span>
                </div>

            </div>

        </div>

    </div>

</section>