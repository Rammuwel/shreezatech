<section class="py-20 bg-background/50">
    <div class="container mx-auto max-w-7xl px-4 sm:px-6">
        @foreach($technologyGroups as $group)
            <div class="mb-12 rounded-3xl border border-border/60  p-6 sm:p-10 shadow-sm backdrop-blur-sm">
                
                <!-- Section Header -->
                <div class="mb-8 flex items-center gap-4">
                    <h3 class="text-xl font-bold tracking-tight text-heading sm:text-2xl">
                        {{ $group['title'] }}
                    </h3>
                    <div class="h-[2px] flex-1 bg-gradient-to-r from-border/80 to-transparent"></div>
                </div>

                <!-- Responsive Tech Grid -->
                <div class="grid grid-cols-2 gap-4 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 xl:grid-cols-7 sm:gap-6">
                    @foreach($group['items'] as $tech)
                        <div class="group relative flex flex-col items-center justify-center rounded-2xl border border-transparent  p-5 text-center transition-all duration-300 ease-out hover:-translate-y-1 hover:border-primary/10 bg-card hover:shadow-md hover:shadow-primary/5">
                            
                            <!-- Glow Effect Background -->
                            <div class="absolute inset-0 -z-10 rounded-2xl opacity-0 transition-opacity duration-300 group-hover:opacity-100 bg-gradient-to-br from-primary/5 to-transparent"></div>
                            
                            <!-- Icon Wrapper -->
                            <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-card transition-all duration-300 group-hover:scale-110 group-hover:shadow-sm">
                                @php($isHexColor = preg_match('/^#[0-9a-fA-F]{3,8}$/', $tech['color']) === 1)
                                <i class="{{ $tech['icon'] }} text-4xl sm:text-5xl transition-transform duration-300"
                                   style="color: {{ $tech['color'] }};{{ $isHexColor ? ' filter: drop-shadow(0 2px 8px '.$tech['color'].'20);' : '' }}">
                                </i>
                            </div>

                            <!-- Tech Name -->
                            <span class="mt-4 text-xs font-semibold tracking-wide text-muted-foreground text-text transition-colors duration-300 group-hover:text-heading sm:text-sm">
                                {{ $tech['name'] }}
                            </span>
                        </div>
                    @endforeach
                </div>

            </div>
        @endforeach
    </div>
</section>
