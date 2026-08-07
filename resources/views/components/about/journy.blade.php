<section class="relative py-16 overflow-hidden">

    <!-- Decorative Glows -->
    <div class="absolute top-20 left-0 h-72 w-72 rounded-full bg-primary/5 blur-[120px]"></div>
    <div class="absolute bottom-0 right-0 h-72 w-72 rounded-full bg-secondary/5 blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div x-intersect="animate-fade-in-up" class="opacity-0 text-center">

            <span class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-1.5 text-xs font-bold tracking-[0.25em] uppercase text-secondary">
                <i class="fa-solid fa-route"></i>
                Our Journey
            </span>

            <h2 class="mt-5 text-3xl lg:text-4xl font-bold text-heading">
                Milestones That <span class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">Define Us</span>
            </h2>

            <p class="mt-2 max-w-2xl mx-auto text-muted leading-7">
                Every year, we've grown — in people, in projects, and in the impact we create for our clients.
            </p>

        </div>

        <!-- Timeline -->
        <div class="relative mt-14 grid lg:grid-cols-5 gap-10 lg:gap-8 pl-8 lg:pl-0">

            <!-- Vertical Line (Mobile & Tablet) -->
            <div class="lg:hidden absolute left-8 top-2 bottom-2 w-0.5 bg-linear-to-b from-primary/60 via-border to-secondary/60"></div>

            <!-- Horizontal Line (Desktop) -->
            <div class="hidden lg:block absolute inset-x-0 top-2 h-0.5 bg-linear-to-r from-primary/40 via-border to-secondary/40"></div>

            @foreach($journey as $item)

                <div class="relative">
                    <!-- Mobile Dot -->
                    <div class="lg:hidden absolute left-0 top-2 -translate-x-1/2">
                        <div class="h-4 w-4 rounded-full bg-primary ring-4 ring-primary/20"></div>
                    </div>

                    <!-- Desktop Dot -->
                    <div class="hidden lg:flex justify-center mb-8">
                        <div class="h-4 w-4 rounded-full bg-primary ring-4 ring-primary/20 shadow-[0_0_20px_rgba(37,99,235,0.4)]"></div>
                    </div>

                    <!-- Card -->
                    <div x-intersect="animate-fade-in-up" style="animation-delay: {{ $loop->index * 120 }}ms"
                        class="group opacity-0 relative overflow-hidden rounded-2xl border border-border bg-card p-6 h-full ml-10 lg:ml-0 transition-all duration-500 hover:-translate-y-2 hover:border-primary hover:shadow-2xl hover:shadow-primary/10">

                        <!-- Top Accent -->
                        <div class="absolute inset-x-0 top-0 h-1 bg-linear-to-r from-primary to-secondary opacity-0 transition-opacity duration-500 group-hover:opacity-100"></div>

                        <!-- Year -->
                        <span class="inline-block rounded-lg bg-linear-to-r from-primary to-secondary bg-clip-text px-2 text-3xl font-bold text-transparent">
                            {{ $item['year'] }}
                        </span>

                        <h4 class="mt-4 font-bold text-heading">{{ $item['title'] }}</h4>

                        <p class="mt-3 text-sm text-muted leading-7">{{ $item['description'] }}</p>

                    </div>
                </div>

            @endforeach

        </div>

    </div>

</section>
