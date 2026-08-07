@props(['overview'])

<section id="overview" class="py-10">

    <div class="container m-auto px-4 sm:px-6 lg:px-8">

        <div class="grid items-center gap-10 lg:grid-cols-2">

            {{-- Left --}}
            <div>

                <span
                    class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">

                    <i class="fa-solid fa-circle-info"></i>

                    Overview

                </span>

                <h2 class="mt-5 text-4xl font-bold text-heading">

                    {{ $overview['title'] }}

                </h2>

                <p class="mt-5 leading-8 text-muted">

                    {{ $overview['description'] }}

                </p>

            </div>

            {{-- Right --}}
            <div>

                <div class="rounded-3xl border border-border bg-card p-5">

                    <h3 class="text-xl font-semibold text-heading">

                        What You Can Expect

                    </h3>

                    <div class="mt-5 space-y-5">

                        @php

                            $items = [

                                'Improve operational efficiency',

                                'Reduce manual processes',

                                'Enhance customer experience',

                                'Secure and scalable architecture',

                                'Cloud-ready applications',

                                'Long-term technical support',

                            ];

                        @endphp

                        @foreach($items as $item)

                            <div class="flex items-center gap-3">

                                <div
                                    class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary/10 text-primary">

                                    <i class="fa-solid fa-check"></i>

                                </div>

                                <p class="text-heading">

                                    {{ $item }}

                                </p>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>