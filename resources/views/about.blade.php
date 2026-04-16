@extends('layouts.app')

@section('title', 'About Us - ' . ($settings['company_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<body class="bg-white" x-data="{ mobileOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

  <!-- HERO -->
  <section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <!-- Background image overlay -->
    <div class="absolute inset-0 opacity-20">
      <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?w=1600&q=80" class="w-full h-full object-cover" alt=""/>
    </div>

    <div class="relative max-w-7xl mx-auto px-6 text-center">
      <div class="animate-float">
        <span class="text-green-200 text-sm font-medium tracking-widest uppercase">About Us</span>
        <h1 class="font-display text-5xl md:text-6xl font-black text-white mt-3 mb-6">About Habtom Abadi</h1>
        <p class="text-green-100 text-lg max-w-2xl mx-auto">Built on integrity, driven by trade, and committed to Ethiopia's global growth.</p>
      </div>
    </div>
  </section>

  <!-- STORY -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
      <div class="scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">Our Foundation</span>
        <h2 class="font-display text-4xl font-black text-gray-900 mt-3 mb-6">Who We Are</h2>
        <p class="text-gray-600 leading-relaxed mb-4">
          Habtom Abadi Import Export was founded with a single, powerful vision: to be the most trusted bridge between Ethiopia's exceptional agricultural output and the world's hungry markets.
        </p>
        <p class="text-gray-600 leading-relaxed mb-4">
          Based in Addis Ababa, we've built deep relationships with farmers, cooperatives, and agricultural communities across Ethiopia's most productive regions - from the coffee forests of Sidama to the sesame plains of Humera, and the grain fields of Oromia.
        </p>
        <p class="text-gray-600 leading-relaxed">
          On the import side, we bring in world-class agricultural equipment - tractors, irrigation systems, storage solutions - to empower Ethiopian farmers with the tools they need to thrive.
        </p>
      </div>
      <div class="relative scroll-reveal">
        <img src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?w=700&q=80" class="rounded-3xl shadow-xl w-full h-96 object-cover" alt="Ethiopian Farmland"/>
        <div class="absolute -bottom-6 -left-6 bg-primary-deeper text-white rounded-2xl p-5 shadow-2xl">
          <div class="font-display text-3xl font-black">10+</div>
          <div class="text-green-300 text-sm">Years of Excellence</div>
        </div>
      </div>
    </div>
  </section>

  <!-- MISSION / VISION / VALUES -->
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">What Drives Us</span>
        <h2 class="font-display text-4xl font-black text-gray-900 mt-3">Mission, Vision & Values</h2>
      </div>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 scroll-reveal">
          <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center mb-6">
            <span class="text-2xl">?</span>
          </div>
          <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
          <p class="text-gray-600 leading-relaxed">To connect Ethiopia's exceptional agricultural produce with global buyers through reliable, transparent, and quality-assured trade - while importing the equipment that powers Ethiopian agriculture.</p>
        </div>
        <div class="bg-primary rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
            <span class="text-2xl">?</span>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-4">Our Vision</h3>
          <p class="text-green-100 leading-relaxed">To become Africa's most recognized and trusted name in agricultural trade - a company synonymous with quality, integrity, and Ethiopia's economic growth on the global stage.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 scroll-reveal">
          <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center mb-6">
            <span class="text-2xl">?</span>
          </div>
          <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Our Values</h3>
          <ul class="text-gray-600 space-y-2 leading-relaxed">
            <li class="flex items-start gap-2"><span class="text-primary mt-1">?</span> Integrity in every transaction</li>
            <li class="flex items-start gap-2"><span class="text-primary mt-1">?</span> Quality without compromise</li>
            <li class="flex items-start gap-2"><span class="text-primary mt-1">?</span> Transparent communication</li>
            <li class="flex items-start gap-2"><span class="text-primary mt-1">?</span> Community & farmer support</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="py-20 hero-bg">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
      <div><div class="font-display text-5xl font-black text-white">500+</div><div class="text-green-300 mt-2">Tons Exported Annually</div></div>
      <div><div class="font-display text-5xl font-black text-white">15+</div><div class="text-green-300 mt-2">Countries Served</div></div>
      <div><div class="font-display text-5xl font-black text-white">8+</div><div class="text-green-300 mt-2">Product Categories</div></div>
      <div><div class="font-display text-5xl font-black text-white">100%</div><div class="text-green-300 mt-2">Quality Certified</div></div>
    </div>
  </section>

</body>
@endsection
