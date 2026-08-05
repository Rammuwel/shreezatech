<?php

namespace App\Data;

use Illuminate\Support\Str;

class BlogPosts
{
    public static function all(): array
    {
        return [
            [
                'title' => 'Building Scalable Web Applications with Laravel',
                'excerpt' => 'Learn how to architect and build enterprise-grade web applications using Laravel\'s powerful features and best practices.',
                'image' => 'images/blog/shreeza-tech-blog-laravel-web-applications.webp',
                'category' => 'Development',
                'author' => 'Shreeza Team',
                'date' => 'Jul 15, 2026',
                'slug' => 'building-scalable-web-applications-laravel',
            ],
            [
                'title' => 'The Future of AI in Business Automation',
                'excerpt' => 'Discover how artificial intelligence is transforming business processes and what it means for your organization.',
                'image' => 'images/blog/shreeza-tech-blog-future-of-ai-in-business.webp',
                'category' => 'Technology',
                'author' => 'Shreeza Team',
                'date' => 'Jul 10, 2026',
                'slug' => 'future-of-ai-business-automation',
            ],
            [
                'title' => 'Cloud Migration: A Step-by-Step Guide',
                'excerpt' => 'A comprehensive guide to migrating your infrastructure to the cloud with minimal downtime and maximum efficiency.',
                'image' => 'images/blog/shreeza-tech-blog-cloud-computing-business.webp',
                'category' => 'Cloud',
                'author' => 'Shreeza Team',
                'date' => 'Jul 5, 2026',
                'slug' => 'cloud-migration-step-by-step-guide',
            ],
            [
                'title' => 'UI/UX Trends to Watch in 2026',
                'excerpt' => 'Stay ahead of the curve with these emerging UI/UX design trends that are shaping the digital landscape.',
                'image' => 'images/blog/shreeza-tech-blog-ui-ux-design-trends.webp',
                'category' => 'Design',
                'author' => 'Shreeza Team',
                'date' => 'Jun 28, 2026',
                'slug' => 'ui-ux-trends-2026',
            ],
            [
                'title' => 'Why Your Business Needs a Mobile App',
                'excerpt' => 'Explore the benefits of mobile applications for businesses and how they drive customer engagement and revenue.',
                'image' => 'images/blog/shreeza-tech-blog-mobile-app-development.webp',
                'category' => 'Mobile',
                'author' => 'Shreeza Team',
                'date' => 'Jun 20, 2026',
                'slug' => 'why-business-needs-mobile-app',
            ],
            [
                'title' => 'DevOps Best Practices for 2026',
                'excerpt' => 'Implement these DevOps best practices to streamline your development pipeline and accelerate delivery.',
                'image' => 'images/blog/shreeza-tech-blog-devops-best-practices.webp',
                'category' => 'DevOps',
                'author' => 'Shreeza Team',
                'date' => 'Jun 12, 2026',
                'slug' => 'devops-best-practices-2026',
            ],
            [
                'title' => 'How Cloud Computing Transforms Businesses',
                'excerpt' => 'Learn how cloud computing enables business agility, reduces costs, and drives digital transformation.',
                'image' => 'images/blog/shreeza-tech-blog-cloud-computing-business.webp',
                'category' => 'Cloud',
                'author' => 'Shreeza Team',
                'date' => 'Jun 8, 2026',
                'slug' => 'cloud-computing-transforms-businesses',
            ],
            [
                'title' => 'Why Digital Transformation Matters',
                'excerpt' => 'Understand why digital transformation is critical for business survival and growth in the modern era.',
                'image' => 'images/blog/shreeza-tech-blog-digital-transformation.webp',
                'category' => 'Business',
                'author' => 'Shreeza Team',
                'date' => 'Jun 5, 2026',
                'slug' => 'why-digital-transformation-matters',
            ],
            [
                'title' => 'Top Programming Languages in 2026',
                'excerpt' => 'A comprehensive overview of the most in-demand programming languages and their use cases.',
                'image' => 'images/blog/shreeza-tech-blog-programming-languages.webp',
                'category' => 'Development',
                'author' => 'Shreeza Team',
                'date' => 'May 30, 2026',
                'slug' => 'top-programming-languages-2026',
            ],
            [
                'title' => 'Cybersecurity Best Practices for Businesses',
                'excerpt' => 'Protect your organization with these essential cybersecurity practices and strategies.',
                'image' => 'images/blog/shreeza-tech-blog-cybersecurity-best-practices.webp',
                'category' => 'Cyber Security',
                'author' => 'Shreeza Team',
                'date' => 'May 25, 2026',
                'slug' => 'cybersecurity-best-practices-businesses',
            ],
            [
                'title' => 'How AI is Revolutionizing Customer Service',
                'excerpt' => 'Explore how artificial intelligence is transforming customer service with chatbots, personalization, and predictive analytics.',
                'image' => 'images/blog/shreeza-tech-blog-future-of-ai-in-business.webp',
                'category' => 'Technology',
                'author' => 'Shreeza Team',
                'date' => 'May 20, 2026',
                'slug' => 'ai-revolutionizing-customer-service',
            ],
            [
                'title' => 'The Rise of Edge Computing',
                'excerpt' => 'Discover how edge computing is changing the way data is processed and delivered at the network edge.',
                'image' => 'images/blog/shreeza-tech-blog-laravel-web-applications.webp',
                'category' => 'Technology',
                'author' => 'Shreeza Team',
                'date' => 'May 15, 2026',
                'slug' => 'rise-of-edge-computing',
            ],
        ];
    }

    public static function categories(): array
    {
        $categories = [];
        foreach (self::all() as $post) {
            $categories[$post['category']] = $post['category'];
        }
        ksort($categories);
        return array_values($categories);
    }

    public static function findByCategory(string $category): array
    {
        return array_values(array_filter(self::all(), fn($post) => strtolower($post['category']) === strtolower($category)));
    }

    public static function findCategoryBySlug(string $slug): ?string
    {
        foreach (self::categories() as $category) {
            if (Str::slug($category) === $slug) {
                return $category;
            }
        }

        return null;
    }

    public static function find(string $slug): ?array
    {
        foreach (self::all() as $post) {
            if ($post['slug'] === $slug) {
                return $post;
            }
        }
        return null;
    }
}
