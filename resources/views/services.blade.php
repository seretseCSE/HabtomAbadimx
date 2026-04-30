@extends('layouts.app')

@section('title', 'Services - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<main id="main-content" class="bg-white text-gray-900">

  <!-- HERO -->
  <section class="hero-bg min-h-[70vh] flex items-center relative overflow-hidden" aria-labelledby="services-hero-heading">
    <div class="absolute inset-0 opacity-20">
      <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ff?w=1600&q=80"
           class="w-full h-full object-cover lazy-load"
           alt="Global trade and logistics operations"
           loading="eager" />
    </div>

    <div class="absolute top-24 left-10 w-96 h-96 bg-gold opacity-10 rounded-full -translate-x-1/2 animate-float-continuous" aria-hidden="true"></div>
    <div class="absolute bottom-0 right-10 w-72 h-72 bg-primary-light opacity-10 rounded-full translate-x-1/2 translate-y-1/2 animate-float-continuous" aria-hidden="true" style="animation-delay: 1s;"></div>

    <div class="relative max-w-7xl mx-auto px-8 text-center">
      <div class="animate-float">
        <div class="inline-flex items-center gap-3 bg-white/10 rounded-full px-6 py-3 mb-8 backdrop-blur-sm">
          <span class="w-3 h-3 bg-gold rounded-full animate-pulse-glow" aria-hidden="true"></span>
          <span class="text-green-200 text-sm font-semibold tracking-wider uppercase">Our Services</span>
        </div>

        <h1 id="services-hero-heading" class="font-display text-hero font-black text-white mt-4 mb-8">Comprehensive Trade Solutions</h1>
        <p class="text-green-100 text-body-lg max-w-4xl mx-auto leading-relaxed">Established in 2000, Habtom Abadi Import and Export has been a basis of Ethiopia's international trade sector for over two decades. Based in the heart of Addis Ababa, we specialize in closing the gap between Ethiopia's rich agricultural resources and the global market, while simultaneously fueling national development through the importation of standard machinery and technology.</p>
      </div>
    </div>
  </section>

  <!-- Export Division Detail -->
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">Bringing Ethiopia to the World</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-3">Export Division</h2>
        <p class="text-gray-600 text-body-md max-w-3xl mx-auto mt-4">We take pride in exporting the finest organic products Ethiopia has to offer. Our export division bridges Ethiopia's rich agricultural resources with the global market, earning foreign currency while showcasing Ethiopia's agricultural excellence.</p>
      </div>

      <div class="grid md:grid-cols-2 gap-8">
        <div class="scroll-reveal bg-white rounded-3xl p-8 shadow-lg border border-gray-100">
          <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-gray-900 mb-3">Coffee</h3>
          <p class="text-gray-600 text-body-sm leading-relaxed">Coffee beans, world-renowned for their unique flavors. We export Yirgacheffe, Sidamo, Harrar, Jimma, Limu, and Ghimbi varieties to international markets.</p>
        </div>

        <div class="scroll-reveal bg-white rounded-3xl p-8 shadow-lg border border-gray-100">
          <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-gray-900 mb-3">Oilseeds</h3>
          <p class="text-gray-600 text-body-sm leading-relaxed">High-quality sesame seeds, Niger (Noog) seeds, soybeans, and linseed (flaxseed). Ethiopia is one of the world's largest producers of Niger seed.</p>
        </div>

        <div class="scroll-reveal bg-white rounded-3xl p-8 shadow-lg border border-gray-100">
          <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-gray-900 mb-3">Pulses</h3>
          <p class="text-gray-600 text-body-sm leading-relaxed">A variety of beans, chickpeas, and lentils processed for international standards. Including green mung, horse pea, red kidney pea, white kidney, and soya bean.</p>
        </div>

        <div class="scroll-reveal bg-white rounded-3xl p-8 shadow-lg border border-gray-100">
          <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path>
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-gray-900 mb-3">Spices</h3>
          <p class="text-gray-600 text-body-sm leading-relaxed">High quality pepper, ginger, black cumin, turmeric, and dried red chili. Ethiopia's tropical highlands provide ideal growing conditions for these aromatic spices.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Import Division Detail -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">Engineering National Growth</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-3">Import Division</h2>
        <p class="text-gray-600 text-body-md max-w-3xl mx-auto mt-4">We supply the essential tools needed for a developing economy. Our import division fuels national development through the importation of machinery, vehicles, and technology.</p>
      </div>

      <div class="grid md:grid-cols-2 gap-8">
        <div class="scroll-reveal bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 shadow-lg border border-gray-100">
          <div class="w-14 h-14 bg-gold rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-gray-900 mb-3">Automotive</h3>
          <p class="text-gray-600 text-body-sm leading-relaxed">A wide range of vehicles including electric (EV), hybrid, gas-powered cars, and heavy-duty buses. We source reliable vehicles suited for African road conditions.</p>
        </div>

        <div class="scroll-reveal bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 shadow-lg border border-gray-100">
          <div class="w-14 h-14 bg-gold rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-gray-900 mb-3">Construction Machinery</h3>
          <p class="text-gray-600 text-body-sm leading-relaxed">Industrial-grade equipment and essential inputs for infrastructure and mining projects. Including dump trucks, excavators, wheel loaders, motor graders, road rollers, bulldozers, and mixers.</p>
        </div>

        <div class="scroll-reveal bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 shadow-lg border border-gray-100">
          <div class="w-14 h-14 bg-gold rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-gray-900 mb-3">Agricultural Machinery</h3>
          <p class="text-gray-600 text-body-sm leading-relaxed">Modern tractors, harvesters, and farming inputs to modernize Ethiopian agriculture. High-performance 4WD tractors and self-propelled combine harvesters for wheat, maize, and teff.</p>
        </div>

        <div class="scroll-reveal bg-gradient-to-br from-gray-50 to-white rounded-3xl p-8 shadow-lg border border-gray-100">
          <div class="w-14 h-14 bg-gold rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
            </svg>
          </div>
          <h3 class="font-display text-xl font-bold text-gray-900 mb-3">General Import</h3>
          <p class="text-gray-600 text-body-sm leading-relaxed">Versatile sourcing capabilities to meet any specific industrial or commercial need. Metals, soft temper, spare parts, and comprehensive OEM and aftermarket parts for vehicles and machinery.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- National Transport -->
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="scroll-reveal">
          <span class="text-primary text-xs font-semibold tracking-widest uppercase">Transportation</span>
          <h2 class="font-display text-display-lg font-black text-gray-900 mt-4 mb-6">National Transport Services</h2>
          <p class="text-gray-600 text-body-md leading-relaxed mb-6">Delivering all types of goods and liquid national transport services. We support the movement of goods across Ethiopia with reliable vehicles and experienced logistics professionals.</p>
          <div class="space-y-4">
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <span class="text-white font-bold text-sm">✓</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">All Types of Goods</h4>
                <p class="text-gray-600 text-sm">Comprehensive goods transportation solutions for all industries across Ethiopia.</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <span class="text-white font-bold text-sm">✓</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Liquid Fuel Transport</h4>
                <p class="text-gray-600 text-sm">Specialized fuel transportation with modern fleet and safety protocols.</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <span class="text-white font-bold text-sm">✓</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Nationwide Coverage</h4>
                <p class="text-gray-600 text-sm">Complete delivery network with experienced drivers and logistics professionals.</p>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                <span class="text-white font-bold text-sm">✓</span>
              </div>
              <div>
                <h4 class="font-semibold text-gray-900 mb-1">Timely Delivery</h4>
                <p class="text-gray-600 text-sm">Reliable and punctual service guarantee for all transport operations.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="scroll-reveal">
          <div class="bg-primary rounded-3xl p-8 text-white shadow-xl">
            <h3 class="font-display text-2xl font-black mb-6">Fleet & Milestones</h3>
            <div class="space-y-6">
              <div class="rounded-3xl bg-white/10 p-6 backdrop-blur-sm border border-white/20">
                <div class="flex items-center justify-between mb-2">
                  <p class="font-bold text-lg">2021</p>
                  <span class="text-green-300 text-sm">Launch</span>
                </div>
                <p class="text-green-100 text-sm">Launched national transportation with two cargo trucks, marking our entry into logistics services.</p>
              </div>
              <div class="rounded-3xl bg-white/10 p-6 backdrop-blur-sm border border-white/20">
                <div class="flex items-center justify-between mb-2">
                  <p class="font-bold text-lg">2023</p>
                  <span class="text-green-300 text-sm">Expansion</span>
                </div>
                <p class="text-green-100 text-sm">Expanded transportation capacity to 20 fuel trucks, dramatically increasing our service capabilities.</p>
              </div>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-6">
              <div class="bg-white/10 rounded-2xl p-4 text-center border border-white/20">
                <div class="text-3xl font-black">20+</div>
                <div class="text-green-200 text-sm">Fuel Trucks</div>
              </div>
              <div class="bg-white/10 rounded-2xl p-4 text-center border border-white/20">
                <div class="text-3xl font-black">2</div>
                <div class="text-green-200 text-sm">cargo trucks</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Company Milestones -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary text-xs font-semibold tracking-widest uppercase">Our Journey</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-4">Company Milestones</h2>
        <p class="text-gray-600 text-body-md max-w-2xl mx-auto mt-4">Key milestones in our growth from a small trading company to a comprehensive import-export and logistics provider.</p>
      </div>

      <div class="relative">
        <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gray-200 hidden lg:block"></div>

        <div class="space-y-12">
          <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
            <div class="lg:w-1/2 lg:text-right">
              <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 inline-block">
                <h4 class="font-display text-xl font-bold text-gray-900 mb-2">2008</h4>
                <p class="text-gray-600 text-sm">Company was created with 2 employees and started exporting camels and cattle to Egypt.</p>
              </div>
            </div>
            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">08</div>
            <div class="lg:w-1/2"></div>
          </div>

          <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
            <div class="lg:w-1/2"></div>
            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">14</div>
            <div class="lg:w-1/2 lg:text-left">
              <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 inline-block">
                <h4 class="font-display text-xl font-bold text-gray-900 mb-2">2014</h4>
                <p class="text-gray-600 text-sm">Started exporting coffee, expanding our agricultural product portfolio.</p>
              </div>
            </div>
          </div>

          <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
            <div class="lg:w-1/2 lg:text-right">
              <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 inline-block">
                <h4 class="font-display text-xl font-bold text-gray-900 mb-2">2017</h4>
                <p class="text-gray-600 text-sm">Expanded our export division to oil seeds and pulses. Our importing journey began with heavy machines.</p>
              </div>
            </div>
            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">17</div>
            <div class="lg:w-1/2"></div>
          </div>

          <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
            <div class="lg:w-1/2"></div>
            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">18</div>
            <div class="lg:w-1/2 lg:text-left">
              <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 inline-block">
                <h4 class="font-display text-xl font-bold text-gray-900 mb-2">2018</h4>
                <p class="text-gray-600 text-sm">Began importing vehicles (buses and fuel cars), metals, and soft temper.</p>
              </div>
            </div>
          </div>

          <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
            <div class="lg:w-1/2 lg:text-right">
              <div class="bg-gray-50 rounded-2xl p-6 border border-gray-100 inline-block">
                <h4 class="font-display text-xl font-bold text-gray-900 mb-2">2021</h4>
                <p class="text-gray-600 text-sm">Launched national transportation services with 2 cargo trucks.</p>
              </div>
            </div>
            <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">21</div>
            <div class="lg:w-1/2"></div>
          </div>

          <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
            <div class="lg:w-1/2"></div>
            <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">23</div>
            <div class="lg:w-1/2 lg:text-left">
              <div class="bg-gold/10 rounded-2xl p-6 border border-gold/20 inline-block">
                <h4 class="font-display text-xl font-bold text-gray-900 mb-2">2023</h4>
                <p class="text-gray-600 text-sm">Expanded our transportation fleet with 20 fuel trucks, dramatically increasing logistics capabilities.</p>
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

  <!-- Our Process -->
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

  <!-- CTA -->
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
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
