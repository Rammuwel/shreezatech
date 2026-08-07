@props([
    'features',
])

<section class="py-10 bg-card/30">

    <div class="container m-auto px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <span class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">

                <i class="fa-solid fa-star"></i>

                Key Features

            </span>

            <h2 class="mt-5 text-4xl font-bold text-heading">

                Powerful Features Built for Growth

            </h2>

            <p class="mt-5 leading-8 text-muted">

                Every solution is designed with modern technologies and enterprise-grade capabilities to help your business operate more efficiently and scale with confidence.

            </p>

        </div>

        {{-- Features Grid --}}
        <div class="mt-10 grid gap-8 sm:grid-cols-2 xl:grid-cols-3">

            @foreach($features as $feature)

                <div class="rounded-3xl border border-border bg-card p-5 transition-all duration-300 hover:-translate-y-2 hover:border-primary/30">

                    <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary/10 text-primary">

                        <i class="{{ $feature['icon'] }}"></i>

                    </div>

                    <h3 class="mt-5 text-xl font-semibold text-heading">

                        {{ $feature['title'] }}

                    </h3>

                    <p class="mt-4 leading-7 text-muted">

                        {{ $feature['description'] }}

                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>