@props(['category'])

<section class="py-10 hero overflow-hidden bg-background">
    <div class="relative mt-10 flex items-center">
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-10 bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)] bg-size-[80px_80px]">
            </div>
            <div class="absolute top-20 left-0 w-96 h-96 bg-linear-to-r from-primary/10 to-transparent rounded-full blur-[140px]">
            </div>
            <div class="absolute bottom-0 right-0 w-125 h-125 bg-linear-to-r to-transparent from-background rounded-full blur-[680px]">
            </div>
        </div>
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-4 gap-20 items-center">
                <div class="col-span-2">
                    <nav class="mb-3 flex items-center gap-3 text-sm text-muted">
                        <a wire:navigate href="{{ route('home') }}" class="transition text-secondary hover:text-secondary">Home</a>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                        <a wire:navigate href="{{ route('technologies') }}" class="transition text-secondary hover:text-secondary">Technologies</a>
                        <i class="fa-solid fa-chevron-right text-xs"></i>
                        <span class="text-heading">{{ $category['name'] }}</span>
                    </nav>
                    <h1 class="hero-title mt-3 text-3xl lg:text-5xl font-semibold leading-tight text-heading">
                        {{ $category['hero']['title'] }}
                    </h1>
                    <p class="hero-description mt-3 max-w-xl text-lg leading-8 text-text">
                        {{ $category['hero']['description'] }}
                    </p>
                    <div class="hero-buttons mt-5 flex flex-wrap gap-5">
                        <a wire:navigate href="{{ route('contact') }}" class="rounded-full bg-primary px-8 py-4 font-semibold text-white transition hover:scale-105">
                            Start Your Project
                        </a>
                        <a wire:navigate href="{{ route('portfolio') }}" class="rounded-full border border-border px-8 py-4 font-semibold text-heading hover:border-primary">
                            View Our Work
                        </a>
                    </div>
                </div>
                <div class="relative flex justify-center col-span-2">
                    <div class="flex h-72 w-72 items-center justify-center rounded-3xl bg-card border border-border">
                        <i class="{{ $category['icon'] }} text-8xl text-primary opacity-30"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
