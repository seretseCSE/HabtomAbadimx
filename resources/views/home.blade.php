@extends('layouts.app')

@section('title', 'Home - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<main id="main-content" class="bg-white text-gray-900">

  <!-- HERO -->
  <section class="hero-bg min-h-screen flex items-center relative overflow-hidden" aria-labelledby="hero-heading">
    <!-- Background image overlay -->
    <div class="absolute inset-0 opacity-20">
      <img src="{{ asset('tractor.avif') }}"
           class="w-full h-full object-cover lazy-load"
           alt="Ethiopian agricultural landscape showcasing our export products"
           loading="eager" />
    </div>

    <!-- Enhanced Decorative elements -->
    <div class="absolute top-20 right-0 w-96 h-96 bg-primary-light opacity-10 rounded-full translate-x-1/2 animate-float-continuous" aria-hidden="true"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-gold opacity-10 rounded-full -translate-x-1/2 translate-y-1/2 animate-float-continuous" aria-hidden="true" style="animation-delay: 1s;"></div>

    <div class="relative max-w-7xl mx-auto px-6 pt-32 pb-24 grid md:grid-cols-2 gap-16 items-center">
      <div class="animate-float">
        <div class="inline-flex items-center gap-3 bg-white/10 border border-white/20 rounded-full px-6 py-3 mb-8 backdrop-blur-sm premium-card">
          <span class="w-3 h-3 bg-green-400 rounded-full animate-pulse-glow" aria-hidden="true"></span>
          <span class="text-green-200 text-xs font-semibold tracking-wider uppercase">Since 2008</span>
        </div>

        <h1 id="hero-heading" class="font-display text-hero font-black text-white leading-tight mb-8">
          Ethiopia's Premier<br/>International Trade<br/><span class="text-green-300">Excellence</span>
        </h1>

        <p class="text-green-100 text-body-lg leading-relaxed mb-10 max-w-xl">
          For over two decades, Habtom Abadi Import and Export has been a cornerstone of Ethiopia's international trade sector, bridging Ethiopia's rich agricultural resources with global markets while fueling national development through cutting-edge machinery imports.
        </p>

        <div class="flex flex-col sm:flex-row gap-6">
           tact Us Today
          </a>
        </div>
      </div>

      <!-- Enhanced Hero image card -->
      <div class="hidden md:block relative mt-16 animate-slide-in-right">
        <div class="rounded-3xl overflow-hidden border-4 border-white/10 product-card">
          <img src="{{ asset('tractor.avif') }}"
               class="w-full h-96 object-cover"
               alt="Modern agricultural tractor in Ethiopian farmland"
               loading="eager" />
        </div>

        <!-- Enhanced Floating stats cards -->
        <div class="absolute -bottom-8 -left-8 premium-card p-6 animate-float" style="animation-delay: 0.2s;">
          <div class="text-xs text-gray-500 mb-2 font-semibold">16+ Years</div>
          <div class="font-bold text-gray-900 text-lg">Trading Excellence</div>
          <div class="text-primary text-sm font-medium mt-1">Since 2008</div>
        </div>

        <div class="absolute -top-6 -right-6 bg-primary rounded-3xl p-6 shadow-2xl text-white animate-float" style="animation-delay: 0.4s;">
          <div class="text-3xl font-black">15+</div>
          <div class="text-green-200 text-sm font-medium">Countries Served</div>
        </div>
      </div>
    </div>

    <!-- Enhanced Stats Bar -->
    <div class="absolute bottom-0 left-0 right-0">
      <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-px bg-white/10 rounded-t-3xl overflow-hidden backdrop-blur-sm">
          <div class="stat-card p-8 text-center text-white group cursor-pointer" tabindex="0" role="button">
            <div class="text-4xl font-black mb-3 group-hover:scale-110 transition-transform">16+</div>
            <div class="text-green-300 text-sm mt-2">Years Experience</div>
            <div class="w-0 group-hover:w-full h-0.5 bg-green-300 transition-all duration-500 mt-3"></div>
          </div>

          <div class="stat-card p-8 text-center text-white group cursor-pointer" tabindex="0" role="button">
            <div class="text-4xl font-black mb-3 group-hover:scale-110 transition-transform">20+</div>
            <div class="text-green-300 text-sm mt-2">Fuel Trucks</div>
            <div class="w-0 group-hover:w-full h-0.5 bg-green-300 transition-all duration-500 mt-3"></div>
          </div>

          <div class="stat-card p-8 text-center text-white group cursor-pointer" tabindex="0" role="button">
            <div class="text-4xl font-black mb-3 group-hover:scale-110 transition-transform">15+</div>
            <div class="text-green-300 text-sm mt-2">Countries Served</div>
            <div class="w-0 group-hover:w-full h-0.5 bg-green-300 transition-all duration-500 mt-3"></div>
          </div>

          <div class="stat-card p-8 text-center text-white group cursor-pointer" tabindex="0" role="button">
            <div class="text-4xl font-black mb-3 group-hover:scale-110 transition-transform">2008</div>
            <div class="text-green-300 text-sm mt-2">Founded</div>
            <div class="w-0 group-hover:w-full h-0.5 bg-green-300 transition-all duration-500 mt-3"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVICES -->
  <section class="py-32 bg-white">
    <div class="max-w-7xl mx-auto px-8">
      <div class="text-center mb-20 scroll-reveal">
        <div class="inline-flex items-center gap-3 bg-primary/10 rounded-full px-6 py-3 mb-6 backdrop-blur-sm">
          <span class="w-3 h-3 bg-primary rounded-full animate-pulse-glow" aria-hidden="true"></span>
          <span class="text-primary text-sm font-semibold tracking-wider uppercase">Our Services</span>
        </div>
        <h2 class="font-display text-display-lg font-black text-gray-900 mb-8">Export & Import Excellence</h2>
        <p class="text-body-lg text-gray-600 max-w-4xl mx-auto leading-relaxed">We specialize in exporting Ethiopia's finest agricultural products while importing cutting-edge machinery and technology to drive national development</p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12">
        <div class="group premium-card p-10 scroll-reveal">
          <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary-light rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="font-display text-2xl font-black text-gray-900 mb-6">Export Division</h3>
          <p class="text-gray-600 text-body-md leading-relaxed mb-8">Bringing Ethiopia's finest organic products to global markets with uncompromising quality standards</p>
          <ul class="text-gray-600 space-y-4 mb-8">
            <li class="flex items-start gap-4">
              <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
              <span class="text-body-sm">Premium Arabica coffee beans with world-renowned flavors and aromatic profiles</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
              <span class="text-body-sm">High-quality sesame seeds, Niger seeds, soybeans, peanuts, linseed</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
              <span class="text-body-sm">Chickpeas, red kidney beans, white pea beans, faba beans</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
              <span class="text-body-sm">Premium spices and high-value agricultural commodities</span>
            </li>
          </ul>
          <a href="{{ route('products') }}"
             class="btn-primary text-white font-semibold px-8 py-4 rounded-full focus-visible inline-flex items-center">
            <span class="relative z-10">Explore Products</span>
            <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
        </div>

        <div class="group premium-card p-10 scroll-reveal">
          <div class="w-20 h-20 bg-gradient-to-br from-gold to-gold-dark rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="font-display text-2xl font-black text-gray-900 mb-6">Import Division</h3>
          <p class="text-gray-600 text-body-md leading-relaxed mb-8">Engineering national growth through essential technology and cutting-edge machinery</p>
          <ul class="text-gray-600 space-y-4 mb-8">
            <li class="flex items-start gap-4">
              <span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
              <span class="text-body-sm">Electric, hybrid, and gas-powered vehicles including buses</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
              <span class="text-body-sm">Industrial-grade construction machinery and specialized inputs</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
              <span class="text-body-sm">Modern tractors, harvesters, and agricultural equipment</span>
            </li>
            <li class="flex items-start gap-4">
              <span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
              <span class="text-body-sm">Versatile sourcing for industrial and commercial applications</span>
            </li>
          </ul>
          <a href="{{ route('contact') }}"
             class="btn-primary text-white font-semibold px-8 py-4 rounded-full focus-visible inline-flex items-center">
            <span class="relative z-10">Request Import Services</span>
            <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
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
        @foreach($products->take(8) as $product)
        <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 scroll-reveal">
          <div class="aspect-square overflow-hidden">
            <img src="https://unsplash.com/photos/a-tractor-plowing-a-field-with-a-plow-cfD0LrqEMmk" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $product->name }}"/>
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
  <section class="py-32 bg-primary relative overflow-hidden">
    <!-- Enhanced background elements -->
    <div class="absolute top-0 right-0 w-64 h-64 bg-white/5 rounded-full translate-x-1/2 animate-float-continuous" aria-hidden="true"></div>
    <div class="absolute bottom-0 left-0 w-48 h-48 bg-gold/10 rounded-full -translate-x-1/2 translate-y-1/2 animate-float-continuous" aria-hidden="true" style="animation-delay: 1.5s;"></div>
    
    <div class="max-w-7xl mx-auto px-8 relative">
      <div class="text-center mb-20 scroll-reveal">
        <div class="inline-flex items-center gap-3 bg-white/10 rounded-full px-6 py-3 mb-8 backdrop-blur-sm">
          <span class="w-3 h-3 bg-green-400 rounded-full animate-pulse-glow" aria-hidden="true"></span>
          <span class="text-white text-sm font-semibold tracking-wider uppercase">National Transport</span>
        </div>
        <h2 class="font-display text-display-lg font-black text-white mb-8">Reliable Transportation Services</h2>
        <p class="text-body-lg text-green-100 max-w-4xl mx-auto leading-relaxed">Delivering all types of cargo and liquid transport services nationwide with our expanding fleet and experienced logistics team</p>
      </div>

      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="text-white scroll-reveal animate-slide-in-left space-y-8">
          <h3 class="font-display text-3xl font-black mb-8">Our Fleet Growth</h3>
          
          <div class="space-y-8">
            <div class="premium-card p-8 backdrop-blur-md">
              <div class="flex items-center gap-6 mb-4">
                <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-500 rounded-2xl flex items-center justify-center shadow-lg animate-pulse-glow">
                  <span class="text-white font-bold text-lg">2021</span>
                </div>
                <div>
                  <h4 class="font-bold text-2xl mb-2 text-gray-800">Transportation Launch</h4>
                  <p class="text-gray-700 text-body-sm">Established our national transportation division</p>
                </div>
              </div>
              <p class="text-gray-800 text-body-md leading-relaxed">Launched national transportation with two cargo trucks, marking our entry into logistics services</p>
            </div>

            <div class="premium-card p-8 backdrop-blur-md">
              <div class="flex items-center gap-6 mb-4">
                <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-500 rounded-2xl flex items-center justify-center shadow-lg animate-pulse-glow">
                  <span class="text-white font-bold text-lg">2023</span>
                </div>
                <div>
                  <h4 class="font-bold text-2xl mb-2 text-gray-800">Major Expansion</h4>
                  <p class="text-gray-700 text-body-sm">Significant fleet growth</p>
                </div>
              </div>
              <p class="text-gray-800 text-body-md leading-relaxed">Expanded transportation capacity to 20 fuel trucks, dramatically increasing our service capabilities</p>
            </div>
          </div>

          <div class="grid grid-cols-3 gap-6 mt-12">
            <div class="premium-card p-6 text-center backdrop-blur-md">
              <div class="text-4xl font-black text-black mb-3">20+</div>
              <div class="text-green-700 text-sm font-medium">Fuel Trucks</div>
            </div>
            <div class="premium-card p-6 text-center backdrop-blur-md">
              <div class="text-4xl font-black text-black mb-3">2</div>
              <div class="text-green-700 text-sm font-medium">Cargo Trucks</div>
            </div>
            <div class="premium-card p-6 text-center backdrop-blur-md">
              <div class="text-4xl font-black text-black mb-3">Nation</div>
              <div class="text-green-700 text-sm font-medium">Wide Coverage</div>
            </div>
          </div>
        </div>

        <div class="relative scroll-reveal animate-slide-in-right">
          <div class="premium-card p-10 backdrop-blur-lg">
            <div class="flex items-center gap-4 mb-8">
              <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-green-500 rounded-2xl flex items-center justify-center shadow-lg">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0 001 1h1m8-1a1 1 0 018-1V6a1 1 0 00-1-1h-1m-4 4h8m-4 0v8m-4-8h8"></path>
                </svg>
              </div>
              <h4 class="font-bold text-3xl text-black">Transport Services</h4>
            </div>
            <ul class="space-y-6 text-green-700">
              <li class="flex items-start gap-4 group">
                <span class="w-3 h-3 bg-green-400 rounded-full flex-shrink-0 mt-1 group-hover:scale-125 transition-transform" aria-hidden="true"></span>
                <div>
                  <div class="font-semibold text-lg mb-1 text-gray-800">All Types of Cargo</div>
                  <p class="text-gray-700 text-body-sm">Comprehensive cargo transportation solutions for all industries</p>
                </div>
              </li>
              <li class="flex items-start gap-4 group">
                <span class="w-3 h-3 bg-green-400 rounded-full flex-shrink-0 mt-1 group-hover:scale-125 transition-transform" aria-hidden="true"></span>
                <div>
                  <div class="font-semibold text-lg mb-1 text-gray-800">Liquid Fuel Transport</div>
                  <p class="text-gray-700 text-body-sm">Specialized fuel transportation with modern fleet</p>
                </div>
              </li>
              <li class="flex items-start gap-4 group">
                <span class="w-3 h-3 bg-green-400 rounded-full flex-shrink-0 mt-1 group-hover:scale-125 transition-transform" aria-hidden="true"></span>
                <div>
                  <div class="font-semibold text-lg mb-1 text-gray-800">Nationwide Coverage</div>
                  <p class="text-gray-700 text-body-sm">Complete delivery network across Ethiopia</p>
                </div>
              </li>
              <li class="flex items-start gap-4 group">
                <span class="w-3 h-3 bg-green-400 rounded-full flex-shrink-0 mt-1 group-hover:scale-125 transition-transform" aria-hidden="true"></span>
                <div>
                  <div class="font-semibold text-lg mb-1 text-gray-800">Expert Team</div>
                  <p class="text-gray-700 text-body-sm">Experienced drivers and logistics professionals</p>
                </div>
              </li>
              <li class="flex items-start gap-4 group">
                <span class="w-3 h-3 bg-green-400 rounded-full flex-shrink-0 mt-1 group-hover:scale-125 transition-transform" aria-hidden="true"></span>
                <div>
                  <div class="font-semibold text-lg mb-1 text-gray-800">Timely Delivery</div>
                  <p class="text-gray-700 text-body-sm">Reliable and punctual service guarantee</p>
                </div>
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
        <span class="text-primary text-xs font-medium tracking-wider uppercase">Global Reach</span>
        <h2 class="font-display text-display-lg font-bold text-gray-900 mb-6">Serving 15+ Countries Worldwide</h2>
        <p class="text-body-lg text-gray-600 max-w-3xl mx-auto">Our export division brings Ethiopia's finest agricultural products to international markets across the globe</p>
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
          View All Partners
        </a>
      </div>
    </div>
  </section>
  @endif

  <!-- CTA -->
  <section class="py-32 bg-primary relative overflow-hidden">
    <!-- Enhanced background elements -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full translate-x-1/2 animate-float-continuous" aria-hidden="true"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-gold/10 rounded-full -translate-x-1/2 translate-y-1/2 animate-float-continuous" aria-hidden="true" style="animation-delay: 2s;"></div>
    
    <div class="max-w-5xl mx-auto px-8 relative">
      <div class="text-center scroll-reveal">
        <div class="inline-flex items-center gap-3 bg-white/10 rounded-full px-6 py-3 mb-8 backdrop-blur-sm">
          <span class="w-3 h-3 bg-green-400 rounded-full animate-pulse-glow" aria-hidden="true"></span>
          <span class="text-white text-sm font-semibold tracking-wider uppercase">Partner With Us</span>
        </div>
        
        <h2 class="font-display text-display-lg font-black text-white mb-8">Partner with Ethiopia's Premier International Trader</h2>
        <p class="text-body-lg text-green-100 mb-12 max-w-4xl mx-auto leading-relaxed">To be one of the vibrant, reliable and competent international traders. Join us in our mission to export standard quality Ethiopian agricultural products and import cutting-edge machinery for national development.</p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center">
          <a href="{{ route('contact') }}"
             class="btn-primary text-white font-bold px-12 py-5 rounded-full focus-visible text-lg inline-flex items-center group">
            <span class="relative z-10">Start Your Partnership</span>
            <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
          <a href="{{ route('rfq.create') }}"
             class="border-2 border-white/40 text-white font-semibold px-12 py-5 rounded-full hover:bg-white/20 transition-all duration-300 focus-visible backdrop-blur-sm hover:backdrop-blur-lg text-lg inline-flex items-center group">
            Request a Quote
            <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
