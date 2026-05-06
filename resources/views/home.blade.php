@extends('layouts.app')

@section('title', 'Home - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<main id="main-content" class="bg-white text-gray-900">

  <!-- HERO -->
  <section class="hero-bg min-h-[70vh] flex items-center relative overflow-hidden" aria-labelledby="hero-heading">
    <!-- Background image overlay -->
    <div class="absolute inset-0 opacity-20">
      <img src="{{ asset('img1.png') }}"
           class="w-full h-full object-cover lazy-load"
           alt="Ethiopian agricultural landscape showcasing our export products"
           loading="eager" />
    </div>

    <!-- Enhanced Decorative elements -->
    <div class="absolute top-20 right-0 w-96 h-96 bg-primary-light opacity-10 rounded-full translate-x-1/2 animate-float-continuous" aria-hidden="true"></div>
    <div class="absolute bottom-0 left-0 w-72 h-72 bg-gold opacity-10 rounded-full -translate-x-1/2 translate-y-1/2 animate-float-continuous" aria-hidden="true" style="animation-delay: 1s;"></div>

    <div class="relative max-w-7xl mx-auto px-6 pt-32 pb-24 grid md:grid-cols-2 gap-16 items-center">
      <div class="animate-float">
        <div class="inline-flex items-center gap-3 bg-white/10 border border-white/20 rounded-full px-6 py-3 mb-8 backdrop-blur-sm elevated-card">
          <span class="w-3 h-3 bg-green-400 rounded-full animate-pulse-glow" aria-hidden="true"></span>
          <span class="text-green-200 text-xs font-semibold tracking-wider uppercase">Since 2008</span>
        </div>

        <h1 id="hero-heading" class="font-display text-hero font-black text-white leading-tight mb-8">
          Reliable partner<br/>For all
        </h1>

        <p class="text-green-100 text-body-lg leading-relaxed mb-10 max-w-xl">
            Welcome to Habtom Abadi Import & Export. With over 18 years in the industry, we serve as a trusted bridge between Ethiopia and the global market. We export Ethiopia’s best coffee and crops to international buyers, while importing high-quality vehicles and heavy machinery that help businesses grow and stay profitable
        </p>

        <div class="flex flex-col sm:flex-row gap-6">
           Contact Us Today
          </a>
        </div>
      </div>

      <!-- Enhanced Hero image card -->
      <div class="hidden md:block relative mt-16 animate-slide-in-right">
        <div class="rounded-3xl overflow-hidden border-4 border-white/10 product-card">
          <img src="{{ asset('img1.png') }}"
               class="w-full h-96 object-cover"
               alt="Modern agricultural tractor in Ethiopian farmland"
               loading="eager" />
        </div>

        <!-- Enhanced Floating stats cards -->
        <div class="absolute -bottom-4 -left-8 elevated-card p-6 animate-float" style="animation-delay: 0.2s;">
          <div class="text-xs text-gray-500 mb-2 font-semibold">18+ Years</div>
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
        <div class="grid grid-cols-1 md:grid-cols-4 gap-px bg-white/10 rounded-t-3xl overflow-hidden backdrop-blur-sm">
          <div class="stat-card p-5 text-center text-white group cursor-pointer" tabindex="0" role="button">
            <div class="text-4xl font-black mb-3 group-hover:scale-110 transition-transform">18+</div>
            <div class="text-green-300 text-sm mt-2">Years Experience</div>
            <div class="w-0 group-hover:w-full h-0.5 bg-green-300 transition-all duration-500 mt-3"></div>
          </div>

          <div class="stat-card p-5 text-center text-white group cursor-pointer" tabindex="0" role="button">
            <div class="text-4xl font-black mb-3 group-hover:scale-110 transition-transform">20+</div>
            <div class="text-green-300 text-sm mt-2">Fuel Trucks</div>
            <div class="w-0 group-hover:w-full h-0.5 bg-green-300 transition-all duration-500 mt-3"></div>
          </div>

          <div class="stat-card p-5 text-center text-white group cursor-pointer" tabindex="0" role="button">
            <div class="text-4xl font-black mb-3 group-hover:scale-110 transition-transform">15+</div>
            <div class="text-green-300 text-sm mt-2">Countries Served</div>
            <div class="w-0 group-hover:w-full h-0.5 bg-green-300 transition-all duration-500 mt-3"></div>
          </div>

          <div class="stat-card p-5 text-center text-white group cursor-pointer" tabindex="0" role="button">
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
        <p class="text-body-lg text-gray-600 max-w-4xl mx-auto leading-relaxed">We specialize in exporting Ethiopia's internationally demanded agricultural products while importing advanced machinery and technology needed to improve operational efficiency and increase profitability</p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12">
        <div class="group elevated-card p-10 scroll-reveal relative overflow-hidden">
          {{-- <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('coffee1.jpg') }}'); filter: blur(2px); transform: scale(1.1);"></div> --}}
          <div class="absolute inset-0 bg-white/60"></div>
          <div class="relative z-10">
            <div class="w-20 h-20 bg-gradient-to-br from-primary to-primary-light rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <h3 class="font-display text-2xl font-black text-gray-900 mb-6">Export Division</h3>
            <p class="text-gray-600 text-body-md leading-relaxed mb-8">Connecting Ethiopia's rich agricultural resources with the global market, exporting quality products that meet international standards</p>
            <ul class="text-gray-600 space-y-4 mb-8">
              <li class="flex items-start gap-4">
                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
                 <span class="text-body-sm">Coffee — Yirgacheffe, Sidamo, Ghimbi, Harrar, Jimma, and Limu</span>
              </li>
              <li class="flex items-start gap-4">
                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
                 <span class="text-body-sm">Oil seeds — sesame seed, Custard seed, Nugget, Wool, Linen, and almond</span>
              </li>
              <li class="flex items-start gap-4">
                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
                 <span class="text-body-sm">Pulses — green mung, chicken pea, horse pea, red kidney pea, white kidney, and soya bean</span>
              </li>
              <li class="flex items-start gap-4">
                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
                 <span class="text-body-sm">Spices — Paper, ginger, black cumin, Turmeric, and Dried Red Chil</span>
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
        </div>

        <div class="group elevated-card p-10 scroll-reveal relative overflow-hidden">
          {{-- <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('import.png') }}'); filter: blur(2px); transform: scale(1.1);"></div> --}}
          <div class="absolute inset-0 bg-white/60"></div>
          <div class="relative z-10">
            <div class="w-20 h-20 bg-gradient-to-br from-gold to-gold-dark rounded-3xl flex items-center justify-center mb-8 group-hover:scale-110 transition-transform duration-300">
              <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="font-display text-2xl font-black text-gray-900 mb-6">Import Division</h3>
            <p class="text-gray-600 text-body-md leading-relaxed mb-8">helping our clients modernize their operations through the importation of machinery, vehicles, and technology</p>
            <ul class="text-gray-600 space-y-4 mb-8">
              <li class="flex items-start gap-4">
                <span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
                <span class="text-body-sm">Automotive — Electric (EV), hybrid, and gas-powered cars, heavy-duty buses, and trucks</span>
              </li>
              <li class="flex items-start gap-4">
                <span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
                <span class="text-body-sm">Construction machinery — dump trucks, excavators, wheel loaders, motor graders, road rollers, bulldozers, and mixers</span>
              </li>
              <li class="flex items-start gap-4">
                <span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
                <span class="text-body-sm">Agricultural machinery — modern tractors, harvesters, and farming inputs to modernize Ethiopian agriculture</span>
              </li>
              <li class="flex items-start gap-4">
                <span class="w-2 h-2 bg-gold rounded-full flex-shrink-0 mt-2" aria-hidden="true"></span>
                <span class="text-body-sm">General import — metals, soft temper, spare parts, and versatile sourcing for industrial and commercial needs</span>
              </li>
            </ul>
            <a href="{{ route('contact') }}"
               class="btn-primary text-white font-semibold px-8 py-4 rounded-full focus-visible inline-flex items-center">
              <span class="relative z-10">Request Services</span>
              <svg class="w-5 h-5 ml-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
              </svg>
            </a>
          </div>
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
        <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-900 mb-6">Quality Products</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Sourced directly from Ethiopia's finest producers</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        @foreach($products->take(8) as $product)
        <div class="group relative overflow-hidden rounded-2xl bg-white shadow-lg hover:shadow-2xl transition-all duration-300 scroll-reveal cursor-pointer" onclick="showProductModal({{ $product->id }})">
          <div class="aspect-square overflow-hidden">
            @php $productImage = $product->getFirstMediaUrl('images'); @endphp
            @if($productImage)
              <img src="{{ $productImage }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $product->name }}"/>
            @else
              <div class="w-full h-full bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                <span class="text-4xl font-bold text-green-600">{{ strtolower($product->category->name ?? '') === 'import' ? 'Import' : 'Export' }}</span>
              </div>
            @endif
          </div>
          <div class="absolute top-3 left-3">
            <span class="bg-white/90 backdrop-blur-sm text-gray-800 text-xs font-bold px-2.5 py-1 rounded-full">
              {{ $product->category ? $product->category->name : 'Export' }}
            </span>
          </div>
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 product-overlay">
            <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
              <h3 class="font-bold text-lg mb-2">{{ $product->name }}</h3>
              <p class="text-sm opacity-90">{{ $product->origin_country ?? 'Ethiopia' }}</p>
              <div class="flex items-center gap-2 mt-2">
                <span class="text-xs opacity-75">{{ $product->category->name ?? 'General' }}</span>
                @if($product->is_featured)
                <span class="bg-amber-500 text-white text-xs px-2 py-0.5 rounded-full">Featured</span>
                @endif
              </div>
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
        <p class="text-body-lg text-green-100 max-w-4xl mx-auto leading-relaxed">
            Delivering quality transport services throughout Ethiopia and beyond with a modern fleet and a team you can trust
        </p>
      </div>

      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="text-white scroll-reveal animate-slide-in-left space-y-8">
          <h3 class="font-display text-3xl font-black mb-8">Our Fleet Growth</h3>

          <div class="space-y-8">
            <div class="elevated-card p-8 backdrop-blur-md">
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

            <div class="elevated-card p-8 backdrop-blur-md">
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
            <div class="elevated-card p-6 text-center backdrop-blur-md">
              <div class="text-4xl font-black text-black mb-3">20+</div>
              <div class="text-green-700 text-sm font-medium">Fuel Trucks</div>
            </div>
            <div class="elevated-card p-6 text-center backdrop-blur-md">
              <div class="text-4xl font-black text-black mb-3">2</div>
              <div class="text-green-700 text-sm font-medium">cargo trucks</div>
            </div>
            <div class="elevated-card p-6 text-center backdrop-blur-md">
              <div class="text-4xl font-black text-black mb-3">Region</div>
              <div class="text-green-700 text-sm font-medium">Wide Coverage</div>
            </div>
          </div>
        </div>

        <div class="relative scroll-reveal animate-slide-in-right">
          <div class="elevated-card p-10 backdrop-blur-lg">
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
                  <div class="font-semibold text-lg mb-1 text-gray-800">All Types of Goods</div>
                  <p class="text-gray-700 text-body-sm">
                    Reliable transportation providing the heavy-duty solutions your business needs to grow and thrive
                </p>
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
                  <div class="font-semibold text-lg mb-1 text-gray-800">Regional Coverage</div>
                  <p class="text-gray-700 text-body-sm">
                    Complete delivery network across Ethiopia and neighboring markets
                </p>
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

        <h2 class="font-display text-display-lg font-black text-white mb-8">Partner with One of the Best International Trader</h2>
        <p class="text-body-lg text-green-100 mb-12 max-w-4xl mx-auto leading-relaxed">
            Our goal is to be your most trusted global trade partner, recognized for reliability and professional excellence. We specialize in exporting Ethiopia’s high-quality coffee, pulses, and oilseeds, while providing the essential industrial machinery and technology our partners need to succeed. With an expanding presence in manufacturing and a professional national logistics network for cargo and liquid transport, we deliver the stability and results your business depends on        </p>
        </p>
        <div class="flex flex-col sm:flex-row gap-6 justify-center">
          <a href="{{ route('contact') }}"
             class="btn-primary text-white font-bold px-12 py-5 rounded-full focus-visible text-lg inline-flex items-center group">
            <span class="relative z-10">Start Your Partnership</span>
            <svg class="w-6 h-6 ml-3 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
