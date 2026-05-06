@extends('layouts.app')

@section('title', 'About Us - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<main id="main-content" class="bg-white text-gray-900">

  <section class="hero-bg min-h-screen flex items-center relative overflow-hidden" aria-labelledby="about-hero-heading">
    <div class="absolute inset-0 opacity-20">
      <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=1600&q=80"
           class="w-full h-full object-cover lazy-load"
           alt="Habtom Abadi leadership team and corporate headquarters"
           loading="eager" />
    </div>

    <!-- Enhanced decorative elements -->
    <div class="absolute top-24 left-10 w-96 h-96 bg-gold opacity-10 rounded-full -translate-x-1/2 animate-float-continuous" aria-hidden="true"></div>
    <div class="absolute bottom-0 right-10 w-72 h-72 bg-primary-light opacity-10 rounded-full translate-x-1/2 translate-y-1/2 animate-float-continuous" aria-hidden="true" style="animation-delay: 1s;"></div>

    <div class="relative max-w-7xl mx-auto px-8 text-center">
      <div class="animate-float">
        <div class="inline-flex items-center gap-3 bg-white/10 rounded-full px-6 py-3 mb-8 backdrop-blur-sm">
          <span class="w-3 h-3 bg-gold rounded-full animate-pulse-glow" aria-hidden="true"></span>
          <span class="text-green-200 text-sm font-semibold tracking-wider uppercase">About Us</span>
        </div>

        <h1 id="about-hero-heading" class="font-display text-hero font-black text-white mt-4 mb-8">Habtom Abadi Import & Export</h1>
        <p class="text-green-100 text-body-lg max-w-4xl mx-auto leading-relaxed">
            We manage the export of Ethiopia’s top-grade coffee and crops, ensuring they meet global quality standards and our clients needs.
            Our import division specializes in bringing advanced industrial machinery and modern electric vehicles to the market to increase business efficiency. These services are backed by our regionwide transport fleet, providing fast and secure delivery for fuel and cargo. Our team guarantees professional, safe, and on-time results for every partner
        </p>
    </div>
    </div>
  </section>

  <!-- Section 1: Our Story -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
    <div class="scroll-reveal">
      <span class="text-primary font-semibold text-sm tracking-widest uppercase">Our Foundation</span>
      <h2 class="font-display text-display-lg font-black text-gray-900 mt-3 mb-6">A Legacy of Excellence Since 2008</h2>
      <p class="text-gray-600 text-body-md leading-relaxed mb-6">Founded in the heart of Addis Ababa, Habtom Abadi Import and Export has spent over 18 years establishing itself as a bridge between Ethiopia’s resources and the global market.</p>
      <p class="text-gray-600 text-body-md leading-relaxed mb-6">We specialize in the professional export of high-quality agricultural goods while importing the advanced machinery and automotive technology required for modern business success.</p>
      <p class="text-gray-600 text-body-md leading-relaxed">With an expanding presence in manufacturing and a professional logistics network, we deliver the stability and results your business depends on.</p>
    </div>
    <div class="relative scroll-reveal">
      <img src="aboutus.jpg" class="rounded-3xl shadow-xl w-full h-96 object-cover lazy-load" alt="Ethiopian trade and export operations" loading="lazy" />
      <div class="absolute -bottom-6 -left-6 bg-primary text-white rounded-2xl p-5 shadow-2xl">
        <div class="font-display text-3xl font-black">18+</div>
        <div class="text-green-200 text-sm">Years of Excellence</div>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: Corporate Identity (Mission, Vision, Values) -->
<section class="py-24 bg-gray-50">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16 scroll-reveal">
      <span class="text-primary font-semibold text-sm tracking-widest uppercase">Corporate Identity</span>
      <h2 class="font-display text-display-lg font-black text-gray-900 mt-3">Vision, Mission & Values</h2>
    </div>
    <div class="grid md:grid-cols-3 gap-8">
      <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 scroll-reveal">
        <h3 class="font-display text-xl font-bold text-gray-900 mb-4">Vision</h3>
        <p class="text-gray-600 text-body-md leading-relaxed">To be one of the vibrant, reliable, and competent international traders.</p>
      </div>
      <div class="bg-primary rounded-3xl p-8 shadow-sm scroll-reveal text-white">
        <h3 class="font-display text-xl font-bold mb-4">Mission</h3>
        <ul class="space-y-2 text-body-sm leading-relaxed">
          <li class="flex items-start gap-3">
            <span class="w-2 h-2 bg-white rounded-full flex-shrink-0 mt-1.5" aria-hidden="true"></span>
            <span>Export Ethiopian agricultural products: coffee, pulses, oilseeds, and spices.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="w-2 h-2 bg-white rounded-full flex-shrink-0 mt-1.5" aria-hidden="true"></span>
            <span>Import construction, agricultural, and manufacturing machinery.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="w-2 h-2 bg-white rounded-full flex-shrink-0 mt-1.5" aria-hidden="true"></span>
            <span>Expand into manufacturing and product distribution.</span>
          </li>
          <li class="flex items-start gap-3">
            <span class="w-2 h-2 bg-white rounded-full flex-shrink-0 mt-1.5" aria-hidden="true"></span>
            <span>Provide regional cargo and liquid transport services.</span>
          </li>
        </ul>
      </div>
      <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 scroll-reveal">
        <h3 class="font-display text-xl font-bold text-gray-900 mb-4">Core Values</h3>
        <ul class="space-y-3 text-gray-600 text-body-sm leading-relaxed">
          <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span> Reliability</li>
          <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span> Respect Commitments</li>
          <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span> Customer-Based Service</li>
          <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span> Progressive Dynamism</li>
          <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span> Innovation</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Section 3: Trade Divisions & Logistics -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-12 items-start">
      <div class="scroll-reveal">
        <span class="text-primary text-xs font-semibold tracking-widest uppercase">Trade Divisions</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-4 mb-6">Global Exports & Strategic Imports</h2>
        <div class="space-y-6">
          <div class="bg-gray-50 rounded-3xl p-8 shadow-sm border border-gray-100">
            <h3 class="font-display text-xl font-bold text-gray-900 mb-4">Export Division</h3>
            <ul class="space-y-3 text-gray-600 text-sm">
              <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span><b>Coffee</b> - Yirgacheffe, Sidamo, Harrar, Jimma, and Limu</li>
              <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span><b>Oil seeds</b> - Sesame, Custard seed, Nugget, and Almond</li>
              <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span><b>Pulses</b> - Green mung, Chickpea, and Soya bean</li>
              <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span><b>Spices</b> - Ginger, Black cumin, and Turmeric</li>
            </ul>
          </div>
          <div class="bg-gray-50 rounded-3xl p-8 shadow-sm border border-gray-100">
            <h3 class="font-display text-xl font-bold text-gray-900 mb-4">Import Division</h3>
            <ul class="space-y-3 text-gray-600 text-sm">
              <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span><b>Automotive</b> - EV, Hybrid, Buses, and Trucks</li>
              <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span><b>Construction</b> - Excavators, Dump trucks, and Loaders</li>
              <li class="flex items-center gap-3"><span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span><b>Agriculture</b> - Modern Tractors and Harvesters</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="scroll-reveal bg-primary rounded-3xl p-12 text-white shadow-xl">
        <h3 class="font-display text-2xl font-black mb-6">Logistics & Transport Service</h3>
        <p class="text-body-md leading-relaxed mb-6">
            We provide fast, secure, and reliable delivery for fuel and cargo across a vast network that extends throughout Ethiopia and into neighboring countries.
            Supported by an expanding fleet and expert drivers, our operations ensure seamless cross-border logistics and regional connectivity.        </p>
        <div class="grid gap-5">
          <div class="rounded-3xl bg-white/10 p-6 backdrop-blur-sm border border-white/20">
            <p class="font-bold text-lg">2021</p>
            <p class="text-green-100 mt-2 text-sm">Launched national logistics with cargo truck operations.</p>
          </div>
          <div class="rounded-3xl bg-white/10 p-6 backdrop-blur-sm border border-white/20">
            <p class="font-bold text-lg">2023</p>
            <p class="text-green-100 mt-2 text-sm">Expanded capacity to 20 fuel trucks for specialized liquid transport.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: Milestones (Enhanced Font Size) -->
<section class="py-24 bg-white">
  <div class="max-w-7xl mx-auto px-6">
    <div class="text-center mb-16 scroll-reveal">
      <span class="text-primary text-xs font-semibold tracking-widest uppercase">Our Journey</span>
      <h2 class="font-display text-display-lg font-black text-gray-900 mt-4">Company Milestones</h2>
    </div>
    <div class="relative">
      <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-gray-200 hidden lg:block"></div>
      <div class="space-y-12">
        <!-- 2008 -->
        <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
          <div class="lg:w-1/2 lg:text-right">
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 inline-block">
              <h4 class="font-display text-2xl font-bold text-gray-900 mb-2">2008</h4>
              <p class="text-gray-700 text-lg font-semibold">Established with a focus on livestock exports to international markets.</p>
            </div>
          </div>
          <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">08</div>
          <div class="lg:w-1/2"></div>
        </div>
        <!-- 2014 -->
        <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
          <div class="lg:w-1/2"></div>
          <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">14</div>
          <div class="lg:w-1/2 lg:text-left">
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 inline-block">
              <h4 class="font-display text-2xl font-bold text-gray-900 mb-2">2014</h4>
              <p class="text-gray-700 text-lg font-semibold">Diversified operations into the global coffee export sector.</p>
            </div>
          </div>
        </div>
        <!-- 2017 -->
        <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
          <div class="lg:w-1/2 lg:text-right">
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 inline-block">
              <h4 class="font-display text-2xl font-bold text-gray-900 mb-2">2017</h4>
              <p class="text-gray-700 text-lg font-semibold">Expanded into oilseeds and pulses; launched the industrial machinery import division.</p>
            </div>
          </div>
          <div class="w-12 h-12 bg-primary rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">17</div>
          <div class="lg:w-1/2"></div>
        </div>
        <!-- 2023 (Highlight) -->
        <div class="scroll-reveal flex flex-col lg:flex-row items-center gap-8">
          <div class="lg:w-1/2"></div>
          <div class="w-12 h-12 bg-gold rounded-full flex items-center justify-center text-white font-bold z-10 flex-shrink-0">23</div>
          <div class="lg:w-1/2 lg:text-left">
            <div class="bg-gold/10 rounded-2xl p-8 border border-gold/20 inline-block">
              <h4 class="font-display text-2xl font-bold text-gray-900 mb-2">2023</h4>
              <p class="text-gray-700 text-lg font-bold">Expanded the fleet to 20 fuel trucks, dramatically increasing regional logistics capacity.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>
@endsection
