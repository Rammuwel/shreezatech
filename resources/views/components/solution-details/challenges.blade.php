@props([
    'challenges',
])

<section class="py-10 bg-card/30">

    <div class="container m-auto px-4 sm:px-6 lg:px-8">

        {{-- Section Heading --}}
        <div class="mx-auto max-w-3xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">

                <i class="fa-solid fa-triangle-exclamation"></i>

                Challenges

            </span>

            <h2 class="mt-5 text-4xl font-bold text-heading">

                Industry Challenges We Solve

            </h2>

            <p class="mt-5 text-muted leading-8">

                Every industry faces unique operational and technological
                challenges. We build software that addresses these challenges
                with secure, scalable, and future-ready solutions.

            </p>

        </div>

        {{-- Challenge Cards --}}
        <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">

            @foreach($challenges as $challenge)

                <div
                    class="group rounded-3xl border border-border bg-card p-5 transition-all duration-300 hover:-translate-y-2 hover:border-primary/30">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-2xl text-primary">

                        <i class="{{ $challenge['icon'] }}"></i>

                    </div>

                    <h3 class="mt-5 text-xl font-semibold text-heading">

                        {{ $challenge['title'] }}

                    </h3>

                    <p class="mt-4 leading-7 text-muted">

                        {{ $challenge['description'] }}

                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>