<section class="relative max-w-7xl m-auto py-5 lg:py-10">
    <div class="container">

        <div class=" flex flex-wrap items-center  gap-4">

        

            <button
                class=" bg-primary px-6 py-3 text-sm font-medium text-white transition-all duration-300 hover:bg-primary/90">
                All
            </button>

            <button
                class=" border border-white/10 bg-card px-6 py-3 text-sm text-muted transition hover:border-primary hover:text-white">
                Technology
            </button>

            <button
                class=" border border-white/10 bg-card px-6 py-3 text-sm text-muted transition hover:border-primary hover:text-white">
                Business
            </button>

            <button
                class=" border border-white/10 bg-card px-6 py-3 text-sm text-muted transition hover:border-primary hover:text-white">
                Development
            </button>

        </div>




    </div>


    <div class="container mt-10">

        <div class="grid gap-8 md:grid-cols-2 xl:grid-cols-3">

            <!-- Cards Here -->
            <x-blogs.card
                image="{{ asset('images/blog/shreeza-tech-blog-future-of-ai-in-business.webp') }}"
                category="Technology"
                title="The Future of AI in Business"
                date="May 20, 2026"
                readTime="5 min read" />

       <x-blogs.card
                image="{{ asset('images/blog/shreeza-tech-blog-cloud-computing-business.webp') }}"
                category="Cloud"
                title="How Cloud Computing Transforms Businesses"
                date="May 17, 2026"
                readTime="6 min read" />

             <x-blogs.card
                image="{{ asset('images/blog/shreeza-tech-blog-ui-ux-design-trends.webp') }}"
                category="Design"
                title="UI/UX Design Trends in 2026"
                date="May 12, 2026"
                readTime="4 min read" />

             <x-blogs.card
                image="{{ asset('images/blog/shreeza-tech-blog-digital-transformation.webp') }}"
                category="Business"
                title="Why Digital Transformation Matters"
                date="May 10, 2026"
                readTime="5 min read" />

             <x-blogs.card
                image="{{ asset('images/blog/shreeza-tech-blog-programming-languages.webp') }}"
                category="Development"
                title="Top Programming Languages in 2026"
                date="May 08, 2026"
                readTime="6 min read" />

            <x-blogs.card
                image="{{ asset('images/blog/shreeza-tech-blog-cybersecurity-best-practices.webp') }}"
                category="Cyber Security"
                title="Cybersecurity Best Practices for Businesses"
                date="May 05, 2026"
                readTime="5 min read" />

        </div>

    </div>


</section>