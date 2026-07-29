@props([
    'solutions',
])


<section class="py-10">

    <div class="container m-auto">

        {{-- Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full border  border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">

                <i class="fa-solid fa-layer-group"></i>

                Our Solutions

            </span>

            <h2 class="mt-5 text-4xl font-bold text-heading">

                Solutions We Build

            </h2>

            <p class="mt-5 leading-8 text-muted">

                We develop industry-specific software solutions that simplify
                operations, improve productivity, and support long-term business
                growth.

            </p>

        </div>

        {{-- Solution Cards --}}
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">

            @foreach($solutions as $item)

                <div
                    class="group rounded-3xl border border-border bg-card p-5 transition-all duration-300 hover:-translate-y-2 hover:border-primary/30">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-2xl text-primary transition group-hover:scale-110">

                        <i class="{{ $item['icon'] }}"></i>

                    </div>

                    <h3 class="mt-5 text-xl font-semibold text-heading">

                        {{ $item['title'] }}

                    </h3>

                    <p class="mt-4 leading-7 text-muted">

                        {{ $item['description'] }}

                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>