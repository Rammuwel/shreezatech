<?php

use Livewire\Component;

new class extends Component
{
    public $title = "Shreeza | Blog";
    public $metaDescription = "Explore the latest insights, tutorials, and updates from Shreeza on software development, AI, cloud computing, and digital innovation.";
    
    public array $posts = [
        [
            'title' => 'Building Scalable Web Applications with Laravel',
            'excerpt' => 'Learn how to architect and build enterprise-grade web applications using Laravel\'s powerful features and best practices.',
            'image' => 'images/blog/laravel.jpg',
            'category' => 'Development',
            'author' => 'Shreeza Team',
            'date' => 'Jul 15, 2026',
            'slug' => 'building-scalable-web-applications-laravel',
        ],
        [
            'title' => 'The Future of AI in Business Automation',
            'excerpt' => 'Discover how artificial intelligence is transforming business processes and what it means for your organization.',
            'image' => 'images/blog/ai.jpg',
            'category' => 'AI & ML',
            'author' => 'Shreeza Team',
            'date' => 'Jul 10, 2026',
            'slug' => 'future-of-ai-business-automation',
        ],
        [
            'title' => 'Cloud Migration: A Step-by-Step Guide',
            'excerpt' => 'A comprehensive guide to migrating your infrastructure to the cloud with minimal downtime and maximum efficiency.',
            'image' => 'images/blog/cloud.jpg',
            'category' => 'Cloud',
            'author' => 'Shreeza Team',
            'date' => 'Jul 5, 2026',
            'slug' => 'cloud-migration-step-by-step-guide',
        ],
        [
            'title' => 'UI/UX Trends to Watch in 2026',
            'excerpt' => 'Stay ahead of the curve with these emerging UI/UX design trends that are shaping the digital landscape.',
            'image' => 'images/blog/uiux.jpg',
            'category' => 'Design',
            'author' => 'Shreeza Team',
            'date' => 'Jun 28, 2026',
            'slug' => 'ui-ux-trends-2026',
        ],
        [
            'title' => 'Why Your Business Needs a Mobile App',
            'excerpt' => 'Explore the benefits of mobile applications for businesses and how they drive customer engagement and revenue.',
            'image' => 'images/blog/mobile.jpg',
            'category' => 'Mobile',
            'author' => 'Shreeza Team',
            'date' => 'Jun 20, 2026',
            'slug' => 'why-business-needs-mobile-app',
        ],
        [
            'title' => 'DevOps Best Practices for 2026',
            'excerpt' => 'Implement these DevOps best practices to streamline your development pipeline and accelerate delivery.',
            'image' => 'images/blog/devops.jpg',
            'category' => 'DevOps',
            'author' => 'Shreeza Team',
            'date' => 'Jun 12, 2026',
            'slug' => 'devops-best-practices-2026',
        ],
    ];
};
?>

<div>
    <x-seo.meta :title="$title" :description="$metaDescription" />
    
    <section class="py-16 sm:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div x-intersect="animate-fade-in-up" class="opacity-0 text-center max-w-2xl mx-auto mb-12">
                <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">OUR BLOG</span>
                <h1 class="text-3xl sm:text-4xl font-bold text-heading mt-3">Insights & Updates</h1>
                <p class="mt-3 text-text/80">Stay informed with the latest trends, tutorials, and news from our team.</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                <article x-intersect="animate-fade-in-up" class="opacity-0 group rounded-2xl border border-border bg-card/60 overflow-hidden hover:-translate-y-2 hover:border-primary/40 transition-all duration-500 hover:shadow-[0_8px_30px_rgba(37,99,235,0.12)]">
                    <div class="relative overflow-hidden h-48">
                        <img src="{{ asset($post['image']) }}" alt="{{ $post['title'] }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105"
                            onerror="this.style.display='none'">
                        <div class="absolute inset-0 bg-gradient-to-t from-background/60 to-transparent"></div>
                        <span class="absolute bottom-3 left-3 rounded-full bg-primary/90 text-white px-3 py-1 text-xs font-semibold backdrop-blur-sm">{{ $post['category'] }}</span>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center gap-3 text-xs text-muted mb-3">
                            <span>{{ $post['author'] }}</span>
                            <span class="w-1 h-1 rounded-full bg-border"></span>
                            <span>{{ $post['date'] }}</span>
                        </div>
                        <h3 class="text-lg font-bold text-heading group-hover:text-primary transition-colors line-clamp-2">{{ $post['title'] }}</h3>
                        <p class="mt-2 text-sm text-muted line-clamp-3">{{ $post['excerpt'] }}</p>
                        <div class="mt-4 flex items-center gap-1.5 text-sm font-medium text-primary group-hover:gap-2.5 transition-all">
                            Read More
                            <x-svg.index icon="arrow-right" class="w-3.5 h-3.5" />
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    
    <x-home.banner/>
</div>
