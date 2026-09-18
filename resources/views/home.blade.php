@extends('layouts.app')

@section('title', 'Home - ' . ($settings['company_name'] ?? 'Habtom Abadi Import Export'))

@push('head')
<link rel="preload" as="image" href="{{ asset('images/hero/coffee-drying.jpg') }}">
@endpush

@section('content')
<body class="bg-white text-gray-900 grain" x-data="{ mobileOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

  <!-- HERO -->
  @php
    $heroSlides = [
      [
        'src' => asset('images/hero/coffee-drying.jpg'),
        'alt' => 'Ethiopian coffee cherries drying for export',
      ],
      [
        'src' => asset('images/hero/coffee-cherries.jpg'),
        'alt' => 'Fresh Ethiopian coffee cherries',
      ],
      [
        'src' => asset('images/hero/coffee-export.jpg'),
        'alt' => 'Ethiopian highland Arabica coffee for export',
      ],
      [
        'src' => asset('images/hero/coffee-workers.jpg'),
        'alt' => 'Coffee processing in Ethiopia',
      ],
      [
        'src' => asset('tractor.avif'),
        'alt' => 'Imported construction and farm machinery',
      ],
      [
        'src' => asset('images/hero/sesame.jpg'),
        'alt' => 'Ethiopian sesame for export',
      ],
      [
        'src' => asset('images/hero/spices.jpg'),
        'alt' => 'Ethiopian spices for export',
      ],
      [
        'src' => asset('images/hero/pulses.jpg'),
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
          class="hero-slide-img absolute inset-0 w-full h-full object-cover object-center"
          :class="active === {{ $index }} ? 'is-active' : ''"
          @if($index === 0) fetchpriority="high" decoding="async" @else loading="lazy" decoding="async" @endif
        >
      @endforeach
    </div>

    <div class="relative z-10 w-full max-w-7xl mx-auto px-6 pt-40 pb-44">
      <div class="max-w-3xl animate-float">
        <div class="inline-flex items-center gap-2 bg-black/30 border border-white/20 rounded-full px-4 py-2 mb-6">
          <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse"></span>
          <span class="text-green-200 text-xs font-medium tracking-wider uppercase">Since 2000</span>
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
            <div class="text-3xl font-black mb-2">24+</div>
            <div class="text-green-300 text-sm mt-1">Years Experience</div>
          </div>
          <div class="stat-card p-6 text-center text-white">
            <div class="text-3xl font-black mb-2">20+</div>
            <div class="text-green-300 text-sm mt-1">Fuel Trucks</div>
          </div>
          <div class="stat-card p-6 text-center text-white">
            <div class="text-3xl font-black mb-2">15+</div>
            <div class="text-green-300 text-sm mt-1">Countries Served</div>
          </div>
          <div class="stat-card p-6 text-center text-white">
            <div class="text-3xl font-black mb-2">2008</div>
            <div class="text-green-300 text-sm mt-1">Founded</div>
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
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Exporting Ethiopia's finest agricultural products while importing cutting-edge machinery and technology</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
        <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:border-primary/20 hover:shadow-xl transition-all duration-300 scroll-reveal">
          <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Export Division</h3>
          <p class="text-gray-600 leading-relaxed mb-4">Premium Ethiopian agricultural products for global markets</p>
          <ul class="text-gray-600 space-y-2 text-sm">
            <li> Premium Arabica coffee beans</li>
            <li> Sesame, Niger seeds, soybeans, peanuts, linseed</li>
            <li> Chickpeas, red kidney beans, white pea beans, faba beans</li>
            <li> Spices and other high-value commodities</li>
          </ul>
          <a href="{{ route('products') }}" class="inline-flex items-center text-primary font-semibold mt-6 group-hover:text-primary-dark transition-colors">
            View Products <span class="ml-2 group-hover:translate-x-1 transition-transform">-></span>
          </a>
        </div>
        
        <div class="group bg-white rounded-2xl p-8 border border-gray-100 hover:border-primary/20 hover:shadow-xl transition-all duration-300 scroll-reveal">
          <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-primary/20 transition-colors">
            <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Import Division</h3>
          <p class="text-gray-600 leading-relaxed mb-4">Essential technology and machinery for national development</p>
          <ul class="text-gray-600 space-y-2 text-sm">
            <li> Electric, hybrid, and gas-powered vehicles</li>
            <li> Industrial construction machinery</li>
            <li> Modern tractors, harvesters and farm inputs</li>
            <li> Custom sourcing for commercial needs</li>
          </ul>
          <a href="{{ route('contact') }}" class="inline-flex items-center text-primary font-semibold mt-6 group-hover:text-primary-dark transition-colors">
            Request Quote <span class="ml-2 group-hover:translate-x-1 transition-transform">-></span>
          </a>
        </div>
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
            asset('images/company/kidney-beans.png'),
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

  <!-- TRANSPORTATION -->
  <section class="py-24 bg-primary">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <div class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 mb-4">
          <span class="w-2 h-2 bg-green-400 rounded-full"></span>
          <span class="text-white text-xs font-medium tracking-wider uppercase">National Transport</span>
        </div>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">Reliable Transportation Services</h2>
        <p class="text-xl text-green-100 max-w-3xl mx-auto">Delivering cargo and liquid transport services nationwide with our expanding fleet</p>
      </div>
      
      <div class="grid md:grid-cols-2 gap-8 items-center">
        <div class="text-white scroll-reveal">
          <h3 class="font-display text-3xl font-black mb-6">Our Fleet Growth</h3>
          <div class="space-y-6">
            <div class="bg-white/10 rounded-2xl p-6 backdrop-blur-sm">
              <div class="flex items-center gap-4 mb-3">
                <div class="w-12 h-12 bg-green-400 rounded-full flex items-center justify-center">
                  <span class="text-white font-bold">2021</span>
                </div>
                <h4 class="font-bold text-xl">Transportation Launch</h4>
              </div>
              <p class="text-green-100">Started with 2 cargo trucks, beginning our national transport services</p>
            </div>
            
            <div class="bg-white/10 rounded-2xl p-6 backdrop-blur-sm">
              <div class="flex items-center gap-4 mb-3">
                <div class="w-12 h-12 bg-green-400 rounded-full flex items-center justify-center">
                  <span class="text-white font-bold">2023</span>
                </div>
                <h4 class="font-bold text-xl">Major Expansion</h4>
              </div>
              <p class="text-green-100">Expanded to 20 fuel trucks, significantly increasing our transport capacity</p>
            </div>
          </div>
          
          <div class="mt-8 flex flex-wrap gap-4">
            <div class="bg-white/20 rounded-2xl px-6 py-3 text-center">
              <div class="text-3xl font-black text-white">20+</div>
              <div class="text-green-200 text-sm">Fuel Trucks</div>
            </div>
            <div class="bg-white/20 rounded-2xl px-6 py-3 text-center">
              <div class="text-3xl font-black text-white">2</div>
              <div class="text-green-200 text-sm">Cargo Trucks</div>
            </div>
            <div class="bg-white/20 rounded-2xl px-6 py-3 text-center">
              <div class="text-3xl font-black text-white">Nation</div>
              <div class="text-green-200 text-sm">Wide Coverage</div>
            </div>
          </div>
        </div>
        
        <div class="relative scroll-reveal">
          <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
            <h4 class="font-bold text-2xl text-white mb-4">Transport Services</h4>
            <ul class="space-y-3 text-green-100">
              <li class="flex items-center gap-3">
                <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                All types of cargo transportation
              </li>
              <li class="flex items-center gap-3">
                <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                Liquid fuel transport services
              </li>
              <li class="flex items-center gap-3">
                <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                Nationwide delivery coverage
              </li>
              <li class="flex items-center gap-3">
                <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                Experienced drivers and logistics team
              </li>
              <li class="flex items-center gap-3">
                <span class="w-2 h-2 bg-green-400 rounded-full"></span>
                Reliable and timely service
              </li>
            </ul>
          </div>
        </div>
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
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mb-6">Partner with Ethiopia's Trading Excellence</h2>
        <p class="text-xl text-green-100 mb-10">Join us in exporting Ethiopia's finest agricultural products while importing the technology that drives national development</p>
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
