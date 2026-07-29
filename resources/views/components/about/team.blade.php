<section class="py-15">

    <div class="max-w-7xl mx-auto px-6">

        <!-- Heading -->

        <div class="text-center mb-10">

            <span
                class="text-secondary text-xs uppercase tracking-[0.35em] font-bold">

                Meet Our Leadership

            </span>

            <h2
                class="mt-2 text-4xl font-bold text-heading">

                The Minds Behind Shreeza

            </h2>

            <p
                class="mt-3 max-w-3xl mx-auto text-muted leading-8">

                Our passionate team combines technical expertise, creativity,
                and business insight to build world-class digital solutions.

            </p>

        </div>

        <!-- Cards -->

        <div
            class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">

            @foreach($team as $member)

                <div
                    class="team-card group rounded-3xl overflow-hidden
                    border border-border bg-card
                    transition-all duration-500
                    hover:-translate-y-3
                    hover:border-primary">

                    <!-- Image -->

                    <div class="relative overflow-hidden">

                        <img
                            src="{{ asset($member['image']) }}"
                            class="h-80 w-full object-cover
                            transition duration-700
                            group-hover:scale-110">

                        <!-- Overlay -->

                        <div
                            class="absolute inset-0
                            bg-gradient-to-t
                            from-background
                            via-background/30
                            to-transparent">
                        </div>

                        <!-- Social -->

                        <div
                            class="absolute bottom-5 left-1/2
                            -translate-x-1/2
                            flex gap-3
                            opacity-0
                            group-hover:opacity-100
                            transition">

                            <a
                                href="{{ $member['linkedin'] }}"
                                class="h-10 w-10 rounded-full
                                bg-primary text-white
                                flex items-center justify-center">

                                <i class="fab fa-linkedin-in"></i>

                            </a>

                            <a
                                href="{{ $member['twitter'] }}"
                                class="h-10 w-10 rounded-full
                                bg-card border border-border
                                flex items-center justify-center">

                                <i class="fab fa-x-twitter"></i>

                            </a>

                        </div>

                    </div>

                    <!-- Content -->

                    <div class="p-6 text-center">

                        <h3
                            class="text-xl font-bold text-heading">

                            {{ $member['name'] }}

                        </h3>

                        <p
                            class="mt-2 text-primary">

                            {{ $member['position'] }}

                        </p>

                    </div>

                </div>

            @endforeach

        </div>

        <!-- Button -->

        <div class="mt-14 text-center">

            <a
                href="javascript:void[0]"
                wire:navigate
                class="inline-flex items-center gap-3
                rounded-xl bg-background
                px-8 py-4
                font-semibold text-white
                transition pointer-events-none
                hover:gap-5">

                View All Team Members

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>

</section>