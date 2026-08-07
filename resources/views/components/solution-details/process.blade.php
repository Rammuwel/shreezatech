@props([
    'process',
])

<section class="py-10 bg-card/30">

    <div class="container m-auto px-4 sm:px-6 lg:px-8">

        {{-- Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <span class="inline-flex items-center gap-2 rounded-full border  border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">

                <i class="fa-solid fa-diagram-project"></i>

                Our Process

            </span>

            <h2 class="mt-6 text-4xl font-bold text-heading">

                How We Deliver Success

            </h2>

            <p class="mt-5 leading-8 text-muted">

                Our proven development process ensures transparency, quality,
                and successful project delivery from start to finish.

            </p>

        </div>

        {{-- Timeline --}}
        <div class="mt-20 relative">

            <div class="absolute left-6 top-0 hidden h-full w-0.5 bg-border lg:block"></div>

            <div class="space-y-10">

                @foreach($process as $item)

                    <div class="relative flex gap-6">

                        {{-- Step Number --}}
                        <div
                            class="flex h-14 w-14 shrink-0 items-center justify-center rounded-full bg-primary text-lg font-bold text-white shadow-lg">

                            {{ $item['step'] }}

                        </div>

                        {{-- Content --}}
                        <div
                            class="flex-1 rounded-2xl border border-border bg-card p-6 transition-all duration-300 hover:border-primary/30 hover:-translate-y-1">

                            <h3 class="text-xl font-semibold text-heading">

                                {{ $item['title'] }}

                            </h3>

                            <p class="mt-3 leading-7 text-muted">

                                {{ $item['description'] }}

                            </p>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>