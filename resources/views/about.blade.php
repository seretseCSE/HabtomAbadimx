@extends('layouts.app')

@section('title', 'About Us - ' . ($settings['company_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<body class="bg-white" x-data="{ mobileOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

  <section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
      <img src="https://images.unsplash.com/photo-1500530855697-b586d89ba3ee?w=1600&q=80" class="w-full h-full object-cover" alt="Habtom Abadi leadership" />
    </div>
    <div class="absolute top-24 left-10 w-96 h-96 bg-gold opacity-10 rounded-full -translate-x-1/2"></div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
      <div class="animate-float">
        <span class="text-green-200 text-sm font-medium tracking-widest uppercase">About Us</span>
        <h1 class="font-display text-5xl md:text-6xl font-black text-white mt-3 mb-6">Habtom Abadi Import & Export</h1>
        <p class="text-green-100 text-lg max-w-2xl mx-auto">A trusted Addis Ababa-based trading company linking Ethiopia’s agriculture with the world and bringing in the machinery that drives national development.</p>
      </div>
    </div>
  </section>

  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
      <div class="scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">Our Story</span>
        <h2 class="font-display text-4xl font-black text-gray-900 mt-3 mb-6">A trading cornerstone since 2000</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Founded in the heart of Addis Ababa, Habtom Abadi Import and Export has spent over two decades building a bridge between Ethiopia’s agricultural resources and international markets.</p>
        <p class="text-gray-600 leading-relaxed mb-4">Our mission is to export standard-quality coffee seeds, pulses, oilseeds, and spices while importing construction, agricultural, and manufacturing machinery to support national progress.</p>
        <p class="text-gray-600 leading-relaxed">We also operate reliable cargo and liquid transport services, and we are steadily expanding toward manufacturing and local distribution of metals, edible oils, and other demand-based products.</p>
      </div>
      <div class="relative scroll-reveal">
        <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=700&q=80" class="rounded-3xl shadow-xl w-full h-96 object-cover" alt="Ethiopian trade and export" />
        <div class="absolute -bottom-6 -left-6 bg-primary text-white rounded-2xl p-5 shadow-2xl">
          <div class="font-display text-3xl font-black">22</div>
          <div class="text-green-200 text-sm">Years of Experience</div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">Corporate Identity</span>
        <h2 class="font-display text-4xl font-black text-gray-900 mt-3">Vision, Mission & Values</h2>
      </div>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 scroll-reveal">
          <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Vision</h3>
          <p class="text-gray-600 leading-relaxed">To be a vibrant, reliable and competent international trader known for driving Ethiopia’s growth through trade excellence.</p>
        </div>
        <div class="bg-primary rounded-3xl p-8 shadow-sm scroll-reveal text-white">
          <h3 class="font-display text-2xl font-bold mb-4">Mission</h3>
          <p class="leading-relaxed">Export high-quality Ethiopian agricultural products to earn foreign currency and import the machinery needed for construction, farming, and industry.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 scroll-reveal">
          <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Core Values</h3>
          <ul class="space-y-3 text-gray-600 leading-relaxed">
            <li>Reliability</li>
            <li>Keeping commitments</li>
            <li>Customer-focused service</li>
            <li>Progressive dynamism</li>
            <li>Positive, can-do attitude</li>
            <li>Innovation</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-12 items-start">
        <div class="scroll-reveal">
          <span class="text-primary text-xs font-semibold tracking-widest uppercase">Export & Import</span>
          <h2 class="font-display text-4xl font-black text-gray-900 mt-4 mb-6">Exporting Ethiopia’s finest, importing modern progress.</h2>
          <p class="text-gray-600 leading-relaxed mb-6">We offer a balanced trade portfolio with two specialist divisions:</p>
          <div class="space-y-6">
            <div class="bg-gray-50 rounded-3xl p-8 shadow-sm border border-gray-100">
              <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Export Division</h3>
              <p class="text-gray-600 leading-relaxed mb-4">We export premium agricultural products prepared to international standards.</p>
              <ul class="space-y-3 text-gray-600">
                <li>Premium Arabica coffee beans</li>
                <li>Sesame, Niger seeds, soybeans, peanuts, linseed</li>
                <li>Chickpeas, red kidney beans, white pea beans, faba beans</li>
                <li>Spices and other high-value commodities</li>
              </ul>
            </div>
            <div class="bg-gray-50 rounded-3xl p-8 shadow-sm border border-gray-100">
              <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Import Division</h3>
              <p class="text-gray-600 leading-relaxed mb-4">We import the technology required for Ethiopia’s growth.</p>
              <ul class="space-y-3 text-gray-600">
                <li>Electric, hybrid, and gas-powered vehicles</li>
                <li>Industrial construction machinery</li>
                <li>Modern tractors, harvesters and farm inputs</li>
                <li>Custom sourcing for commercial needs</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="scroll-reveal bg-primary rounded-3xl p-12 text-white shadow-xl">
          <h3 class="font-display text-3xl font-black mb-6">National Transport Services</h3>
          <p class="leading-relaxed mb-6">We deliver cargo and liquid transport services nationwide, supporting the movement of goods across Ethiopia with reliable vehicles and experienced drivers.</p>
          <div class="grid gap-5">
            <div class="rounded-3xl bg-white/10 p-6">
              <p class="font-bold text-lg">2021</p>
              <p class="text-green-100 mt-2">Launched national transportation with two cargo trucks.</p>
            </div>
            <div class="rounded-3xl bg-white/10 p-6">
              <p class="font-bold text-lg">2023</p>
              <p class="text-green-100 mt-2">Expanded transportation capacity to 20 fuel trucks.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary text-xs font-semibold tracking-widest uppercase">Leadership & Team</span>
        <h2 class="font-display text-4xl font-black text-gray-900 mt-4">Experienced leadership powering our growth</h2>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-2xl font-bold text-gray-900 mb-3">Berhane Abadi</div>
          <div class="text-primary font-semibold mb-4">Chief Executive Officer</div>
          <p class="text-gray-600">Leading the company’s strategy and international trade operations.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-2xl font-bold text-gray-900 mb-3">Alemseged Alemayehu</div>
          <div class="text-primary font-semibold mb-4">General Manager</div>
          <p class="text-gray-600">Overseeing operations, logistics, and customer service delivery.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-2xl font-bold text-gray-900 mb-3">Habtom Abadi</div>
          <div class="text-primary font-semibold mb-4">Finance & Administration Director</div>
          <p class="text-gray-600">Managing financial health and administrative excellence.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-2xl font-bold text-gray-900 mb-3">Kehase Haftom</div>
          <div class="text-primary font-semibold mb-4">Documentation</div>
          <p class="text-gray-600">Ensures smooth import/export paperwork and compliance.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-2xl font-bold text-gray-900 mb-3">Yemane Teklu</div>
          <div class="text-primary font-semibold mb-4">Transport Operations Officer</div>
          <p class="text-gray-600">Coordinates national cargo operations and fleet management.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-2xl font-bold text-gray-900 mb-3">Daniel Fentahun</div>
          <div class="text-primary font-semibold mb-4">IT Operator</div>
          <p class="text-gray-600">Maintains digital systems and technology operations.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary text-xs font-semibold tracking-widest uppercase">Milestones</span>
        <h2 class="font-display text-4xl font-black text-gray-900 mt-4">Our journey so far</h2>
      </div>
      <div class="space-y-6">
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold">2008</p>
          <p class="text-gray-600 mt-2">Founded with two employees and began exporting camels and cattle to Egypt.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold">2014</p>
          <p class="text-gray-600 mt-2">Expanded export operations to include coffee.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold">2017</p>
          <p class="text-gray-600 mt-2">Added oilseeds and pulses to our export portfolio and began importing heavy machinery.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold">2018</p>
          <p class="text-gray-600 mt-2">Started importing vehicles, metals, and soft temper products.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold">2021</p>
          <p class="text-gray-600 mt-2">Launched national transportation with two cargo trucks.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold">2023</p>
          <p class="text-gray-600 mt-2">Expanded transportation capacity to 20 fuel trucks.</p>
        </div>
      </div>
    </div>
  </section>

</body>
@endsection
