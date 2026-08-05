@props([
   'solutions',
   'len',
   'offset',
])


<section class="py-24">

    <div class="container mx-auto max-w-7xl px-6">

        <!-- Heading -->

        <!-- Cards -->

        <div
            class="grid
            gap-6
            sm:grid-cols-2
            lg:grid-cols-4">

            @foreach($solutions as $solution)

                <a
                    wire:navigate
                    href="{{ route('solution', $solution['slug']) }}"
                    class="group
                    overflow-hidden
                    rounded-2xl
                    border
                    border-border
                    bg-card
                    transition-all
                    duration-300
                    relative
                    hover:-translate-y-2
                    hover:border-primary">

                    <!-- Image -->

                    <div class=" overflow-hidden">

                        <img
                            src="{{ asset($solution['hero']['image']) }}"
                            alt="{{ $solution['name'] }}"
                            class="h-48
                                   w-full
                                   object-cover
                                   transition
                                   duration-500
                                   group-hover:scale-110">

                    </div>

                    <!-- Content -->

                    <div class="p-5 mb-5">

                        <h3
                            class="text-xl
                            font-semibold
                            text-heading">

                            {{ $solution['name'] }}

                        </h3>

                        <p
                            class="mt-2
                            text-sm
                            leading-7
                            text-muted">

                            {{ $solution['hero']['subtitle'] }}

                        </p>

                    </div>

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

                Explore More Solutions

                <i class="fa-solid fa-arrow-right group-hover:translate-x-1"></i>

            </button>
            @endif



        </div>

    </div>

</section>