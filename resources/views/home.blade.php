@extends('layouts.app')

@section('title', 'Home - ' . ($settings['company_name'] ?? 'Habtom Abadi Import Export'))

@push('head')
<link rel="preload" as="image" href="{{ asset('images/company/coffee-drying.jpg') }}">
@endpush

@section('content')
<body class="bg-white text-gray-900 grain" x-data="{ mobileOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

  <!-- HERO -->
  @php
    $heroSlides = [
      [
        'src' => asset('images/company/coffee-drying.jpg'),
        'alt' => 'Ethiopian coffee cherries drying for export',
      ],
      [
        'src' => asset('images/company/coffee-cherries.jpg'),
        'alt' => 'Fresh Ethiopian coffee cherries',
      ],
      [
        'src' => asset('images/company/coffee-export.jpg'),
        'alt' => 'Ethiopian highland Arabica coffee for export',
      ],
      [
        'src' => asset('images/company/coffee-workers.jpg'),
        'alt' => 'Coffee processing in Ethiopia',
      ],
      [
        'src' => asset('images/company/machinery.jpg'),
        'alt' => 'Imported construction machinery',
      ],
      [
        'src' => asset('images/company/sesame.jpg'),
        'alt' => 'Ethiopian sesame for export',
      ],
      [
        'src' => asset('images/company/spices.jpg'),
        'alt' => 'Ethiopian spices for export',
      ],
      [
        'src' => asset('images/company/kidney-beans.jpg'),
        'alt' => 'Ethiopian pulses and beans',
      ],
    ];
  @endphp
  <style>
    .hero-slide-img {
      opacity: 0;
      z-index: 0;
      transition: opacity 1.2s ease;
      pointer-events: none;
    }
    .hero-slide-img.is-active {
      opacity: 1;
      z-index: 1;
    }
    .hero-progress-bar {
      transform-origin: left center;
      animation: heroProgress 7s linear forwards;
    }
    @keyframes heroProgress {
      from { transform: scaleX(0); }
      to { transform: scaleX(1); }
    }
  </style>
  <section
    class="relative overflow-hidden min-h-screen flex items-center text-white"
    x-data="{
      slideCount: {{ count($heroSlides) }},
      active: 0,
      timer: null,
      start() {
        this.stop();
        this.timer = setInterval(() => {
          this.active = (this.active + 1) % this.slideCount;
        }, 7000);
      },
      stop() {
        if (this.timer) {
          clearInterval(this.timer);
          this.timer = null;
        }
      },
      next() {
        this.active = (this.active + 1) % this.slideCount;
        this.start();
      },
      prev() {
        this.active = (this.active - 1 + this.slideCount) % this.slideCount;
        this.start();
      },
    }"
    x-init="start()"
  >
    <!-- Full-bleed slides -->
    <div class="absolute inset-0">
      @foreach($heroSlides as $index => $slide)
        <img
          src="{{ $slide['src'] }}"
          alt="{{ $slide['alt'] }}"
          class="hero-slide-img absolute inset-0 w-full h-full object-cover"
          :class="active === {{ $index }} ? 'is-active' : ''"
          @if($index === 0) fetchpriority="high" decoding="async" @else loading="lazy" decoding="async" @endif
        >
      @endforeach
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 pt-40 pb-44">
      <div class="max-w-3xl animate-float">
        <div class="inline-flex items-center gap-2 bg-black/30 border border-white/20 rounded-full px-4 py-2 mb-6">
          <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
          <span class="text-green-200 text-xs font-medium tracking-wider uppercase">Ethiopia's Premier Trader</span>
        </div>
        <h1 class="font-display text-5xl md:text-6xl xl:text-7xl font-black text-white leading-tight mb-6 drop-shadow-[0_2px_8px_rgba(0,0,0,0.65)]">
          Ethiopia’s agriculture exporter<br />and national machinery importer.
        </h1>
        <p class="text-green-50 text-lg leading-relaxed mb-10 max-w-lg drop-shadow-[0_2px_6px_rgba(0,0,0,0.7)]">
          Since 2000, Habtom Abadi Import and Export has linked Ethiopian coffee, oilseeds, pulses, and spices with global markets while bringing in construction, farming, and transport equipment for national growth.
        </p>
        <div class="flex flex-wrap gap-4">
          <a href="{{ route('products') }}" class="bg-white text-primary font-bold px-8 py-4 rounded-full hover:bg-green-50 transition-colors shadow-xl">
            Explore Our Exports
          </a>
          <a href="{{ route('contact') }}" class="border-2 border-white/40 text-white font-semibold px-8 py-4 rounded-full hover:bg-white/10 transition-colors">
            Speak to Our Team
          </a>
        </div>
      </div>
    </div>

    <!-- Arrows -->
    <div class="absolute right-5 md:right-10 bottom-40 z-20 flex items-center gap-3">
      <button
        type="button"
        @click="prev()"
        class="w-12 h-12 rounded-full border border-white/40 text-white hover:bg-white hover:text-primary transition-colors flex items-center justify-center"
        aria-label="Previous slide"
      >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
        </svg>
      </button>
      <button
        type="button"
        @click="next()"
        class="w-12 h-12 rounded-full border border-white/40 text-white hover:bg-white hover:text-primary transition-colors flex items-center justify-center"
        aria-label="Next slide"
      >
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </button>
    </div>

    <!-- Progress -->
    <div class="absolute left-0 right-0 bottom-[148px] md:bottom-[92px] z-20 h-[2px] bg-white/20">
      <div
        class="h-full bg-white hero-progress-bar"
        :key="'progress-' + active"
        x-init="$watch('active', () => { $el.style.animation = 'none'; $el.offsetHeight; $el.style.animation = ''; })"
      ></div>
    </div>

    <!-- Stats bar -->
    <div class="absolute bottom-0 left-0 right-0 z-20">
      <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-white/10 rounded-t-3xl overflow-hidden">
          <div class="stat-card p-6 text-center text-white">
            <div class="text-3xl font-black mb-2">2000</div>
            <div class="text-green-300 text-sm mt-1">Founded in Addis Ababa</div>
          </div>
          <div class="stat-card p-6 text-center text-white">
            <div class="text-3xl font-black mb-2">15+</div>
            <div class="text-green-300 text-sm mt-1">Countries Served</div>
          </div>
          <div class="stat-card p-6 text-center text-white">
            <div class="text-3xl font-black mb-2">8+</div>
            <div class="text-green-300 text-sm mt-1">Export Product Lines</div>
          </div>
          <div class="stat-card p-6 text-center text-white">
            <div class="text-3xl font-black mb-2">20</div>
            <div class="text-green-300 text-sm mt-1">Fuel Trucks in Transport Fleet</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <div class="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-2 mb-4">
          <span class="w-2 h-2 bg-primary rounded-full"></span>
          <span class="text-primary text-xs font-medium tracking-wider uppercase">Our Services</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-6">What We Do</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Comprehensive import-export solutions tailored to your business needs</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($services->take(6) as $service)
        <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:border-primary/20 hover:shadow-xl transition-all duration-300 scroll-reveal">
          <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">{{ $service->name }}</h3>
          <p class="text-gray-600 leading-relaxed">{{ Str::limit($service->description, 120) }}</p>
          <a href="{{ route('services.show', $service->slug) }}" class="inline-flex items-center text-primary font-semibold mt-6 group-hover:text-primary-dark transition-colors">
            Learn more <span class="ml-2 group-hover:translate-x-1 transition-transform">-></span>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <div class="inline-flex items-center gap-2 bg-primary/10 rounded-full px-4 py-2 mb-4">
          <span class="w-2 h-2 bg-primary rounded-full"></span>
          <span class="text-primary text-xs font-medium tracking-wider uppercase">Our Products</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-6">Premium Quality Products</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Sourced directly from Ethiopia's finest producers</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        @php
          $productPhotos = [
            asset('images/company/coffee-export.jpg'),
            asset('images/company/sesame.jpg'),
            asset('images/company/kidney-beans.jpg'),
            asset('images/company/spices.jpg'),
            asset('images/company/chickpeas.jpg'),
            asset('images/company/ginger.jpg'),
            asset('images/company/turmeric.jpg'),
            asset('images/company/soybeans.jpg'),
          ];
        @endphp
        @foreach($products->take(8) as $product)
        <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 scroll-reveal">
          <div class="aspect-square overflow-hidden">
            <img src="{{ ($product->images && count($product->images) > 0) ? $product->images[0]['url'] : $productPhotos[$loop->index % count($productPhotos)] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $product->name }}" loading="lazy" decoding="async"/>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 product-overlay">
            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
              <h3 class="font-bold text-lg mb-2">{{ $product->name }}</h3>
              <p class="text-sm opacity-90">{{ $product->origin_country }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      <div class="text-center mt-12">
        <a href="{{ route('products') }}" class="bg-primary hover:bg-primary-dark text-white font-bold px-8 py-4 rounded-full transition-colors shadow-xl">
          View All Products
        </a>
      </div>
    </div>
  </section>

  <!-- PARTNERS -->
  @if($partners->isNotEmpty())
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary text-xs font-medium tracking-wider uppercase">Trusted Partners</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-6">Our Global Partners</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Working with leading companies across the globe to deliver exceptional trading solutions</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        @foreach($partners as $partner)
        <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 group scroll-reveal">
          <div class="flex justify-center mb-4">
            @if($partner->logo)
              <img src="{{ asset('storage/' . $partner->logo) }}"
                   alt="{{ $partner->name }}"
                   class="w-24 h-24 object-contain group-hover:scale-105 transition-transform duration-300">
            @else
              <div class="w-24 h-24 bg-gradient-to-br from-gray-200 to-gray-300 rounded-lg flex items-center justify-center">
                <span class="text-lg text-gray-600 font-bold text-center">{{ $partner->name }}</span>
              </div>
            @endif
          </div>
          <div class="text-center">
            <h4 class="font-bold text-lg mb-2">{{ $partner->name }}</h4>
            <p class="text-sm text-gray-600 mb-3">{{ $partner->country }}</p>
            <span class="inline-block px-3 py-1 bg-primary text-white rounded-full text-sm font-medium">
              {{ ucfirst($partner->partnership_type) }}
            </span>
          </div>
          @if($partner->website_url)
          <div class="mt-4 text-center">
            <a href="{{ $partner->website_url }}"
               target="_blank"
               class="text-primary hover:text-gold transition-colors text-sm font-medium">
              Visit Website &rarr;
            </a>
          </div>
          @endif
        </div>
        @endforeach
      </div>

      <div class="text-center mt-12">
        <a href="{{ route('certifications') }}" class="bg-primary hover:bg-primary-dark text-white font-bold px-8 py-4 rounded-full transition-colors shadow-xl">
          View Certifications
        </a>
      </div>
    </div>
  </section>
  @endif

  <!-- CTA -->
  <section class="py-24 bg-primary">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <div class="max-w-4xl mx-auto">
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">Ready to Grow Your Business?</h2>
        <p class="text-xl text-green-100 mb-10">Partner with us for reliable import-export solutions that connect you to global markets</p>
        <div class="flex flex-wrap gap-4 justify-center">
          <a href="{{ route('contact') }}" class="bg-white text-primary font-bold px-8 py-4 rounded-full hover:bg-green-50 transition-colors shadow-xl">
            Get Started
          </a>
          <a href="{{ route('rfq.create') }}" class="border-2 border-white/40 text-white font-semibold px-8 py-4 rounded-full hover:bg-white/10 transition-colors">
            Request Quote
          </a>
        </div>
      </div>
    </div>
  </section>

</body>
</html>
@endsection
