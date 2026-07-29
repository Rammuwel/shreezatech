<section class="review py-5">

    <div class="max-w-7xl mx-auto lg:px-8">

        <!-- Header -->
        <div class="review-header flex items-end justify-between mb-3">

            <div>
                <span class="text-secondary uppercase tracking-[0.25em] text-xs font-bold">
                    WHAT OUR CLIENTS SAY
                </span>

                <h2 class="review-title text-2xl font-bold text-heading">
                    Trusted by Businesses Worldwide?
                </h2>
            </div>

            <a
                
                href="javascript:void[0]"
                wire:navigate
                class="hidden md:flex items-center gap-2 text-primary hover:gap-4 transition-all">

                View All Testimonials
                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

        <!-- Slider -->
        <div class="relative">

            <!-- Prev -->
            <button
                class="review-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-7 z-20 h-12 w-12 rounded-full border border-border bg-card flex items-center justify-center">

                <i class="fa-solid fa-arrow-left text-text"></i>

            </button>

            <!-- Swiper -->

            <div class="review-swiper swiper">

                <div class="swiper-wrapper h-auto flex items-stretch p-2 transition-all">

                    @foreach($testimonials as $testimonial)

                    <div class="swiper-slide  h-auto flex">

                        <div
                    <div class="group flex h-full  min-h-65 flex-col rounded-2xl border border-border bg-card/70 backdrop-blur-xl p-6 transition duration-500 hover:-translate-y-1 hover:border-primary/40">

                            <!-- Quote -->
                            <i class="fa-solid fa-quote-left text-4xl text-primary/70"></i>

                            <!-- Review -->
                            <p class="mt-4 flex-1 text-sm leading-7 text-muted line-clamp-3">
                                {{ $testimonial['review'] }}
                            </p>

                            <!-- Bottom -->
                            <div class="mt-6 flex items-end justify-between">

                                <!-- Client -->
                                <div class="flex items-center gap-3">

                                    <img
                                        src="{{ asset($testimonial['image']) }}"
                                        alt="{{ $testimonial['name'] }}"
                                        class="h-12 w-12 rounded-full object-cover border border-primary/30">

                                    <div>

                                        <h4 class="font-semibold text-heading">
                                            {{ $testimonial['name'] }}
                                        </h4>

                                        <p class="text-xs text-muted">
                                            {{ $testimonial['designation'] }}
                                        </p>

                                    </div>

                                </div>

                                <!-- Rating -->
                                <div class="flex gap-1 text-secondary">

                                    @for($i = 0; $i < 5; $i++)
                                        <i class="fa-solid fa-star text-sm"></i>
                                        @endfor

                                </div>

                            </div>

                        </div>

                    </div>

                    @endforeach

                </div>
                <div class="review-pagination mt-8 text-center"></div>
            </div>
            <!-- Next -->
            <button
                class="review-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-7 z-20 h-12 w-12 rounded-full border border-border bg-card flex items-center justify-center">

                <i class="fa-solid fa-arrow-right text-text"></i>

            </button>

        </div>

    </div>

</section>