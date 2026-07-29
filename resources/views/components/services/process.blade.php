<section class="py-20">

    <div class="container mx-auto px-6">

        <!-- Heading -->

        <div class="text-center mb-5">

            <span
                class="text-secondary
                uppercase
                tracking-[0.35em]
                text-xs
                font-semibold">

                Our Process

            </span>

            <h2
                class="mt-2
                text-5xl
                font-bold
                text-heading">

                Our Development Process

            </h2>

            <p
                class="mx-auto
                mt-2
                max-w-2xl
                leading-8
                text-muted">

                We follow a transparent and proven workflow that transforms
                ideas into successful digital products.

            </p>

        </div>

        <!-- Timeline -->

        <div class="relative">

            <!-- Line -->

            <div
                class="absolute
                left-0
                right-0
                top-10
                hidden
                xl:block">

                <div
                    class="h-[2px]
                    w-full
                    bg-gradient-to-r
                    from-primary
                    via-secondary
                    to-primary">
                </div>

            </div>

            <!-- Cards -->

            <div
                class="grid
                gap-8
                md:grid-cols-2
                xl:grid-cols-6">

                @foreach($processes as $process)

                    <div
                        class="group
                        relative
                        text-center">

                        <!-- Number -->

                        <div
                            class="relative
                            z-20
                            mx-auto
                            flex
                            h-20
                            w-20
                            items-center
                            justify-center
                            rounded-full
                            border
                            border-primary/20
                            bg-card
                            shadow-[0_0_30px_rgba(37,99,235,.12)]
                            transition-all
                            duration-500
                            group-hover:scale-110
                            group-hover:border-primary">

                            <i
                                class="fa-solid {{ $process['icon'] }}
                                text-2xl
                                text-primary">
                            </i>

                        </div>

                        <!-- Step -->

                        <span
                            class="mt-6
                            inline-block
                            rounded-full
                            bg-primary/10
                            px-3
                            py-1
                            text-xs
                            font-semibold
                            text-primary">

                            STEP {{ $process['step'] }}

                        </span>

                        <!-- Title -->

                        <h3
                            class="mt-5
                            text-2xl
                            font-bold
                            text-heading">

                            {{ $process['title'] }}

                        </h3>

                        <!-- Description -->

                        <p
                            class="mt-4
                            leading-7
                            text-muted">

                            {{ $process['description'] }}

                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </div>

</section>