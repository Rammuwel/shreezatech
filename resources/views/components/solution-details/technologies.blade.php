@props([
    'technologies',
])

<section class="py-24">

    <div class="container">

        {{-- Section Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary/10 px-4 py-2 text-sm font-medium text-primary">

                <i class="fa-solid fa-microchip"></i>

                Technology Stack

            </span>

            <h2 class="mt-6 text-4xl font-bold text-heading">

                Built Using Modern Technologies

            </h2>

            <p class="mt-5 leading-8 text-muted">

                We leverage industry-leading technologies, frameworks, cloud
                platforms, and development tools to build secure, scalable,
                and future-ready software solutions.

            </p>

        </div>

        {{-- Technologies Grid --}}
        <div class="mt-16 grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">

            @foreach($technologies as $technology)

                <div
                    class="group flex h-32 flex-col items-center justify-center rounded-2xl border border-border bg-card transition-all duration-300 hover:-translate-y-2 hover:border-primary/30 hover:shadow-lg">

                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-xl bg-primary/10 text-primary transition group-hover:scale-110">

                        <i class="{{ $technology['icon'] }}"></i>

                    </div>

                    <h3 class="mt-4 text-center font-semibold text-heading">

                        {{ $technology['name'] }}

                    </h3>

                </div>

            @endforeach

        </div>

    </div>

</section>