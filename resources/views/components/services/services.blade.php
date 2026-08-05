@props([
'services' => [],
'explore' => false,
'len' => 0,
'offset' => 8,
])



<section class="py-20">

    <div class="container mx-auto px-6">

        <!-- Heading -->



        <!-- Cards -->

        <div
            class="grid
            gap-7
            grid-col-2
            md:grid-cols-3
            lg:grid-cols-4">

            @foreach($services as $service)

            <a
                wire:navigate
                href="{{ route('service', $service['slug']) }}"
                class="group
                    relative
                    block
                    overflow-hidden
                    rounded-3xl
                    border
                    border-border
                    bg-card
                    p-8
                    transition-all
                    duration-500
                    hover:-translate-y-2
                    hover:border-primary
                    hover:shadow-[0_20px_45px_rgba(37,99,235,.18)]">

                <!-- Glow -->

                <div
                    class="absolute
                        -right-10
                        -top-10
                        h-32
                        w-32
                        rounded-full
                        bg-primary/10
                        blur-3xl
                        opacity-0
                        transition
                        duration-500
                        group-hover:opacity-100">
                </div>

                <!-- Icon -->

                <div

                    class="mb-8
                        flex
                        h-16
                        w-16
                        items-center
                        justify-center
                        rounded-2xl
                        border
                        border-primary/20
                        bg-primary/10">

                    <i
                        class="fa-solid {{ $service['icon'] }}
                            text-2xl
                            text-primary">
                    </i>

                </div>

                <h3
                    class="text-2xl
                        font-semibold
                        text-heading">

                    {{ $service['name'] }}

                </h3>

                <p
                    class="mt-4
                        leading-8
                        text-muted">

                    {{ $service['hero']['subtitle'] }}

                </p>

                <!-- Arrow -->

                <div

                    class="mt-8 absolute bottom-2 right-5
                        flex
                        items-center
                        gap-3
                        text-primary">

                    <span
                        class="font-semibold">

                        Learn More

                    </span>

                    <i
                        class="fa-solid
                            fa-arrow-right
                            transition-transform
                            duration-300
                            group-hover:translate-x-2">
                    </i>

                </div>

            </a>

            @endforeach

        </div>

        <!-- Button -->

        <div class="mt-10 text-center">

            @if ($len > $offset)
            <button

                wire:click="explore({{ $offset + 4 }})"
                class="inline-flex
                items-center
                gap-3 group
                rounded-xl
                bg-primary
                px-8
                py-4
                font-semibold
                text-white
                transition
                duration-300
                hover:-translate-y-1
                hover:shadow-[0_0_35px_rgba(10,20,99,.4)]">

                Explore More Services

                <i class="fa-solid fa-arrow-right group-hover:translate-x-1"></i>

            </button>
            @endif



        </div>

    </div>

</section>