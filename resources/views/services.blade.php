@extends('layouts.app')

@section('title', 'Services - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<body class="bg-white" x-data="{ mobileOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

  <!-- HERO -->
  <section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <!-- Background image overlay -->
    <div class="absolute inset-0 opacity-20">
      <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ff?w=1600&q=80" class="w-full h-full object-cover" alt=""/>
    </div>
    
    <div class="relative max-w-7xl mx-auto px-6 text-center">
      <div class="animate-float">
        <span class="text-green-300 font-medium text-sm tracking-widest uppercase">What We Offer</span>
        <h1 class="font-display text-5xl md:text-7xl font-black text-white mt-3 mb-6">Our Global Services</h1>
        <p class="text-green-100 text-xl max-w-3xl mx-auto">End-to-end trade solutions - from sourcing to delivery, we handle every step of the journey.</p>
      </div>
    </div>
  </section>

  <!-- SERVICES GRID -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($services as $service)
        <div class="border border-gray-100 rounded-3xl p-8 hover:shadow-xl hover:border-primary/30 transition-all group scroll-reveal">
          <div class="w-16 h-16 bg-green-50 group-hover:bg-primary rounded-2xl flex items-center justify-center mb-6 transition-colors">
            <span class="text-3xl">{{ $service->icon ?? '??' }}</span>
          </div>
          <h3 class="font-display text-xl font-bold text-gray-900 mb-3">{{ $service->name }}</h3>
          <p class="text-gray-600 leading-relaxed mb-4">{{ Str::limit($service->description, 120) }}</p>
          
          @if($service->features)
          <ul class="space-y-1 text-sm text-gray-500 mb-4">
            @php
              $features = is_array($service->features) ? $service->features : json_decode($service->features, true) ?? [];
              $features = array_slice($features, 0, 3);
            @endphp
            @foreach($features as $feature)
            <li class="flex gap-2"><span class="text-primary">?</span> {{ $feature }}</li>
            @endforeach
          </ul>
          @endif
          
          <div class="flex items-center justify-between mt-6">
            <a href="{{ route('services.show', $service->slug) }}" class="text-primary font-semibold hover:text-primary-dark transition-colors flex items-center text-sm">
              Learn more
              <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
            <a href="{{ route('rfq.create', ['service' => $service->id]) }}" class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-full font-semibold transition-all duration-300 text-sm">
              Get Quote
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- PROCESS -->
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">How It Works</span>
        <h2 class="font-display text-4xl font-black text-gray-900 mt-3">Our Simple Process</h2>
      </div>
      <div class="grid md:grid-cols-4 gap-6">
        <div class="text-center scroll-reveal">
          <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4 text-white font-display font-black text-2xl">1</div>
          <h4 class="font-bold text-gray-900 mb-2">Submit RFQ</h4>
          <p class="text-gray-500 text-sm">Tell us what you need - product, quantity, destination, and timeline.</p>
        </div>
        <div class="text-center scroll-reveal">
          <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4 text-white font-display font-black text-2xl">2</div>
          <h4 class="font-bold text-gray-900 mb-2">Receive Offer</h4>
          <p class="text-gray-500 text-sm">We respond within 24-48 hours with pricing, specs, and availability.</p>
        </div>
        <div class="text-center scroll-reveal">
          <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4 text-white font-display font-black text-2xl">3</div>
          <h4 class="font-bold text-gray-900 mb-2">Agree & Contract</h4>
          <p class="text-gray-500 text-sm">We sign a trade agreement and begin sourcing, inspection, and packaging.</p>
        </div>
        <div class="text-center scroll-reveal">
          <div class="w-16 h-16 bg-primary rounded-full flex items-center justify-center mx-auto mb-4 text-white font-display font-black text-2xl">4</div>
          <h4 class="font-bold text-gray-900 mb-2">Ship & Deliver</h4>
          <p class="text-gray-500 text-sm">Your cargo is shipped with full documentation and tracked to your destination.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="py-20 hero-bg text-center">
    <div class="max-w-4xl mx-auto px-6">
      <h2 class="font-display text-4xl font-black text-white mb-6">Ready to Get Started?</h2>
      <p class="text-green-100 text-lg mb-8">Have questions about our services? Need a custom solution? We're here to help.</p>
      <div class="flex flex-wrap gap-4 justify-center">
        <a href="{{ route('contact') }}" class="bg-white text-primary font-bold px-8 py-4 rounded-full hover:bg-green-50 transition-colors shadow-xl">
          Contact Our Team
        </a>
        <a href="{{ route('rfq.create') }}" class="border-2 border-white/40 text-white font-semibold px-8 py-4 rounded-full hover:bg-white/10 transition-colors">
          Request a Quote
        </a>
      </div>
    </div>
  </section>

</body>
@endsection
