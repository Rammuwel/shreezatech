<section class="mb-10">

    <div class="container mx-auto px-6">

        <!-- Heading -->

        <div class="text-center mb-5">

            <span
                class="text-secondary
                uppercase
                tracking-[0.3em]
                text-xs
                font-semibold">

                Why Choose Us

            </span>

            <h2
                class="mt-2
                text-5xl
                font-bold
                text-heading">

                Why Choose Shreeza?

            </h2>

            <p
                class="mt-2
                max-w-2xl
                mx-auto
                text-muted
                leading-8">

                We combine innovation, expertise, and dedication to deliver
                digital solutions that create lasting business value.

            </p>

        </div>

        <!-- Cards -->

        <div
            class="grid
            gap-8
            md:grid-cols-2
            xl:grid-cols-4">

            @foreach($features as $feature)

                <div
                    class="group
                    relative
                    overflow-hidden
                    rounded-3xl
                    border
                    border-border
                    bg-card
                    p-8
                    transition-all
                    duration-500
                    hover:-translate-y-3
                    hover:border-primary
                    hover:shadow-[0_25px_50px_rgba(37,99,235,.18)]">

                    <!-- Glow -->

                    <div
                        class="absolute
                        -right-10
                        -top-10
                        h-36
                        w-36
                        rounded-full
                        bg-primary/10
                        blur-[80px]
                        opacity-0
                        transition
                        duration-500
                        group-hover:opacity-100">
                    </div>

                    <!-- Icon -->

                    <div
                        class="relative
                        mb-8
                        flex
                        h-18
                        w-18
                        items-center
                        justify-center
                        rounded-2xl
                        border
                        border-primary/20
                        bg-primary/10">

                        <i
                            class="fa-solid {{ $feature['icon'] }}
                            text-3xl
                            text-primary">
                        </i>

                    </div>

                    <!-- Title -->

                    <h3
                        class="text-2xl
                        font-semibold
                        text-heading">

                        {{ $feature['title'] }}

                    </h3>

                    <!-- Description -->

                    <p
                        class="mt-4
                        text-muted
                        leading-8">

                        {{ $feature['description'] }}

                    </p>

                    <!-- Decorative Line -->

                    <div
                        class="mt-8
                        h-[2px]
                        w-16
                        bg-gradient-to-r
                        from-primary
                        to-transparent
                        transition-all
                        duration-500
                        group-hover:w-full">
                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>