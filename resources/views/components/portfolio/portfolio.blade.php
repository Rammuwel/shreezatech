@props([
'projects',
'offset',
'len',
'activeCategory'

])


<section class="ortfolio  w-6xl m-auto">
    <div class="portfolio-filter flex flex-wrap  gap-3 py-5">

        @foreach($categories as $category)

        <button
            wire:click="filter('{{ $category['slug'] }}')"
            class="border px-6 py-2 text-sm font-medium transition-all duration-300

            {{ $activeCategory === $category['slug'] 
                ? 'bg-primary border-primary text-white'
                : 'bg-card border-border text-muted hover:border-primary hover:text-white' }}">

            {{ $category['name']  }}

        </button>

        @endforeach

    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-7 my-4">

        @foreach($projects as $project)

        <a
            href="javascript:void[0]"
            wire:navigate
            class="group overflow-hidden rounded-2xl border border-border bg-card transition-all duration-500 hover:-translate-y-2 hover:border-primary">

            <div class="overflow-hidden">

                <img
                    src="{{ asset($project['image']) }}"
                    class="h-56 w-full object-cover transition duration-700 group-hover:scale-110">

            </div>

            <div class="p-5">

                <span class="text-xs text-primary font-semibold uppercase">

                    {{ $project['category'] }}

                </span>

                <h3 class="mt-2 text-xl font-bold text-heading">

                    {{ $project['title'] }}

                </h3>

                <p class="mt-2 text-muted">

                    {{ $project['type'] }}

                </p>

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
</section>