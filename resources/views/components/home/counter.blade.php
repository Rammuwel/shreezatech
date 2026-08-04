<section class="relative py-5 lg:py-8 overflow-hidden ">

 <div class="absolute inset-0">
      <div class="absolute inset-0 opacity-[0.07] dark:opacity-[0.12] bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)] bg-[length:80px_80px]"></div>
      <div class="absolute top-20 left-0 w-96 h-96 bg-primary/20 rounded-full blur-[140px]"></div>
      <div class="absolute bottom-0 right-0 w-125 h-125 bg-secondary/20 rounded-full blur-[180px]"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div x-intersect="animate-fade-in-up" class="opacity-0">
            <div class="relative overflow-hidden rounded-3xl border border-border bg-card shadow-2xl">

               

                <div class="relative grid grid-cols-2 lg:grid-cols-4 gap-px bg-border">
                    @foreach($stats as $stat)
                    <div
                        class="group relative flex flex-col items-center gap-3 px-4 py-6 sm:py-8 bg-card text-center transition-colors duration-500 hover:bg-surface">

                        {{-- Hover glow --}}
                        <div class="absolute inset-0 pointer-events-none bg-gradient-to-b from-primary/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                        {{-- Icon --}}
                        <div
                            class="relative flex h-12 w-12 items-center justify-center rounded-2xl bg-primary/10 text-primary ring-1 ring-primary/10 transition-transform duration-500 group-hover:scale-110">
                            <i class="{{ $stat['icon'] }} text-lg"></i>
                        </div>

                        {{-- Counter --}}
                        <div class="relative">
                            <h3
                                x-data="counter"
                                data-count="{{ $stat['count'] }}"
                                data-suffix="{{ $stat['suffix'] }}"
                                x-text="count + suffix"
                                class="text-3xl sm:text-4xl font-bold bg-gradient-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent tabular-nums leading-none">
                                0{{ $stat['suffix'] }}
                            </h3>
                            <p class="mt-2 text-xs sm:text-sm font-medium text-muted">{{ $stat['label'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>