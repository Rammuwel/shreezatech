@php
$navItems = [
[
'title' => 'Home',
'route' => 'home',
'dropdown' => false,
],

[
'title' => 'Services',
'route' => 'services',
'dropdown' => true,

'items' => [
[
'title' => 'Web Development',
'route' => 'web-development',
'description' => 'Modern & Reactive web devlopment',
'icon' => 'fa-desktop',

],
[
'title' => 'Mobile Development',
'route' => 'mobile-app-development',
'description' => 'Android & Flutter Apps',
'icon' => 'fa-mobile-screen-button',
],
[
'title' => 'UI/UX Design',
'route' => 'ui-ux-design',
'description' => 'Modern User Experience',
'icon' => 'fa-object-group',
],
[
'title' => 'Cloud Solutions',
'route' => 'cloud-solutions',
'description' => 'AWS & Azure',
'icon' => 'fa-cloud',
],
[
'title' => 'Software Development Services',
'route' => 'custom-software-development',
'description' => 'Tailored Software Solutions for Your Business',
'icon' => 'fa-solid fa-laptop-code',
],
[
'title' => 'AI Solutions',
'route' => 'ai-automation',
'description' => 'OpenAI & Automation',
'icon' => 'fa-robot',
],
[
'title' => 'IoT Development',
'route' => 'iot-development',
'description' => 'Connecting Devices. Empowering Businesses.',
'icon' => 'fa-solid fa-microchip',
],
]
],

[
'title' => 'Technologies',
'route' => 'technologies',
'dropdown' => true,

'promo' => [
'badge' => '🚀 Premium Software Partner',
'title' => 'Build the Future',
'description' => 'We build modern software, AI solutions and scalable cloud applications.',
'button' => 'Get Free Consultation',
'button_route' => 'contact',
'image' => 'logo.png',
],

'features' => [
'Enterprise-grade Solutions',
'Agile Development',
'Modern Tech Stack',
'Dedicated Support',
'99.9% Uptime',
],


'items' => [

[
'title' => 'Frontend',
'route' => '',
'description' => 'React, Vue, Next.js, Tailwind CSS',
'icon' => 'fa-solid fa-laptop',
],

[
'title' => 'Backend',
'route' => '',
'description' => 'Laravel, Node.js, PHP, Java',
'icon' => 'fa-solid fa-code',
],

[
'title' => 'Mobile',
'route' => '',
'description' => 'Flutter, Android, Kotlin, Java',
'icon' => 'fa-solid fa-mobile-screen-button',
],

[
'title' => 'Cloud & DevOps',
'route' => '',
'description' => 'AWS, Azure, Docker, CI/CD',
'icon' => 'fa-cloud',
],

[
'title' => 'Database',
'route' => '',
'description' => 'MySQL, PostgreSQL, MongoDB',
'icon' => 'fa-solid fa-database',
],

[
'title' => 'AI & Automation',
'route' => '',
'description' => 'OpenAI, Python, TensorFlow',
'icon' => 'fa-robot',
],

[
'title' => 'UI/UX Design',
'route' => '',
'description' => 'Figma, Adobe XD, Prototyping',
'icon' => 'fa-solid fa-palette',
],

[
'title' => 'Software Devlopment',
'route' => '',
'description' => 'C++, Java, Python',
'icon' => 'fa-solid fa-laptop-code',
],

]
],

[
'title' => 'Solutions',
'route' => 'solutions',
'dropdown' => true,

'items' => [
[
'title' => 'Healthcare',
'route' => 'healthcare',
'description' => 'Healthcare Software Solutions',
'icon' => 'fa-solid fa-heart-pulse',
],
[
'title' => 'Finance',
'route' => 'finance',
'description' => 'Financial Software Solutions ',
'icon' => 'fa-solid fa-building-columns',
],
[
'title' => 'Education',
'route' => 'education',
'description' => 'Education Software Solutions',
'icon' => 'fa-solid fa-graduation-cap',
],
[
'title' => 'Real Estate',
'route' => 'real-estate',
'description' => 'Real Estate Software Solutions',
'icon' => 'fa-solid fa-building',
],
[
'title' => 'Manufacturing',
'route' => 'manufacturing',
'description' => 'Manufacturing Software Solutions',
'icon' => 'fa-solid fa-industry',
],
[
'title' => 'Retail',
'route' => 'real-estate-management-system',
'description' => 'Retail Software Solutions',
'icon' => 'fa-solid fa-cart-shopping',
],
[
'title' => 'Logistics & Transportation',
'route' => 'logistics-transportation',
'description' => 'Logistics & Transportation Solutions',
'icon' => 'fa-solid fa-truck-fast',
],
[
'title' => 'Hospitality & Hotels',
'route' => 'hospitality-hotels',
'description' => 'Hospitality Software Solutions',
'icon' => 'fa-solid fa-hotel',
],
[
'title' => 'Travel & Tourism',
'route' => 'travel-tourism',
'description' => 'Travel & Tourism Software Solutions',
'icon' => 'fa-solid fa-plane-departure',
],
]
],

[
'title' => 'Portfolio',
'route' => 'portfolio',
'dropdown' => false,
],

[
'title' => 'About',
'route' => 'about',
'dropdown' => false,
],


[
'title' => 'Contact',
'route' => 'contact',
'dropdown' => false,
],
];
@endphp

<nav
    x-data="{ open: false }"
    class="fixed top-0 left-0 w-full z-50 border-b border-border bg-background backdrop-blur-xl font-sans">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">

        <div class="flex items-center justify-between h-20">

            <!-- Logo -->
            <a href="{{ route('home') }}" wire:navigate class="flex items-center font-sans">

                <img src="{{ asset('logo.png') }}" class="w-15 " alt="Shreeza">

                <div class="ml-0.5">
                    <h2 class=" text-3xl font-bold  text-heading">
                        Shree<b class="text-secondary">z</b>a
                    </h2>

                    <p class="text-xs text-muted">
                        Tech. Consulting & Software Solutions
                    </p>
                </div>

            </a>

            <!-- Desktop Menu -->
            <div class="hidden  m-auto lg:flex items-center gap-10">

                @foreach($navItems as $item)



                @if($item['dropdown'])

                <div
                    x-data="{ open: false }"
                    @mouseenter="open = true"
                    @mouseleave="open = false"
                    class="">

                    <a
                        wire:navigate
                        href="{{ route($item['route']) }}"
                        class="relative flex items-center group text-sm font-medium transition-all duration-300
                        {{ request()->routeIs($item['route']) ? 'text-heading' : 'text-text hover:text-heading' }}">
                        {{ $item['title'] }}

                        <svg
                            class="w-4 h-4 transition duration-300"
                            :class="{ 'rotate-180': open }"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>

                    <!-- Dropdown -->

                    <div
                        x-show="open"
                        x-cloak
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 translate-y-4"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-200"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-4"

                        class="absolute left-1/2 top-full z-50 mt-3 w-[98%]  -translate-x-1/2
           rounded-3xl border border-border bg-card shadow-2xl overflow-hidden ">

                        <div class="grid grid-cols-12">

                            <!-- LEFT -->
                            <div class="col-span-3 bg-linear-to-br from-primary/10 via-background to-secondary/10 p-4">

                                <img src="{{ asset('logo.png') }}" class="w-20 mb-3" alt="">

                                <span class="rounded-full border-border  bg-secondary/10 px-3 py-1 text-xs font-semibold text-secondary">
                                    BUILD THE FUTURE
                                </span>

                                <h3 class="mt-1 text-2xl font-bold text-heading">
                                    Technology that grows your business.
                                </h3>

                                <p class="mt-1 text-sm leading-7 text-muted">
                                    Custom software, AI solutions,
                                    cloud infrastructure and enterprise applications.
                                </p>

                                <a
                                    href="{{ route('contact') }}"
                                    wire:navigate
                                    class="mt-4 inline-flex rounded-full bg-primary px-6 py-3 font-semibold text-white hover:bg-primary-hover">
                                    Get Free Quote
                                </a>

                            </div>

                            <!-- CENTER -->
                            <div class="col-span-6 p-8">

                                <h4 class="mb-2 text-lg font-semibold text-heading">
                                    {{ $item['title'] }}
                                </h4>

                                <div class="grid grid-cols-2 gap-4">
                                 
                                    @foreach($item['items'] as $subItem)
                                      
                                    <a
                                        wire:navigate
                                        href="{{url($item['route'],  $subItem['route'])  }}"
                                        class="group rounded-2xl border border-transparent p-2 hover:border-primary/20 hover:bg-background transition">

                                        <div class="flex gap-4">

                                            <div
                                                class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 text-primary">

                                                <i class="fa {{ $subItem['icon'] }}"></i>

                                            </div>

                                            <div>

                                                <h5
                                                    class="font-semibold text-heading group-hover:text-primary">

                                                    {{ $subItem['title'] }}

                                                </h5>

                                                <p class="mt-1 text-sm text-muted">

                                                    {{ $subItem['description'] }}

                                                </p>

                                            </div>

                                        </div>

                                    </a>

                                    @endforeach

                                </div>

                            </div>

                            <!-- RIGHT -->
                            <div class="col-span-3 border-l border-border bg-background p-8">

                                <h4 class="text-lg font-semibold text-heading">
                                    Why Shreeza?
                                </h4>

                                <div class="mt-6 space-y-4">

                                    <div class="flex gap-3 text-muted">
                                        <span>⚡</span>
                                        <span>Fast Delivery</span>
                                    </div>

                                    <div class="flex gap-3 text-muted">
                                        <span>🛡️</span>
                                        <span>Secure Solutions</span>
                                    </div>

                                    <div class="flex gap-3 text-muted">
                                        <span>🤝</span>
                                        <span>Dedicated Support</span>
                                    </div>

                                    <div class="flex gap-3 text-muted">
                                        <span>🚀</span>
                                        <span>Modern Technologies</span>
                                    </div>

                                </div>

                                <div class="mt-8 rounded-2xl bg-primary/10 p-5">

                                    <h5 class="font-semibold text-heading">
                                        Ready to start?
                                    </h5>

                                    <p class="mt-2 text-sm text-muted">
                                        Let's discuss your next project.
                                    </p>

                                    <a
                                        href="{{ route('contact') }}"
                                        wire:navigate
                                        class="mt-5 inline-flex rounded-full bg-secondary px-5 py-3 font-semibold text-white hover:bg-secondary-hover">

                                        Book Meeting

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                @else

                <a
                    wire:navigate
                    href="{{ route($item['route']) }}"
                    class="relative group text-sm font-medium transition-all duration-300
            {{ request()->routeIs($item['route']) ? 'text-heading' : 'text-text hover:text-heading' }}">

                    {{ $item['title'] }}

                    <span
                        class="absolute left-1/2 -translate-x-1/2 -bottom-2 h-2 w-2 rounded-full bg-secondary
                transition-all duration-300
                {{ request()->routeIs($item['route']) ? 'opacity-100 scale-100' : 'opacity-0 scale-0 ' }}">
                    </span>

                </a>

                @endif





                @endforeach



            </div>

            <!-- <div class="hidden lg:flex items-center gap-8">

                <a wire:navigate href="{{ route('home') }}" class="text-text hover:text-heading transition">
                    Home
                </a>



                <a wire:navigate href="#" class="text-text hover:text-heading transition">
                    Services
                </a>

                <a wire:navigate href="#" class="text-text hover:text-heading transition">
                    Solutions
                </a>

                <a wire:navigate href="#" class="text-text hover:text-heading transition">
                    Portfolio
                </a>

                <a wire:navigate href="#" class="text-text hover:text-heading transition">
                    About
                </a>

                <a wire:navigate href="#" class="text-text hover:text-heading transition">
                    Blog
                </a>

                <a wire:navigate href="#" class="text-text hover:text-heading transition">
                    Contact
                </a>

            </div> -->

            <!-- Right -->

            <div class="hidden lg:flex items-center gap-4">

                @guest

                <!-- <a wire:navigate href="{{ route('login') }}"
                       class="text-gray-300 hover:text-white">
                        Login
                    </a> -->

                <a
                    wire:navigate
                    href="{{ route('contact') }}"
                    class="rounded-full bg-secondary px-6 py-3 font-semibold text-white  hover:bg-secondary-hover transition-all">
                    Get Started
                </a>

                @else

                <a
                    wire:navigate
                    href="{{ route('dashboard') }}"
                    class="rounded-full bg-blue-600 px-6 py-3 font-semibold text-white">
                    Dashboard
                </a>

                @endguest

            </div>

            <!-- Mobile Button -->

            <button
                @click="open=!open"
                class="lg:hidden text-white">

                ☰

            </button>

        </div>

    </div>

    <!-- Mobile Menu -->

    <div
        x-show="open"
        x-transition
        class="lg:hidden border-t border-white/10 bg-slate-950">

        <div class="flex flex-col p-6 space-y-4">

            <a wire:navigate href="{{ route('home') }}">Home</a>

            <a href="#">Services</a>

            <a href="#">Portfolio</a>

            <a href="#">About</a>

            <a href="#">Contact</a>

            @guest

            <a wire:navigate href="{{ route('login') }}">Login</a>

            <a wire:navigate href="{{ route('register') }}">
                Register
            </a>

            @else

            <a wire:navigate href="{{ route('dashboard') }}">
                Dashboard
            </a>

            @endguest

        </div>

    </div>

</nav>