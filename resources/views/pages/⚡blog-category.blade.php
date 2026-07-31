<?php

use App\Data\BlogPosts;
use Livewire\Component;

new class extends Component
{
    public $title = "Shreeza | Blog";
    public $metaDescription = "Explore the latest insights, tutorials, and updates from Shreeza on software development, AI, cloud computing, and digital innovation.";

    public string $category = '';

    public array $posts = [];

    public array $categories = [];

    public string $activeCategory = 'all';

    public bool $heroVisible = true;

    public function mount(string $category): void
    {
        $resolved = BlogPosts::findCategoryBySlug($category);
        $this->category = $resolved ?? 'All';
        $this->activeCategory = $resolved ? Str::lower($resolved) : 'all';
        $this->posts = $resolved ? BlogPosts::findByCategory($resolved) : BlogPosts::all();
        $this->categories = BlogPosts::categories();
        $this->title = $resolved ? "{$resolved} | Shreeza Blog" : "Shreeza | Blog";
        $this->metaDescription = $resolved ? "Browse our articles about {$resolved} covering best practices, trends, and insights." : $this->metaDescription;
    }

    public function filterByCategory(string $category): void
    {
        $this->activeCategory = $category;
        $this->heroVisible = false;
        if ($category === 'all') {
            $this->posts = BlogPosts::all();
            $this->category = 'All';
            $this->title = 'Shreeza | Blog';
        } else {
            $this->posts = BlogPosts::findByCategory($category);
            $this->category = ucfirst($category);
            $this->title = ucfirst($category).' | Shreeza Blog';
        }
    }
};
?>

<div>
    <x-seo.meta :title="$title" :description="$metaDescription" />

    <!-- ================= Hero ================= -->
    @if($heroVisible)
    <section class="relative overflow-hidden bg-linear-to-b from-primary/10 via-background to-surface pt-36 pb-20 sm:pb-24">
        <div class="absolute inset-0">
            <div class="absolute inset-0 opacity-10 dark:opacity-20 bg-[linear-gradient(to_right,#1f2937_1px,transparent_1px),linear-gradient(to_bottom,#1f2937_1px,transparent_1px)] bg-[size:80px_80px]"></div>
            <div class="absolute -top-24 left-1/2 h-96 w-96 -translate-x-1/2 rounded-full bg-primary/20 blur-[160px]"></div>
            <div class="absolute bottom-4 right-1/4 h-72 w-72 rounded-full bg-secondary/20 blur-[130px]"></div>
            <div class="absolute bottom-0 left-1/4 h-40 w-96 rounded-full bg-primary/10 blur-[120px]"></div>
        </div>
        <div class="absolute inset-x-0 bottom-0 h-24 bg-linear-to-t from-surface to-transparent"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div x-intersect="animate-fade-in-up" class="opacity-0">
                <span class="inline-flex items-center gap-2 rounded-full border border-primary/20 bg-primary/10 px-4 py-1.5 text-xs font-bold tracking-[0.2em] uppercase text-primary">
                    <i class="fa-solid fa-newspaper"></i>
                    Blog
                </span>
                <h1 class="mt-5 text-4xl sm:text-5xl font-bold text-heading tracking-tight">
                    {{ $activeCategory === 'all' ? 'All Articles' : ucfirst($activeCategory).' Articles' }}
                </h1>
                <p class="mt-4 text-lg text-muted max-w-2xl mx-auto">
                    {{ $activeCategory === 'all'
                        ? 'Stay informed with the latest trends, tutorials, and news from our team.'
                        : 'Browse our articles and insights about '.ucfirst($activeCategory).'.' }}
                </p>
            </div>
        </div>
    </section>
    @endif

    <!-- ================= Filters ================= -->
    <section class="relative bg-surface {{ $heroVisible ? 'pb-10' : 'pt-32 pb-10' }}">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap items-center justify-center gap-3">
                <button type="button" wire:click="filterByCategory('all')" wire:key="filter-all"
                    class="px-5 py-2.5 text-sm font-medium rounded-full border transition-all duration-300
                        {{ $activeCategory === 'all' ? 'bg-primary text-white border-primary shadow-md' : 'border-border bg-card text-muted hover:border-primary hover:text-heading' }}">
                    All
                </button>
                @foreach($categories as $cat)
                    <button type="button" wire:click="filterByCategory('{{ Str::lower($cat) }}')" wire:key="filter-{{ Str::slug($cat) }}"
                        class="px-5 py-2.5 text-sm font-medium rounded-full border transition-all duration-300
                            {{ $activeCategory === Str::lower($cat) ? 'bg-primary text-white border-primary shadow-md' : 'border-border bg-card text-muted hover:border-primary hover:text-heading' }}">
                        {{ $cat }}
                    </button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- ================= Posts Grid ================= -->
    <section class="relative overflow-hidden bg-surface pb-16 sm:pb-24">
        <div class="absolute top-0 right-0 h-72 w-72 rounded-full bg-primary/5 blur-[120px]"></div>
        <div class="absolute bottom-10 left-0 h-72 w-72 rounded-full bg-secondary/5 blur-[120px]"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8 flex items-center gap-4">
                <h2 class="text-xl font-bold text-heading">
                    {{ $activeCategory === 'all' ? 'All Articles' : ucfirst($activeCategory).' Articles' }}
                </h2>
                <span class="rounded-full border border-primary/20 bg-primary/10 px-3 py-0.5 text-xs font-semibold text-primary">
                    {{ count($posts) }}
                </span>
                <div class="h-px flex-1 bg-border/60"></div>
            </div>

            @if(count($posts) > 0)
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($posts as $post)
                        <x-blogs.card
                            wire:key="post-{{ $post['slug'] }}"
                            :image="$post['image']"
                            :category="$post['category']"
                            :title="$post['title']"
                            :excerpt="$post['excerpt']"
                            :author="$post['author']"
                            :date="$post['date']" />
                    @endforeach
                </div>
            @else
                <div class="text-center py-20">
                    <div class="text-6xl mb-6 opacity-30">
                        <i class="fa-regular fa-folder-open"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-heading mb-2">No posts found</h3>
                    <p class="text-muted mb-6">No articles found in this category yet.</p>
                    <button type="button" wire:click="filterByCategory('all')"
                        class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white rounded-full text-sm font-medium hover:bg-primary/90 transition-all">
                        <i class="fa-solid fa-arrow-left"></i>
                        Back to All Posts
                    </button>
                </div>
            @endif
        </div>
    </section>

    <x-home.banner />
</div>
