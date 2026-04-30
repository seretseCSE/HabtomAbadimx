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
        <p class="text-green-100 text-body-lg max-w-4xl mx-auto leading-relaxed">Established in 2008, we've been a basis of Ethiopia's international trade sector for over 18 years, connecting Ethiopia's rich agricultural resources with global markets while fueling national development through machinery imports.</p>
      </div>
    </div>
  </section>

  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
      <div class="scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">Our Story</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-3 mb-6">A trading basis since 2008</h2>
        <p class="text-gray-600 text-body-md leading-relaxed mb-6">Founded in the heart of Addis Ababa, Habtom Abadi Import and Export has spent over 18 years building a bridge between Ethiopia's agricultural resources and international markets.</p>
        <p class="text-gray-600 text-body-md leading-relaxed mb-6">Our mission encompasses exporting standard quality Ethiopian agricultural products including coffee seeds, pulses, oilseeds, and spices, while importing construction, agricultural, and manufacturing machinery to support national progress.</p>
        <p class="text-gray-600 text-body-md leading-relaxed">We also deliver all types of goods and liquid national transport services, and are steadily expanding toward manufacturing and local distribution of metals, edible oils, and other demand-based products.</p>
      </div>
      <div class="relative scroll-reveal">
        <img src="https://images.unsplash.com/photo-1529070538774-1843cb3265df?w=700&q=80"
             class="rounded-3xl shadow-xl w-full h-96 object-cover lazy-load"
             alt="Ethiopian trade and export operations"
             loading="lazy" />
        <div class="absolute -bottom-6 -left-6 bg-primary text-white rounded-2xl p-5 shadow-2xl">
          <div class="font-display text-3xl font-black">18+</div>
          <div class="text-green-200 text-sm">Years of Excellence</div>
        </div>
      </div>
    </div>
  </section>

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
              <span>Provide national cargo and liquid transport services.</span>
            </li>
          </ul>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 scroll-reveal">
          <h3 class="font-display text-xl font-bold text-gray-900 mb-4">Core Values</h3>
          <ul class="space-y-3 text-gray-600 text-body-sm leading-relaxed">
            <li class="flex items-center gap-3">
              <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
              Reliability
            </li>
            <li class="flex items-center gap-3">
              <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
              Respect Commitments
            </li>
            <li class="flex items-center gap-3">
              <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
              Customer-Based Service
            </li>
            <li class="flex items-center gap-3">
              <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
              Progressive Dynamism
            </li>
            <li class="flex items-center gap-3">
              <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
              Innovation
            </li>
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
          <h2 class="font-display text-display-lg font-black text-gray-900 mt-4 mb-6">Exporting Ethiopia's finest, importing modern progress.</h2>
          <p class="text-gray-600 text-body-md leading-relaxed mb-6">We offer a balanced trade portfolio with two specialist divisions:</p>
          <div class="space-y-6">
            <div class="bg-gray-50 rounded-3xl p-8 shadow-sm border border-gray-100">
              <h3 class="font-display text-xl font-bold text-gray-900 mb-4">Export Division</h3>
              <p class="text-gray-600 text-body-md leading-relaxed mb-4">We export agricultural products prepared to international standards, earning foreign currency while showcasing Ethiopia's agricultural excellence.</p>
              <ul class="space-y-3 text-gray-600 text-sm">
                <li class="flex items-center gap-3">
                  <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                    Coffee � Yirgacheffe, Sidamo, Ghimbi, Harrar, Jimma, and Limu
                </li>
                <li class="flex items-center gap-3">
                  <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                   Oil seeds � sesame seed, gulo, Nugget, Wool, Linen, and almond
                </li>
                <li class="flex items-center gap-3">
                  <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                   Pulses � green mung, chicken pea, horse pea, red kidney pea, white kidney, and soya bean
                </li>
                <li class="flex items-center gap-3">
                  <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                   Spices � Paper, ginger, black cumin, Turmeric, and Dried Red Chil
                </li>
              </ul>
            </div>
            <div class="bg-gray-50 rounded-3xl p-8 shadow-sm border border-gray-100">
              <h3 class="font-display text-xl font-bold text-gray-900 mb-4">Import Division</h3>
              <p class="text-gray-600 text-body-md leading-relaxed mb-4">We import the technology and machinery required for Ethiopia's growth and development.</p>
              <ul class="space-y-3 text-gray-600 text-sm">
                <li class="flex items-center gap-3">
                  <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                  Automotive � Electric (EV), hybrid, gas-powered cars, buses, and trucks
                </li>
                <li class="flex items-center gap-3">
                  <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                  Construction machinery � dump trucks, excavators, wheel loaders, motor graders, road rollers, bulldozers
                </li>
                <li class="flex items-center gap-3">
                  <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                  Agricultural machinery � modern tractors, harvesters, and farming inputs
                </li>
                <li class="flex items-center gap-3">
                  <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0" aria-hidden="true"></span>
                  General import � metals, soft temper, spare parts, and versatile industrial sourcing
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="scroll-reveal bg-primary rounded-3xl p-12 text-white shadow-xl">
          <h3 class="font-display text-2xl font-black mb-6">National Transport Services</h3>
          <p class="text-body-md leading-relaxed mb-6">We deliver all types of goods and liquid transport services nationwide, supporting the movement of goods across Ethiopia with reliable vehicles and experienced drivers.</p>
          <div class="grid gap-5">
            <div class="rounded-3xl bg-white/10 p-6 backdrop-blur-sm border border-white/20">
              <p class="font-bold text-lg">2021</p>
              <p class="text-green-100 mt-2 text-sm">Launched national transportation with two cargo trucks.</p>
            </div>
            <div class="rounded-3xl bg-white/10 p-6 backdrop-blur-sm border border-white/20">
              <p class="font-bold text-lg">2023</p>
              <p class="text-green-100 mt-2 text-sm">Expanded transportation capacity to 20 fuel trucks.</p>
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
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-4">Experienced leadership powering our growth</h2>
      </div>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-xl font-bold text-gray-900 mb-3">Berhane Abadi</div>
          <div class="text-primary font-semibold mb-4">Chief Executive Officer</div>
          <p class="text-gray-600 text-body-sm">Leading the company's strategy and international trade operations.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-xl font-bold text-gray-900 mb-3">Alemseged Alemayehu</div>
          <div class="text-primary font-semibold mb-4">General Manager</div>
          <p class="text-gray-600 text-body-sm">Overseeing operations, logistics, and customer service delivery.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-xl font-bold text-gray-900 mb-3">Habtom Abadi</div>
          <div class="text-primary font-semibold mb-4">Finance & Administration Director</div>
          <p class="text-gray-600 text-body-sm">Managing financial health and administrative excellence.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-xl font-bold text-gray-900 mb-3">Kehase Haftom</div>
          <div class="text-primary font-semibold mb-4">Documentation</div>
          <p class="text-gray-600 text-body-sm">Ensures smooth import/export paperwork and compliance.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-xl font-bold text-gray-900 mb-3">Yemane Teklu</div>
          <div class="text-primary font-semibold mb-4">Transport Operations Officer</div>
          <p class="text-gray-600 text-body-sm">Coordinates national transport operations and fleet management.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="font-display text-xl font-bold text-gray-900 mb-3">Daniel Fentahun</div>
          <div class="text-primary font-semibold mb-4">IT Operator</div>
          <p class="text-gray-600 text-body-sm">Maintains digital systems and technology operations.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary text-xs font-semibold tracking-widest uppercase">Milestones</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-4">Our journey so far</h2>
      </div>
      <div class="space-y-6">
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold text-lg">2008</p>
          <p class="text-gray-600 mt-2 text-body-md">Founded with two employees and began exporting camels and cattle to Egypt.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold text-lg">2014</p>
          <p class="text-gray-600 mt-2 text-body-md">Expanded export operations to include coffee.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold text-lg">2017</p>
          <p class="text-gray-600 mt-2 text-body-md">Added oilseeds and pulses to our export portfolio and began importing heavy machinery.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold text-lg">2018</p>
          <p class="text-gray-600 mt-2 text-body-md">Started importing vehicles, metals, and soft temper products.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold text-lg">2021</p>
          <p class="text-gray-600 mt-2 text-body-md">Launched national transportation with two cargo trucks.</p>
        </div>
        <div class="rounded-3xl border border-gray-100 p-8 shadow-sm scroll-reveal">
          <p class="text-primary font-semibold text-lg">2023</p>
          <p class="text-gray-600 mt-2 text-body-md">Expanded transportation capacity to 20 fuel trucks.</p>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
