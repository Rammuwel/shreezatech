@props(['service' => []])

@php
    $others = collect(\App\Data\Services::all())
        ->reject(fn($s) => $s['id'] === ($service['id'] ?? null))
        ->values()
        ->all();
@endphp

@if(count($others))
    <section class="relative overflow-hidden py-16 sm:py-24">

        <div class="pointer-events-none absolute -left-32 top-0 h-96 w-96 rounded-full bg-primary/10 blur-[160px]"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            <div x-intersect="animate-fade-in-up" class="opacity-0 mx-auto max-w-2xl text-center">

                <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-[0.3em] text-primary">

                    <i class="fa-solid fa-layer-group"></i>

                    Other Services

                </span>

                <h2 class="mt-4 text-balance text-3xl font-bold text-heading sm:text-4xl lg:text-5xl">

                    Explore More

                    <span class="bg-gradient-to-r from-primary via-blue-400 to-secondary bg-clip-text text-transparent">
                        Services
                    </span>

                </h2>

                <div class="mx-auto mt-5 h-1 w-16 rounded-full bg-gradient-to-r from-primary via-blue-400 to-secondary"></div>

                <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-muted">

                    From custom software to cloud and AI, discover the full range of
                    solutions we offer to help your business grow.

                </p>

            </div>

            <div class="mt-16 grid gap-x-10 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">

                @foreach($others as $item)

                    <a
                        wire:navigate
                        href="{{ route('service', $item['slug']) }}"
                        class="group flex flex-col items-start">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-14 w-14 shrink-0 items-center justify-center rounded-2xl bg-gradient-to-br from-primary to-blue-500 text-white shadow-lg shadow-primary/30 transition-all duration-300 group-hover:scale-110 group-hover:shadow-primary/50">

                                <i class="{{ $item['icon'] }} text-xl"></i>

                            </div>

                            <h3 class="text-xl font-bold text-heading transition-colors group-hover:text-primary">

                                {{ $item['name'] }}

                            </h3>

                        </div>

                        <p class="mt-4 text-sm leading-7 text-muted">

                            {{ $item['short_description'] }}

                        </p>

                        <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-primary">

                            View Service

                            <i class="fa-solid fa-arrow-right transition-transform duration-300 group-hover:translate-x-1"></i>

                        </span>

                    </a>

                @endforeach

            </div>

        </div>

    </section>
@endif
