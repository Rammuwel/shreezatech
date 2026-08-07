@props(['category'])

<section class="relative py-5">
    <div class="container relative m-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-auto mb-10 max-w-3xl text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">
                <i class="fa-solid fa-layer-group"></i>
                What We Offer
            </span>
            <h2 class="mt-5 text-4xl font-bold text-heading lg:text-5xl">
                {{ $category['name'] }} Capabilities
            </h2>
            <p class="mt-5 text-lg leading-8 text-muted">
                We leverage the best tools and practices in {{ $category['name'] }} to deliver exceptional results.
            </p>
        </div>
        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">
            @foreach ($category['features'] as $feature)
            <div class="group rounded-3xl border border-border bg-card p-8 transition-all duration-300 hover:-translate-y-2 hover:border-primary/30 hover:shadow-2xl">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-primary transition group-hover:scale-110">
                    <i class="{{ $feature['icon'] }} text-2xl"></i>
                </div>
                <h3 class="mt-8 text-2xl font-semibold text-heading">{{ $feature['title'] }}</h3>
                <p class="mt-4 leading-7 text-muted">{{ $feature['description'] }}</p>
                <div class="mt-8 inline-flex items-center gap-2 font-medium text-primary">
                    Learn More
                    <i class="fa-solid fa-arrow-right transition-transform group-hover:translate-x-2"></i>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
