<section class="relative py-10 overflow-hidden">

    

    <div class="container relative m-auto px-4 sm:px-6 lg:px-8">

        <!-- Section Heading -->

        <div class="mx-auto mb-10 max-w-3xl text-center">

            <span
                class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">

                <i class="fa-solid fa-award"></i>

                Why Choose Shreeza

            </span>

            <h2 class="mt-5 text-4xl font-bold text-heading lg:text-5xl">

                Your Trusted Technology Partner

            </h2>

            <p class="mt-5 text-lg leading-8 text-muted">

                We combine technical expertise, innovative thinking, and a
                client-first approach to deliver software solutions that create
                measurable business value.

            </p>

        </div>

        <!-- Cards -->

        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">

            @php

                $items = [

                    [
                        'icon' => 'fa-solid fa-users',
                        'title' => 'Experienced Team',
                        'description' => 'Skilled developers delivering scalable, secure and future-ready applications.'
                    ],

                    [
                        'icon' => 'fa-solid fa-comments',
                        'title' => 'Transparent Communication',
                        'description' => 'Regular updates, clear milestones and complete project visibility.'
                    ],

                    [
                        'icon' => 'fa-solid fa-bolt',
                        'title' => 'Agile Development',
                        'description' => 'Fast iterations and flexible development tailored to your business.'
                    ],

                    [
                        'icon' => 'fa-solid fa-shield-halved',
                        'title' => 'Quality Assurance',
                        'description' => 'Rigorous testing ensures secure, stable and high-quality software.'
                    ],

                    [
                        'icon' => 'fa-solid fa-clock',
                        'title' => 'On-Time Delivery',
                        'description' => 'Projects delivered on schedule without compromising quality.'
                    ],

                    [
                        'icon' => 'fa-solid fa-headset',
                        'title' => 'Long-Term Support',
                        'description' => 'Maintenance, updates and continuous technical assistance after launch.'
                    ],

                ];

            @endphp

            @foreach ($items as $item)

                <div
                    class="group rounded-3xl border border-border bg-card p-8 transition-all duration-300 hover:-translate-y-2 hover:border-primary/30">

                    <div
                        class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-primary transition group-hover:scale-110 group-hover:rotate-6">

                        <i class="{{ $item['icon'] }} text-2xl"></i>

                    </div>

                    <h3 class="mt-8 text-2xl font-semibold text-heading">

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