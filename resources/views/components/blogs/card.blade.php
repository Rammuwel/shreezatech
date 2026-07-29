@props([
    'image',
    'category',
    'title',
    'date',
    'readTime',
    'url' => '#'
])

<article
    class="group overflow-hidden rounded-2xl border border-white/10 bg-card transition-all duration-300 hover:-translate-y-2 hover:border-primary/30 hover:shadow-[0_20px_50px_rgba(37,99,235,.18)]">

    <!-- Image -->
    <a href="{{ $url }}" class="block overflow-hidden">

        <img
            src="{{ $image }}"
            alt="{{ $title }}"
            class="aspect-[16/10] w-full object-cover transition duration-500 group-hover:scale-110">

    </a>

    <!-- Content -->
    <div class="p-5">

        <!-- Category -->

        <span
            class="inline-flex rounded-full bg-primary/10 px-3 py-1 text-xs font-medium text-primary">

            {{ $category }}

        </span>

        <!-- Title -->

        <h3
            class="mt-4 line-clamp-2 text-xl font-semibold leading-8 text-white transition group-hover:text-primary">

            <a href="{{ $url }}">
                {{ $title }}
            </a>

        </h3>

        <!-- Meta -->

        <div
            class="mt-5 flex items-center gap-5 text-sm text-muted">

            <span class="flex items-center gap-2">

                <i class="fa-regular fa-calendar text-primary"></i>

                {{ $date }}

            </span>

            <span class="flex items-center gap-2">

                <i class="fa-regular fa-clock text-primary"></i>

                {{ $readTime }}

            </span>

        </div>

        <!-- Read More -->

        <a
            href="{{ $url }}"
            class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-primary transition-all group-hover:gap-3">

            Read More

            <i class="fa-solid fa-arrow-right text-xs"></i>

        </a>

    </div>

</article>