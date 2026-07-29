<section class="py-12">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

            @foreach($stats as $stat)

                <div
                    class="group stat-card relative overflow-hidden rounded-2xl
                           border border-border bg-card/60 backdrop-blur-xl
                           p-6 transition-all duration-500
                           hover:-translate-y-2 hover:border-primary">

                    <!-- Glow -->
                    <div
                        class="absolute inset-0 bg-gradient-to-r
                               from-primary/5 to-secondary/5
                               opacity-0 group-hover:opacity-100
                               transition duration-500">
                    </div>

                    <div class="relative z-10 flex items-center gap-4">

                        <div
                            class="flex h-14 w-14 items-center justify-center
                                   rounded-xl bg-primary/10 text-primary
                                   text-2xl group-hover:scale-110
                                   transition">

                            <i class="{{ $stat['icon'] }}"></i>

                        </div>

                        <div>

                            <h3
                                class="counter text-3xl font-bold text-heading"
                                data-count="{{ $stat['count'] }}"
                                data-suffix="{{ $stat['suffix'] }}">

                                0

                            </h3>

                            <p class="mt-1 text-sm text-muted">

                                {{ $stat['label'] }}

                            </p>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>