<section class="mt-10 pt-20 pb-16 sm:pb-20">

    <div class="max-w-7xl mx-auto px-6">

        @if (session()->has('success'))
        <div class="mb-5 rounded-xl border border-green-500/20 bg-green-500/10 p-4 text-green-400">
            {{ session('success') }}
        </div>
        @endif
        @if (session()->has('error'))
        <div class="mb-5 rounded-xl border border-red-500/20 bg-red-500/10 p-4 text-red-400">
            {{ session('error') }}
        </div>
        @endif
        <div
           
            class="grid
            lg:grid-cols-2
            gap-12
            lg:gap-20
            items-start">

            <!-- LEFT -->

            <div>

                <!-- Small Title -->

                <span
                    class="text-secondary
                    text-sm
                    font-semibold
                    tracking-[0.25em]
                    uppercase">

                    Contact Us

                </span>

                <!-- Heading -->

                <h2
                    class="mt-4
                    max-w-md
                    text-5xl
                    font-bold
                    leading-tight
                    text-heading">

                    Let's Start a Project Together

                </h2>

                <!-- Description -->

                <p
                    class="mt-6
                    max-w-md
                    leading-8
                    text-muted">

                    Have an exciting idea?

                    We'd love to hear from you.

                    Fill out the form and we'll contact
                    you within one business day.

                </p>

                <!-- CONTACT ITEMS -->

                <div class="mt-12 space-y-5">

                    <!-- Phone -->

                    <div
                        class="group
                        flex
                        items-center
                        gap-5">

                        <div
                            class="flex
                            h-14
                            w-14
                            items-center
                            justify-center
                            rounded-xl
                            border
                            border-primary/20
                            bg-primary/10">

                            <i
                                class="fa-solid fa-phone
                                text-primary
                                text-lg">
                            </i>

                        </div>

                        <div>

                            <h4
                                class="font-semibold
                                text-heading">

                                Phone

                            </h4>

                            <p
                                class="text-sm
                                text-muted">

                                +91 98765 43210

                            </p>

                        </div>

                    </div>

                    <!-- Email -->

                    <div
                        class="group
                        flex
                        items-center
                        gap-5">

                        <div
                            class="flex
                            h-14
                            w-14
                            items-center
                            justify-center
                            rounded-xl
                            border
                            border-primary/20
                            bg-primary/10">

                            <i
                                class="fa-solid fa-envelope
                                text-primary
                                text-lg">
                            </i>

                        </div>

                        <div>

                            <h4
                                class="font-semibold
                                text-heading">

                                Email

                            </h4>

                            <p
                                class="text-sm
                                text-muted">

                                contact@shreeza.in

                            </p>

                        </div>

                    </div>

                    <!-- Address -->

                    <div
                        class="group
                        flex
                        items-center
                        gap-5">

                        <div
                            class="flex
                            h-14
                            w-14
                            items-center
                            justify-center
                            rounded-xl
                            border
                            border-primary/20
                            bg-primary/10">

                            <i
                                class="fa-solid fa-location-dot
                                text-primary
                                
                                text-lg">
                            </i>

                        </div>

                        <div>

                            <h4
                                class="font-semibold
                                text-heading">

                                Address

                            </h4>

                            <p
                                class="text-sm
                                text-muted">

                                AB Road, Indore,
                                Madhya Pradesh

                            </p>

                        </div>

                    </div>

                </div>

                <!-- SOCIAL -->

                <div class="mt-14">

                    <h4
                        class="font-semibold
                        text-heading">

                        Follow Us

                    </h4>

                    <div class="mt-5 flex gap-4">

                        @foreach([
                        'facebook-f',
                        'linkedin-in',
                        'instagram',
                        'x-twitter'
                        ] as $icon)

                        <a
                            href="#"
                            class="group
                            flex
                            h-11
                            w-11
                            items-center
                            justify-center
                            rounded-full
                            border
                            border-border
                            bg-card
                            transition-all
                            duration-300
                            hover:border-primary
                            hover:bg-primary  ">


                            <i
                                class="fab fa-{{ $icon }}
                                transition
                                group-hover:text-white">
                            </i>

                        </a>

                        @endforeach

                    </div>

                </div>

            </div>

            <!-- RIGHT -->

            <div>

                <div
                    class="rounded-3xl
                    border
                    border-border
                    bg-card/80
                    backdrop-blur-xl
                    p-8
                    shadow-sm">

                    <form
                        wire:submit.prevent="submit"
                        class="space-y-5">

                        <div class="grid gap-5 sm:grid-cols-2">

                            <!-- Name -->

                            <div class="relative">
                                <input
                                    type="text"
                                    placeholder="Your Name"
                                    wire:model='name'
                                    class="h-14
                            w-full
                            text-text
                            rounded-xl
                            border
                            border-border
                            bg-background
                            px-5
                            text-sm
                            outline-none
                            transition
                            focus:border-primary">
                                @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Email -->

                            <div class="relative">
                                <input
                                    type="email"
                                    placeholder="Your Email"
                                    wire:model='email'
                                    class="h-14
                            w-full
                            rounded-xl
                            border
                             text-text
                            border-border
                            bg-background
                            px-5
                            text-sm
                            outline-none
                            transition
                            focus:border-primary">
                                @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Phone -->

                            <div class="relative">
                                <input
                                    type="text"
                                    placeholder="Phone Number"
                                    wire:model='phone'
                                    class="h-14
                            w-full
                             text-text
                            rounded-xl
                            border
                            border-border
                            bg-background
                            px-5
                            text-sm
                            outline-none
                            transition
                            focus:border-primary">
                                @error('phone')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Service -->

                            <div class="relative">

                                <select
                                    wire:model='service'
                                    class="h-14
                            w-full
                            rounded-xl
                             text-text
                            border
                            border-border
                            bg-background
                            px-5
                            text-sm
                            outline-none
                            transition
                            focus:border-primary">

                                    <option value="">Select Service</option>

                                    <option>Website Development</option>

                                    <option>Web Application</option>

                                    <option>Mobile App</option>

                                    <option>UI/UX Design</option>

                                    <option>Consulting</option>

                                </select>
                                @error('service')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                            <!-- Message -->

                            <div class="relative">
                                <textarea
                                    wire:model='message'
                                    rows="4"
                                    placeholder="Your Message"
                                    class="w-full
                            rounded-xl
                            border
                            
                            bg-background
                            px-5
                             text-text
                            py-4
                            text-sm
                            outline-none
                            transition
                            border-border  focus:border-primary
                            "></textarea>
                                @error('message')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Button -->

                            <button
                            wire:loading.attr="disabled"
                            wire:target="submit"
                            class="mt-2
                            flex
                            h-14
                            w-full
                            items-center
                            justify-center
                            rounded-xl
                            bg-primary
                            font-semibold
                            text-white
                            transition-all
                            duration-300 
                            cursor-pointer
                            hover:-translate-y-0.5
                            hover:bg-blue-500">

                            <span wire:loading.remove>
                                Send Message
                            </span>

                            <span wire:loading>
                                Sending...
                            </span>

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>