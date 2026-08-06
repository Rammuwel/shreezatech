<section class="relative py-16 overflow-hidden">

    <!-- Decorative Glows -->
    <div class="absolute -top-20 right-1/4 h-80 w-80 rounded-full bg-primary/5 blur-[120px]"></div>
    <div class="absolute bottom-10 left-0 h-72 w-72 rounded-full bg-secondary/5 blur-[120px]"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div x-intersect="animate-fade-in-up" class="opacity-0 text-center mb-12">

            <span class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-1.5 text-xs font-bold tracking-[0.25em] uppercase text-secondary">
                <i class="fa-solid fa-users"></i>
                Meet Our Leadership
            </span>

            <h2 class="mt-5 text-3xl lg:text-4xl font-bold text-heading">
                The Minds Behind <span class="bg-linear-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">Shreeza</span>
            </h2>

            <p class="mt-2 max-w-3xl mx-auto text-muted leading-8">
                Our passionate team combines technical expertise, creativity, and business insight to build world-class digital solutions.
            </p>

        </div>

        <!-- Cards -->
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

            @foreach($team as $member)

                <div
                    x-intersect="animate-fade-in-up"
                    style="animation-delay: {{ $loop->index * 100 }}ms"
                    class="group opacity-0 relative overflow-hidden rounded-3xl border border-border bg-card transition-all duration-500 hover:-translate-y-3 hover:border-primary hover:shadow-2xl hover:shadow-primary/10">

                    <!-- Image -->
                    <div class="relative overflow-hidden">

                        <img
                            src="{{ asset($member['image']) }}"
                            alt="{{ $member['name'] }} - {{ $member['position'] }}"
                            loading="lazy"
                            class="h-80 w-full object-cover origin-bottom transition duration-700 group-hover:scale-110">

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-linear-to-t from-background via-background/30 to-transparent"></div>

                        <!-- Social -->
                        <div class="absolute bottom-5 left-1/2 -translate-x-1/2 flex gap-3 opacity-0 translate-y-4 group-hover:opacity-100 group-hover:translate-y-0 transition duration-300">

                            <a href="{{ $member['linkedin'] }}" aria-label="{{ $member['name'] }} on LinkedIn"
                                class="h-10 w-10 rounded-full bg-primary text-white flex items-center justify-center hover:scale-110 transition">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                            <a href="{{ $member['twitter'] }}" aria-label="{{ $member['name'] }} on X (Twitter)"
                                class="h-10 w-10 rounded-full bg-card border border-border text-heading flex items-center justify-center hover:scale-110 hover:border-primary transition">
                                <i class="fab fa-x-twitter"></i>
                            </a>

                        </div>

                    </div>

                    <!-- Content -->
                    <div class="p-6 text-center">

                        <h3 class="text-xl font-bold text-heading">{{ $member['name'] }}</h3>

                        <p class="mt-2 text-sm font-medium text-primary">{{ $member['position'] }}</p>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>
