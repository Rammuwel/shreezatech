<section class="py-5">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->

        <div class="text-center">

            <span class="text-secondary text-sm uppercase tracking-[0.3em]">

                Our Journey

            </span>

            <h2 class="mt-3 text-4xl font-bold text-heading">

                Milestones That Define Us

            </h2>

        </div>

        <!-- Timeline -->

        <div class="relative mt-10">

            <!-- Horizontal Line (Desktop) -->

            <div
                class="hidden lg:block absolute left-0 right-0 top-60 h-0.5
                bg-border">
            </div>

            <!-- Vertical Line (Mobile & Tablet) -->

            <div
                class="lg:hidden absolute left-4 top-0 bottom-0 w-0.5
                bg-border">
            </div>

            <div class="grid lg:grid-cols-5 gap-8 pl-10 lg:pl-0">

                @foreach($journey as $item)

                    <div class="timeline-card relative">

                        <!-- Card -->

                        <div
                            class="rounded-2xl border border-border
                            bg-card/70 backdrop-blur-xl
                            p-6 h-full">

                            <h3
                                class="text-3xl font-bold text-secondary">

                                {{ $item['year'] }}

                            </h3>

                            <h4
                                class="mt-4 font-semibold text-heading">

                                {{ $item['title'] }}

                            </h4>

                            <p
                                class="mt-3 text-sm text-muted leading-7">

                                {{ $item['description'] }}

                            </p>

                        </div>

                        <!-- Dot (Desktop) -->

                        <div
                            class="hidden lg:block absolute left-1/2 -translate-x-1/2
                            top-58">

                            <div
                                class="w-4 h-4 rounded-full
                                bg-primary shadow-[0_0_20px_#2563eb]">
                            </div>

                        </div>

                        <!-- Dot (Mobile & Tablet) -->

                        <div
                            class="lg:hidden absolute -left-8 top-6">

                            <div
                                class="w-4 h-4 rounded-full
                                bg-primary shadow-[0_0_20px_#2563eb]">
                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>