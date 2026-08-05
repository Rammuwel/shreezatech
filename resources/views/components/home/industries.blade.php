<section class="relative py-10 overflow-hidden">

    <div class="container mx-auto px-6 lg:px-8">

        <div class="grid lg:grid-cols-12 gap-14 items-start">

            {{-- Left --}}

            <div class="lg:col-span-4">

                <span
                    class="inline-flex rounded-full bg-secondary/10 px-4 py-2
        text-xs font-semibold tracking-[0.3em]
        uppercase text-secondary">

                    Industries We Serve

                </span>

                <h2
                    class="mt-6 text-4xl lg:text-5xl
        font-bold leading-tight">

                    Website Development

                    <br>

                    For

                    <span class="text-secondary">
                        Every Industry
                    </span>

                </h2>

                <p class="mt-8 text-muted leading-8">

                    We design scalable websites and digital platforms
                    tailored for healthcare, education, finance,
                    manufacturing, real estate and more.

                </p>

                {{-- Stats --}}

                <div
                    class="mt-12 flex items-center gap-5 rounded-3xl
        border border-border bg-card p-6">

                    <div
                        class="flex h-16 w-16 items-center justify-center
            rounded-2xl bg-primary/10">

                        <i class="fa-solid fa-building text-2xl text-primary"></i>

                    </div>

                    <div>

                        <h3 class="text-3xl font-bold text-primary">

                            6+

                        </h3>

                        <p class="text-muted">

                            Industries Served

                        </p>

                    </div>

                </div>

            </div>

            {{-- Right --}}

            <div class="lg:col-span-8">

                <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-6">

                    @foreach($industries as $industry)

                    <a
                        href="{{ $industry['route'] }}"
                        wire:navigate

                        class="group relative overflow-hidden rounded-3xl
            border border-border bg-card p-6 transition duration-500
            hover:-translate-y-2 hover:border-primary hover:shadow-2xl hover:shadow-primary/10">

                        @if($industry['featured'])

                        <div
                            class="absolute inset-0
                bg-linear-to-br
                from-primary
                via-primary/90
                to-secondary">

                        </div>

                        @endif

                        <div class="relative z-10">

                            <div

                                class="flex h-14 w-14 items-center justify-center rounded-2xl

                    @if($industry['featured'])

                    bg-white/20 text-white

                    @else

                    bg-primary/10 text-primary

                    @endif">

                                <i class="{{ $industry['icon'] }} text-xl"></i>

                            </div>

                            <h3

                                class="mt-5 text-xl font-bold

                    @if($industry['featured'])

                    text-white

                    @endif">

                                {{ $industry['title'] }}

                            </h3>

                            <p

                                class="mt-3 leading-7

                    @if($industry['featured'])

                    text-white/80

                    @else

                    text-muted

                    @endif">

                                {{ $industry['description'] }}

                            </p>

                            <div

                                class="mt-6 inline-flex items-center gap-3 font-semibold

                    @if($industry['featured'])

                    text-white

                    @else

                    text-primary

                    @endif">

                                Learn More

                                <div

                                    class="flex h-9 w-9 items-center justify-center rounded-full transition duration-300 group-hover:translate-x-1

                        @if($industry['featured'])

                        bg-white text-primary

                        @else

                        bg-primary/10 group-hover:bg-primary group-hover:text-white

                        @endif">

                                    <i class="fa-solid fa-arrow-right"></i>

                                </div>

                            </div>

                        </div>

                    </a>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>