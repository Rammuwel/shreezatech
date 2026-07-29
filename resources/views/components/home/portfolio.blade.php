<section class="portfolio py-5">

    <div class="max-w-7xl mx-auto lg:px-8">

        <!-- Header -->
        <div class="portfolio-header flex items-end justify-between mb-3">

            <div>
                <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">
                    OUR WORK
                </span>

                <h2 class="portfolio-title text-2xl font-bold text-heading">
                    Featured Projects
                </h2>
            </div>

            <a
                href="{{ route('portfolio') }}"
                wire:navigate
                class="hidden md:flex items-center gap-2 text-primary hover:gap-4 transition-all">

                View All Projects
                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

        <!-- Slider -->
        <div class="relative">

            <!-- Prev -->
            <button
                class="portfolio-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-7 z-20 h-12 w-12 rounded-full border border-border bg-card flex items-center justify-center">

                <i class="fa-solid fa-arrow-left text-text"></i>

            </button>

            <!-- Swiper -->

            <div class="portfolio-swiper swiper">

                <div class="swiper-wrapper p-2">

                    @foreach($projects as $project)

                    <div class="swiper-slide ">

                        <a
                            wire:navigate
                            href="{{ route('portfolio.show', $project['route']) }}"
                            class="group block rounded-2xl border border-border bg-card/70 p-3 transition-all duration-500 hover:-translate-y-2 hover:border-primary/40 hover:shadow-[0_15px_40px_rgba(37,99,235,0.15)]">

                            <!-- Image -->
                            <div class="relative overflow-hidden rounded-xl">

                                <img
                                    src="{{ asset($project['image']) }}"
                                    alt="{{ $project['title'] }}"
                                    class="h-48 w-full rounded-xl object-cover transition duration-700 group-hover:scale-105 ">

                                <!-- Category -->
                                <span
                                    class="absolute bottom-3 left-3 rounded-full px-3 py-1 text-[11px] font-semibold
            {{ $project['color']=='primary'
                ? 'bg-primary text-white'
                : 'bg-secondary text-background' }}">

                                    {{ $project['category'] }}

                                </span>

                            </div>

                            <!-- Content -->
                            <div class="mt-4">

                                <h3 class="text-[22px] font-bold leading-tight text-heading">

                                    {{ $project['title'] }}

                                </h3>

                                <div class="mt-3 flex items-center gap-2 text-sm text-muted">

                                    <span>{{ $project['type'] }}</span>

                                    <i class="fa-solid fa-arrow-right text-[11px] text-primary transition duration-300 group-hover:translate-x-1"></i>

                                </div>

                            </div>

                        </a>

                    </div>

                    @endforeach

                </div>

            </div>
            <!-- Next -->
            <button
                class="portfolio-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-7 z-20 h-12 w-12 rounded-full border border-border bg-card flex items-center justify-center">

                <i class="fa-solid fa-arrow-right text-text"></i>

            </button>

        </div>

    </div>

</section>