import axios from 'axios';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const applyTheme = () => {
  const dark = localStorage.getItem('theme') !== 'light';
  document.documentElement.classList.toggle('dark', dark);
};

document.addEventListener('alpine:init', () => {
  Alpine.data('theme', () => ({
    dark: localStorage.getItem('theme') !== 'light',
    init() {
      this.$watch('dark', val => {
        document.documentElement.classList.toggle('dark', val);
        localStorage.setItem('theme', val ? 'dark' : 'light');
      });
      if (this.dark) document.documentElement.classList.add('dark');
    },
    toggle() { this.dark = !this.dark; }
  }));

  Alpine.data('smoothScroll', () => ({
    init() {
      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', e => {
          e.preventDefault();
          const target = document.querySelector(anchor.getAttribute('href'));
          if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
      });
    }
  }));

  Alpine.directive('intersect', (el, { expression }, { cleanup }) => {
    const observer = new IntersectionObserver(([entry]) => {
      if (entry.isIntersecting) {
        if (expression) el.classList.add(expression);
        observer.disconnect();
      }
    }, { threshold: 0.1 });
    observer.observe(el);
    cleanup(() => observer.disconnect());
  });

  Alpine.data('counter', () => ({
    count: 0,
    suffix: '+',
    done: false,
    init() {
      this.suffix = this.$el.dataset.suffix || '+';
      const observer = new IntersectionObserver(([entry]) => {
        if (entry.isIntersecting) {
          observer.disconnect();
          this.animate();
        }
      }, { threshold: 0.3 });
      observer.observe(this.$el);
    },
    animate() {
      const target = parseInt(this.$el.dataset.count) || 0;
      const duration = 2000;
      const start = performance.now();
      const step = (now) => {
        const progress = Math.min((now - start) / duration, 1);
        this.count = Math.floor(progress * target);
        this.done = progress >= 1;
        if (!this.done) requestAnimationFrame(step);
      };
      requestAnimationFrame(step);
    }
  }));

  Alpine.data('carousel', (config = {}) => ({
    current: 0,
    items: [],
    perView: 1,
    autoplayTimer: null,
    _originalItems: [],

    init() {
      this._originalItems = config.items || [];
      this.items = [...this._originalItems];
      this.updatePerView();
      this._resizeHandler = () => this.updatePerView();
      window.addEventListener('resize', this._resizeHandler, { passive: true });
      if (config.autoplay !== false) this.startAutoplay();
    },

    padItems() {
      this.items = [...this._originalItems];
      const remainder = this.items.length % this.perView;
      if (remainder > 0) {
        const needed = this.perView - remainder;
        for (let i = 0; i < needed; i++) {
          this.items.push(this._originalItems[i % this._originalItems.length]);
        }
      }
    },

    updatePerView() {
      const w = window.innerWidth + 16;
      if (w >= 1024) this.perView = config.lg || 3;
      else if (w >= 768) this.perView = config.md || 2;
      else this.perView = config.sm || 1;
      this.padItems();
      if (this.current > this.maxIndex) this.current = this.maxIndex;
    },
    get total() { return this.items.length; },
    get maxIndex() { return Math.max(0, this.total - this.perView); },
    get groups() { return Math.ceil(this.total / this.perView); },
    get group() { return Math.floor(this.current / this.perView); },
    goToGroup(index) { this.current = Math.min(index * this.perView, this.maxIndex); this.resetAutoplay(); },
    nextGroup() { const g = this.group + 1; this.current = g >= this.groups ? 0 : g * this.perView; this.resetAutoplay(); },
    prevGroup() { const g = this.group - 1; this.current = g < 0 ? this.maxIndex : g * this.perView; this.resetAutoplay(); },
    startAutoplay() {
      this.autoplayTimer = setInterval(() => { this.nextGroup(); }, config.delay || 4000);
    },
    resetAutoplay() {
      if (config.autoplay === false) return;
      clearInterval(this.autoplayTimer);
      this.startAutoplay();
    },
    destroy() { clearInterval(this.autoplayTimer); window.removeEventListener('resize', this._resizeHandler); }
  }));

  Alpine.data('mouseParallax', () => ({
    x: 0,
    y: 0,
    targetX: 0,
    targetY: 0,

    move(e) {
      const rect = this.$el.getBoundingClientRect();
      this.targetX = ((e.clientX - rect.left) / rect.width - 0.5) * 2;
      this.targetY = ((e.clientY - rect.top) / rect.height - 0.5) * 2;
      if (!this._raf) this._raf = requestAnimationFrame(() => this.tick());
    },

    leave() {
      this.targetX = 0;
      this.targetY = 0;
      if (!this._raf) this._raf = requestAnimationFrame(() => this.tick());
    },

    tick() {
      this._raf = null;
      const dx = this.targetX - this.x;
      const dy = this.targetY - this.y;
      if (Math.abs(dx) > 0.001 || Math.abs(dy) > 0.001) {
        this.x += dx * 0.12;
        this.y += dy * 0.12;
        this._raf = requestAnimationFrame(() => this.tick());
      } else {
        this.x = this.targetX;
        this.y = this.targetY;
      }
    }
  }));

  Alpine.data('testimonials', (items = []) => ({
    current: 0,
    items: [],
    perView: 1,
    autoplayTimer: null,

    init() {
      this.items = [...items];
      this.updatePerView();
      this._resizeHandler = () => this.updatePerView();
      window.addEventListener('resize', this._resizeHandler, { passive: true });
      this.startAutoplay();
    },

    updatePerView() {
      const w = window.innerWidth + 16;
      if (w >= 1024) this.perView = 3;
      else if (w >= 768) this.perView = 2;
      else this.perView = 1;
      if (this.current > this.maxIndex) this.current = this.maxIndex;
    },

    get total() { return this.items.length; },
    get maxIndex() { return Math.max(0, this.total - this.perView); },
    get groups() { return Math.ceil(this.total / this.perView); },
    get group() { return Math.floor(this.current / this.perView); },

    goToGroup(index) { this.current = Math.min(index * this.perView, this.maxIndex); this.resetAutoplay(); },
    nextGroup() { const g = this.group + 1; this.current = g >= this.groups ? 0 : g * this.perView; this.resetAutoplay(); },
    prevGroup() { const g = this.group - 1; this.current = g < 0 ? this.maxIndex : g * this.perView; this.resetAutoplay(); },
    startAutoplay() { this.autoplayTimer = setInterval(() => { this.nextGroup(); }, 4000); },
    resetAutoplay() { clearInterval(this.autoplayTimer); this.startAutoplay(); },
    destroy() { clearInterval(this.autoplayTimer); window.removeEventListener('resize', this._resizeHandler); }
  }));
});

document.addEventListener('livewire:navigated', applyTheme);
