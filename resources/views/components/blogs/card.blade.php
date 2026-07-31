@props([
    'image',
    'category',
    'title',
    'excerpt' => '',
    'author' => '',
    'date' => '',
])

<article
    {{ $attributes->merge(['class' => 'group flex flex-col overflow-hidden rounded-2xl border border-border bg-card/60 transition-all duration-500 hover:-translate-y-2 hover:border-primary/40 hover:shadow-[0_8px_30px_rgba(37,99,235,0.12)]']) }}
>
    <div class="relative overflow-hidden h-48">
        <img
            src="{{ asset($image) }}"
            alt="{{ $title }}"
            class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
            onerror="this.style.display='none'">
        <div class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent"></div>
        <span class="absolute bottom-3 left-3 rounded-full bg-primary/90 text-white px-3 py-1 text-xs font-semibold backdrop-blur-sm">
            {{ $category }}
        </span>
    </div>

    <div class="flex flex-1 flex-col p-5">
        @if($author || $date)
        <div class="flex items-center gap-3 text-xs text-muted mb-3">
            @if($author)<span>{{ $author }}</span>@endif
            @if($author && $date)<span class="w-1 h-1 rounded-full bg-border"></span>@endif
            @if($date)<span>{{ $date }}</span>@endif
        </div>
        @endif

        <h3 class="text-lg font-bold text-heading group-hover:text-primary transition-colors line-clamp-2">
            {{ $title }}
        </h3>

        @if($excerpt)
        <p class="mt-2 text-sm text-muted line-clamp-3">
            {{ $excerpt }}
        </p>
        @endif

        <div class="mt-4 flex items-center gap-1.5 text-sm font-medium text-primary group-hover:gap-2.5 transition-all">
            Read More
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
            </svg>
        </div>
    </div>
</article>
