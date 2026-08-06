<section class="relative py-16 overflow-hidden">

    <!-- Decorative Glows -->
    <div class="absolute -top-24 right-0 h-80 w-80 rounded-full bg-primary/5 blur-[120px]"></div>
    <div class="absolute bottom-0 left-0 h-72 w-72 rounded-full bg-secondary/5 blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

            @foreach($stats as $stat)

                <div
                    x-intersect="animate-fade-in-up"
                    style="animation-delay: {{ $loop->index * 100 }}ms"
                    class="group opacity-0 relative overflow-hidden rounded-2xl border border-border bg-card p-6 sm:p-7 transition-all duration-500 hover:-translate-y-2 hover:border-primary hover:shadow-2xl hover:shadow-primary/10">

                    <!-- Hover Glow -->
                    <div class="absolute -top-10 -right-10 h-24 w-24 rounded-full bg-primary/10 blur-2xl opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>

                    <div class="relative z-10 flex flex-col items-center sm:flex-row sm:items-center gap-4 text-center sm:text-left">

                        <div class="flex h-14 w-14 shrink-0 items-center justify-center rounded-xl bg-primary/10 text-primary text-2xl transition duration-300 group-hover:scale-110 group-hover:bg-primary group-hover:text-white">
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
                            <p class="mt-1 text-xs sm:text-sm text-muted">{{ $stat['label'] }}</p>
                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>
