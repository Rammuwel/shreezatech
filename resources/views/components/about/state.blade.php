<section class="py-12">

    <div class="max-w-7xl mx-auto px-4 sm:px-6">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach($stats as $stat)

                <div
                    class="group stat-card relative overflow-hidden rounded-2xl
                           border border-border bg-card/60 backdrop-blur-xl
                           p-4 sm:p-6 transition-all duration-500
                           hover:-translate-y-2 hover:border-primary">

                    <!-- Glow -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r
                               from-primary/5 to-secondary/5
                               opacity-0 group-hover:opacity-100
                               transition duration-500">
                    </div>

                    <div class="relative z-10 flex flex-col items-center sm:flex-row sm:items-center gap-3 sm:gap-4 text-center sm:text-left">

                        <div
                            class="flex h-12 w-12 sm:h-14 sm:w-14 items-center justify-center
                                   rounded-xl bg-primary/10 text-primary
                                   text-xl sm:text-2xl group-hover:scale-110
                                   transition">

                            <i class="{{ $stat['icon'] }}"></i>

                        </div>

                        <div>

                            <h3
                                x-data="counter"
                                class="text-2xl sm:text-3xl font-bold text-heading"
                                data-count="{{ $stat['count'] }}"
                                data-suffix="{{ $stat['suffix'] }}"
                                x-text="count + suffix">

                                0{{ $stat['suffix'] }}

                            </h3>

                            <p class="mt-1 text-xs sm:text-sm text-muted">

                                {{ $stat['label'] }}

                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>