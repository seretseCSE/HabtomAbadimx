@extends('layouts.app')

@section('title', 'Services - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<main id="main-content" class="bg-white text-gray-900">

  <section class="hero-bg min-h-screen flex items-center relative overflow-hidden" aria-labelledby="services-hero-heading">
    <div class="absolute inset-0 opacity-20">
      <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ff?w=1600&q=80"
           class="w-full h-full object-cover lazy-load"
           alt="Global trade and logistics operations"
           loading="eager" />
    </div>
    
    <!-- Enhanced decorative elements -->
    <div class="absolute top-24 left-10 w-96 h-96 bg-gold opacity-10 rounded-full -translate-x-1/2 animate-float-continuous" aria-hidden="true"></div>
    <div class="absolute bottom-0 right-10 w-72 h-72 bg-primary-light opacity-10 rounded-full translate-x-1/2 translate-y-1/2 animate-float-continuous" aria-hidden="true" style="animation-delay: 1s;"></div>
    
    <div class="relative max-w-7xl mx-auto px-8 text-center">
      <div class="animate-float">
        <div class="inline-flex items-center gap-3 bg-white/10 rounded-full px-6 py-3 mb-8 backdrop-blur-sm">
          <span class="w-3 h-3 bg-gold rounded-full animate-pulse-glow" aria-hidden="true"></span>
          <span class="text-green-200 text-sm font-semibold tracking-wider uppercase">Our Services</span>
        </div>
        
        <h1 id="services-hero-heading" class="font-display text-hero font-black text-white mt-4 mb-8">Comprehensive Trade Solutions</h1>
        <p class="text-green-100 text-body-lg max-w-4xl mx-auto leading-relaxed">From Ethiopia's finest agricultural exports to cutting-edge machinery imports, we deliver end-to-end trade solutions with unmatched reliability and expertise.</p>
      </div>
    </div>
  </section>

  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">What We Do</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-3">Our Core Services</h2>
      </div>
      <div class="grid lg:grid-cols-2 gap-16">
        <div class="scroll-reveal">
          <div class="bg-gradient-to-br from-primary to-primary-dark rounded-3xl p-8 text-white shadow-xl">
            <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
              </svg>
            </div>
            <h3 class="font-display text-2xl font-black mb-4">Export Division</h3>
            <p class="text-green-100 text-body-md leading-relaxed mb-6">We export premium Ethiopian agricultural products to international markets, earning foreign currency while showcasing Ethiopia's agricultural excellence.</p>
            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <span class="w-2 h-2 bg-green-400 rounded-full flex-shrink-0" aria-hidden="true"></span>
                <span class="text-sm">Premium Arabica coffee beans - world-renowned flavors</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-2 h-2 bg-green-400 rounded-full flex-shrink-0" aria-hidden="true"></span>
                <span class="text-sm">Sesame, Niger seeds, soybeans, peanuts, linseed</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-2 h-2 bg-green-400 rounded-full flex-shrink-0" aria-hidden="true"></span>
                <span class="text-sm">Chickpeas, red kidney beans, white pea beans, faba beans</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-2 h-2 bg-green-400 rounded-full flex-shrink-0" aria-hidden="true"></span>
                <span class="text-sm">Spices and other high-value agricultural commodities</span>
              </div>
            </div>
          </div>
        </div>

        <div class="scroll-reveal">
          <div class="bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
            <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
              </svg>
            </div>
            <h3 class="font-display text-2xl font-black text-gray-900 mb-4">Import Division</h3>
            <p class="text-gray-600 text-body-md leading-relaxed mb-6">We import the technology and machinery required for Ethiopia's growth and development, supporting national progress through strategic sourcing.</p>
            <div class="space-y-4">
              <div class="flex items-center gap-3">
                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                <span class="text-sm">Electric, hybrid, and gas-powered vehicles including buses</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                <span class="text-sm">Industrial-grade construction machinery and inputs</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                <span class="text-sm">Modern tractors, harvesters, and agricultural inputs</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                <span class="text-sm">Versatile sourcing for industrial and commercial needs</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="scroll-reveal">
          <span class="text-primary text-xs font-semibold tracking-widest uppercase">Transportation</span>
          <h2 class="font-display text-display-lg font-black text-gray-900 mt-4 mb-6">National Transport Services</h2>
          <p class="text-gray-600 text-body-md leading-relaxed mb-6">We deliver all types of cargo and liquid transport services nationwide, supporting the movement of goods across Ethiopia with reliable vehicles and experienced drivers.</p>
          <div class="space-y-4">
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <span class="text-white font-bold text-sm">✓</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Cargo Transportation</h4>
                <p class="text-gray-600 text-sm">Reliable delivery of goods across Ethiopia with modern cargo trucks.</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <span class="text-white font-bold text-sm">✓</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Liquid Transport</h4>
                <p class="text-gray-600 text-sm">Specialized fuel transportation with 20 dedicated fuel trucks.</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <span class="text-white font-bold text-sm">✓</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Experienced Drivers</h4>
                <p class="text-gray-600 text-sm">Professional drivers ensuring safe and timely deliveries nationwide.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="scroll-reveal">
          <div class="bg-primary rounded-3xl p-8 text-white shadow-xl">
            <h3 class="font-display text-2xl font-black mb-6">Fleet Milestones</h3>
            <div class="space-y-6">
              <div class="rounded-3xl bg-white/10 p-6 backdrop-blur-sm border border-white/20">
                <div class="flex items-center justify-between mb-2">
                  <p class="font-bold text-lg">2021</p>
                  <span class="text-green-300 text-sm">Launch</span>
                </div>
                <p class="text-green-100 text-sm">Launched national transportation with two cargo trucks.</p>
              </div>
              <div class="rounded-3xl bg-white/10 p-6 backdrop-blur-sm border border-white/20">
                <div class="flex items-center justify-between mb-2">
                  <p class="font-bold text-lg">2023</p>
                  <span class="text-green-300 text-sm">Expansion</span>
                </div>
                <p class="text-green-100 text-sm">Expanded transportation capacity to 20 fuel trucks.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services from Database -->
  @if($services->isNotEmpty())
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary text-xs font-semibold tracking-widest uppercase">Our Services</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-4">Services We Offer</h2>
        <p class="text-gray-600 text-body-md max-w-2xl mx-auto mt-4">Comprehensive trade solutions tailored to meet your international business needs</p>
      </div>
      
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($services as $service)
        <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 scroll-reveal">
          <div class="flex justify-center mb-6">
            @if($service->icon_url)
              <img src="{{ $service->icon_url }}" alt="{{ $service->name }}" class="w-16 h-16 object-contain"/>
            @elseif($service->icon)
              <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->name }}" class="w-16 h-16 object-contain"/>
            @else
              <div class="w-16 h-16 bg-primary rounded-2xl flex items-center justify-center">
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
              </div>
            @endif
          </div>
          
          <h3 class="font-display text-xl font-bold text-gray-900 text-center mb-4">{{ $service->name }}</h3>
          <p class="text-gray-600 text-body-sm leading-relaxed text-center">{{ $service->description }}</p>
          
          @if($service->is_featured)
          <div class="mt-4 text-center">
            <span class="inline-block px-3 py-1 bg-gold text-white rounded-full text-xs font-medium">
              Featured
            </span>
          </div>
          @endif
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif

  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary text-xs font-semibold tracking-widest uppercase">Our Process</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-4">How We Work</h2>
        <p class="text-gray-600 text-body-md max-w-2xl mx-auto mt-4">Our streamlined process ensures efficient, transparent, and reliable trade operations from inquiry to delivery.</p>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
        <div class="text-center scroll-reveal">
          <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6 text-white font-display font-black text-2xl shadow-lg">1</div>
          <h4 class="font-display text-xl font-bold text-gray-900 mb-3">Submit RFQ</h4>
          <p class="text-gray-600 text-body-sm leading-relaxed">Tell us what you need - product specifications, quantities, destinations, and timelines.</p>
        </div>
        <div class="text-center scroll-reveal">
          <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6 text-white font-display font-black text-2xl shadow-lg">2</div>
          <h4 class="font-display text-xl font-bold text-gray-900 mb-3">Receive Offer</h4>
          <p class="text-gray-600 text-body-sm leading-relaxed">We respond within 24-48 hours with competitive pricing, specifications, and availability.</p>
        </div>
        <div class="text-center scroll-reveal">
          <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6 text-white font-display font-black text-2xl shadow-lg">3</div>
          <h4 class="font-display text-xl font-bold text-gray-900 mb-3">Agree & Contract</h4>
          <p class="text-gray-600 text-body-sm leading-relaxed">We sign comprehensive trade agreements and begin sourcing, inspection, and packaging.</p>
        </div>
        <div class="text-center scroll-reveal">
          <div class="w-20 h-20 bg-primary rounded-full flex items-center justify-center mx-auto mb-6 text-white font-display font-black text-2xl shadow-lg">4</div>
          <h4 class="font-display text-xl font-bold text-gray-900 mb-3">Ship & Deliver</h4>
          <p class="text-gray-600 text-body-sm leading-relaxed">Your cargo is shipped with full documentation and tracked to your destination.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-primary">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <div class="scroll-reveal">
        <h2 class="font-display text-display-lg font-black text-white mb-6">Ready to Partner With Us?</h2>
        <p class="text-green-100 text-body-lg mb-8 max-w-2xl mx-auto">Whether you're looking to import Ethiopian agricultural products or export machinery and technology, we're here to make your international trade seamless and successful.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="{{ route('contact') }}"
             class="bg-white text-primary font-bold px-8 py-4 rounded-full hover:bg-green-50 transition-all duration-300 shadow-xl hover:shadow-2xl focus-visible transform hover:scale-105">
            Contact Our Team
          </a>
          <a href="{{ route('rfq.create') }}"
             class="border-2 border-white/40 text-white font-semibold px-8 py-4 rounded-full hover:bg-white/10 transition-all duration-300 focus-visible backdrop-blur-sm">
            Request a Quote
          </a>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
