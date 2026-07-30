<section class="services py-10">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Header -->

        <div class="services-header flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between mb-8">

            <div>

                <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">
                    WHAT WE DO
                </span>

                <h2 class="services-title text-3xl md:text-4xl font-bold text-heading">
                    Services We Provide
                </h2>

            </div>

            <a
                wire:navigate
                href="{{ route('services') }}"
                class="hidden md:flex items-center gap-2 text-primary font-medium transition-all hover:gap-4">

                View All Services

                <i class="fa-solid fa-arrow-right text-sm"></i>

            </a>

        </div>

        <!-- Services -->

        <div class=" relative services-grid grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">

            @foreach($services as $service)

            <a
                href="{{ route('service', $service['route']) }}"
                wire:navigate
                class="service-card transform-gpu group relative overflow-hidden rounded-2xl border border-border bg-card/60 backdrop-blur-xl p-4 transition duration-500 hover:-translate-y-2 hover:border-primary/40">

                <!-- Glow -->

                <div class="absolute inset-0 bg-linear-to-b from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition duration-500"></div>

                <div class="flex flex-col items-center  z-10">

                    <!-- Icon -->

                    <div
                        class="service-icon flex h-16 w-16 items-center justify-center rounded-full
                        {{ $service['color']=='primary'
                            ? 'bg-primary/10'
                            : 'bg-secondary/10' }}">

                        <i
                            class="{{ $service['icon'] }}
                            text-3xl text-center 
                            {{ $service['color']=='primary'
                                ? 'text-primary'
                                : 'text-secondary' }}">
                        </i>

                    </div>

                    <!-- Title -->

                    <h3 class="service-title text-lg font-bold leading-7 text-heading">
                        {{ $service['title'] }}

                    </h3>

                    <!-- Description -->

                    <p class="mb-3 service-text text-sm leading-7 text-muted">

                        {{ $service['description'] }}

                    </p>

                    <!-- Link -->

                    <div
                        class="service-link  inline-flex items-center gap-2 text-primary font-sm absolute bottom-2 right-2">

                        Learn More

                        <i
                            class="fa-solid fa-arrow-right text-xs transition group-hover:translate-x-1 ">
                        </i>

                    </div>

                </div>

            </a>

            @endforeach

        </div>

    </div>

</section>