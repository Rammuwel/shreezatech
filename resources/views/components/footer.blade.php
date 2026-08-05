<footer class="w-full border-t border-border bg-background py-12 text-muted">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

    <div class="grid grid-cols-2 gap-8 md:grid-cols-2 lg:grid-cols-6">
      <div class="col-span-2 lg:col-span-2">
        <a href="{{ route('home') }}" wire:navigate class="flex items-center gap-2">
          <img src="{{ asset('logo.webp') }}" class="w-8 sm:w-10" alt="Shreeza">
          <div>
            <h2 class="text-lg sm:text-2xl font-bold text-heading">Shreeza</h2>
            <p class="text-[10px] sm:text-xs text-muted">Tech Consulting & Software Solutions</p>
          </div>
        </a>
        <p class="mt-4 max-w-xs sm:max-w-sm text-sm leading-relaxed text-muted">
          We help businesses innovate, automate, and scale with cutting-edge technology and modern engineering practices.
        </p>
        <div class="mt-6 flex items-center gap-3">
          <a href="#" class="flex h-8 w-8 items-center justify-center rounded-full bg-card text-muted hover:text-heading hover:border-primary transition-colors border border-border">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/></svg>
          </a>
          <a href="#" class="flex h-8 w-8 items-center justify-center rounded-full bg-card text-muted hover:text-heading hover:border-primary transition-colors border border-border">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
          </a>
          <a href="#" class="flex h-8 w-8 items-center justify-center rounded-full bg-card text-muted hover:text-heading hover:border-primary transition-colors border border-border">
            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
          </a>
        </div>
      </div>

      <div>
        <h3 class="text-xs font-semibold text-heading tracking-wider uppercase">Services</h3>
        <ul class="mt-4 space-y-2 text-sm">
          <li><a href="/services/web-development" wire:navigate class="hover:text-heading transition-colors">Web Development</a></li>
          <li><a href="/services/mobile-app-development" wire:navigate class="hover:text-heading transition-colors">Mobile Apps</a></li>
          <li><a href="/services/cloud-solutions" wire:navigate class="hover:text-heading transition-colors">Cloud Solutions</a></li>
          <li><a href="/services/ai-automation" wire:navigate class="hover:text-heading transition-colors">AI & Automation</a></li>
          <li><a href="/services/ui-ux-design" wire:navigate class="hover:text-heading transition-colors">UI/UX Design</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-xs font-semibold text-heading tracking-wider uppercase">Solutions</h3>
        <ul class="mt-4 space-y-2 text-sm">
          <li><a href="/solutions/healthcare" wire:navigate class="hover:text-heading transition-colors">Healthcare</a></li>
          <li><a href="/solutions/finance" wire:navigate class="hover:text-heading transition-colors">Finance</a></li>
          <li><a href="/solutions/education" wire:navigate class="hover:text-heading transition-colors">Education</a></li>
          <li><a href="/solutions/real-estate" wire:navigate class="hover:text-heading transition-colors">Real Estate</a></li>
          <li><a href="/solutions/manufacturing" wire:navigate class="hover:text-heading transition-colors">Manufacturing</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-xs font-semibold text-heading tracking-wider uppercase">Company</h3>
        <ul class="mt-4 space-y-2 text-sm">
          <li><a href="/about" wire:navigate class="hover:text-heading transition-colors">About Us</a></li>
          <li><a href="/careers" wire:navigate class="hover:text-heading transition-colors">Careers</a></li>
          <li><a href="/blog" wire:navigate class="hover:text-heading transition-colors">Blog</a></li>
          <li><a href="/portfolio" wire:navigate class="hover:text-heading transition-colors">Case Studies</a></li>
          <li><a href="/contact" wire:navigate class="hover:text-heading transition-colors">Contact</a></li>
        </ul>
      </div>

      <div>
        <h3 class="text-xs font-semibold text-heading tracking-wider uppercase">Resources</h3>
        <ul class="mt-4 space-y-2 text-sm">
          <li><a href="#" class="hover:text-heading transition-colors">Documentation</a></li>
          <li><a href="#" class="hover:text-heading transition-colors">Guides</a></li>
          <li><a href="#" class="hover:text-heading transition-colors">FAQ</a></li>
          <li><a href="#" class="hover:text-heading transition-colors">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-heading transition-colors">Terms of Service</a></li>
        </ul>
      </div>
    </div>

    <div class="mt-12 flex flex-col items-center justify-between gap-6 border-t border-border pt-8 lg:flex-row">
      <div class="w-full max-w-md">
        <h3 class="text-xs font-semibold text-heading uppercase tracking-wider">Newsletter</h3>
        <p class="mt-1 text-sm text-muted">Stay updated with our latest news and insights.</p>

        <form
          x-data="{ email: '', message: '', success: false, loading: false }"
          @submit.prevent="
            loading = true; message = '';
            fetch('{{ route('newsletter.subscribe') }}', {
              method: 'POST',
              headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}', 'Accept': 'application/json' },
              body: JSON.stringify({ email })
            }).then(async r => {
              const data = await r.json();
              success = r.ok;
              message = data.message || (r.ok ? 'Subscribed successfully!' : 'Something went wrong. Please try again.');
              if (r.ok) email = '';
            }).catch(() => { success = false; message = 'Network error. Please try again.'; })
            .finally(() => { loading = false; })
          "
          class="mt-3">
          <div class="relative flex items-center">
            <input type="email" x-model="email" placeholder="Enter your email" required
              class="w-full rounded-lg border border-border bg-card py-2.5 pl-4 pr-14 text-sm text-heading placeholder-muted focus:border-primary focus:outline-none transition-colors">
            <button type="submit" :disabled="loading"
              class="absolute right-1 top-1 bottom-1 flex items-center justify-center rounded-md bg-primary px-3.5 hover:bg-primary-hover active:scale-95 transition-all text-white disabled:opacity-60 disabled:cursor-not-allowed">
              <span x-show="!loading">
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/></svg>
              </span>
              <svg x-show="loading" x-cloak class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path></svg>
            </button>
          </div>
          <p x-show="message" x-cloak class="mt-2 text-xs" :class="success ? 'text-success' : 'text-danger'" x-text="message"></p>
        </form>
      </div>

      <p class="text-xs text-muted">&copy; {{ date('Y') }} Shreeza Tech. All rights reserved.</p>

      <button
        x-data
        @click="window.scrollTo({top: 0, behavior: 'smooth'})"
        class="flex h-9 w-9 items-center justify-center rounded-full bg-card border border-border text-muted hover:text-heading hover:border-primary transition-all group">
        <svg class="w-4 h-4 group-hover:-translate-y-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18"/></svg>
      </button>
    </div>
  </div>
</footer>
