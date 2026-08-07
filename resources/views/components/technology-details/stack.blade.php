@props(['category'])

<section class="relative py-5 overflow-hidden">
    <div class="container relative mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mx-auto mb-10 max-w-3xl text-center">
            <span class="inline-flex items-center gap-2 rounded-full border border-secondary/20 bg-secondary/10 px-4 py-2 text-sm font-medium text-secondary">
                <i class="fa-solid fa-laptop-code"></i>
                Technologies
            </span>
            <h2 class="mt-6 text-4xl font-bold text-heading lg:text-5xl">
                {{ $category['name'] }} Tech Stack
            </h2>
            <p class="mt-6 text-lg leading-8 text-muted">
                We use industry-leading {{ $category['name'] }} technologies to build secure, scalable, and future-ready solutions.
            </p>
        </div>
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            @foreach($category['technologies'] as $technology)
            <div class="group rounded-3xl border border-border bg-card p-8 transition-all duration-300 hover:-translate-y-2 hover:border-primary/30">
                <div class="flex h-16 w-16 items-center justify-center rounded-2xl bg-primary/10 text-primary transition group-hover:rotate-6 group-hover:scale-110">
                    <i class="fa-solid fa-code text-2xl"></i>
                </div>
                <h3 class="mt-6 text-xl font-semibold text-heading">{{ $technology }}</h3>
                <p class="mt-3 leading-7 text-muted">
                    Modern {{ $category['name'] }} technology for building scalable, secure and high-performance applications.
                </p>
            </div>
            @endforeach
        </div>
    </div>
</section>
