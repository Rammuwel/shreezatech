<section class="relative pt-5 lg:pt-10 pb-8 overflow-hidden bg-background">

    {{-- Background decor --}}
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-16 right-1/4 h-56 w-56 rounded-full bg-primary/10 blur-[120px]"></div>
        <div class="absolute -bottom-16 left-1/4 h-56 w-56 rounded-full bg-secondary/10 blur-[120px]"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-2 sm:px-2 lg:px-4">
        <div x-intersect="animate-fade-in-up" class="opacity-0">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 sm:gap-4">
                @foreach($stats as $stat)
                <div
                    class="group relative flex items-center gap-3 sm:gap-4 overflow-hidden rounded-xl border border-border bg-card p-3 sm:p-4 transition-all duration-500 hover:-translate-y-1 hover:border-primary/40 hover:shadow-[0_15px_40px_rgba(37,99,235,0.15)]">

                    {{-- Hover gradient wash --}}
                    <div
                        class="absolute inset-0 bg-linear-to-br from-primary/10 via-transparent to-secondary/10 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                    </div>

                    {{-- Icon --}}
                    <div
                        class="relative flex h-10 w-10 sm:h-12 sm:w-12 shrink-0 items-center justify-center rounded-lg bg-primary/10 text-primary transition-transform duration-500 group-hover:scale-110">
                        <i class="{{ $stat['icon'] }} text-base sm:text-lg"></i>
                    </div>

                    <div class="relative min-w-0">
                        {{-- Counter --}}
                        <h3
                            x-data="counter"
                            data-count="{{ $stat['count'] }}"
                            data-suffix="{{ $stat['suffix'] }}"
                            x-text="count + suffix"
                            class="bg-gradient-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent text-xl sm:text-2xl font-bold tabular-nums leading-none">
                            0{{ $stat['suffix'] }}
                        </h3>

                        {{-- Label --}}
                        <p class="mt-1 truncate text-[11px] sm:text-xs font-medium text-muted">{{ $stat['label'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
