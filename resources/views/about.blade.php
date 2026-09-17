@extends('layouts.app')

@section('title', 'About Us - ' . ($settings['company_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<body class="bg-white" x-data="{ mobileOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

  <!-- HERO -->
  <section class="hero-bg relative overflow-hidden pt-40 pb-20 md:pt-44 md:pb-24">
    <!-- Background image overlay -->
    <div class="absolute inset-0 opacity-20">
      <img src="{{ asset('images/company/coffee-workers.jpg') }}" class="w-full h-full object-cover" alt=""/>
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
          Habtom Abadi Import and Export was founded in Addis Ababa in 2000 with a clear purpose: to be a trusted bridge between Ethiopia’s agricultural produce and global markets.
        </p>
        <p class="text-gray-600 leading-relaxed mb-4">
          We work with farmers, cooperatives, and producers across the country’s most productive regions — from the coffee forests of Sidama to the sesame plains of Humera and the grain fields of Oromia — exporting coffee, oilseeds, pulses, and spices.
        </p>
        <p class="text-gray-600 leading-relaxed">
          On the import side, we bring in construction, farming, and transport equipment, including machinery and a growing fuel-truck fleet, to support national development.
        </p>
      </div>
      <div class="relative scroll-reveal">
        <img src="{{ asset('images/company/coffee-drying.jpg') }}" class="rounded-3xl shadow-xl w-full h-96 object-cover" alt="Ethiopian coffee drying for export"/>
        <div class="absolute -bottom-6 -left-6 bg-primary-deeper text-white rounded-2xl p-5 shadow-2xl">
          <div class="font-display text-3xl font-black">2000</div>
          <div class="text-green-300 text-sm">Founded in Addis Ababa</div>
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
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Our Mission</h3>
          <p class="text-gray-600 leading-relaxed">To connect Ethiopian coffee, oilseeds, pulses, and spices with global buyers through reliable, transparent trade — while importing construction, farming, and transport equipment that supports national growth.</p>
        </div>
        <div class="bg-primary rounded-3xl p-8 shadow-sm scroll-reveal">
          <div class="w-14 h-14 bg-white/20 rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-white mb-4">Our Vision</h3>
          <p class="text-green-100 leading-relaxed">To become Africa's most recognized and trusted name in agricultural trade - a company synonymous with quality, integrity, and Ethiopia's economic growth on the global stage.</p>
        </div>
        <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 scroll-reveal">
          <div class="w-14 h-14 bg-primary rounded-2xl flex items-center justify-center mb-6">
            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
          <h3 class="font-display text-2xl font-bold text-gray-900 mb-4">Our Values</h3>
          <ul class="text-gray-600 space-y-2 leading-relaxed">
            <li class="flex items-start gap-2"><span class="text-primary mt-1">•</span> Integrity in every transaction</li>
            <li class="flex items-start gap-2"><span class="text-primary mt-1">•</span> Quality without compromise</li>
            <li class="flex items-start gap-2"><span class="text-primary mt-1">•</span> Transparent communication</li>
            <li class="flex items-start gap-2"><span class="text-primary mt-1">•</span> Community & farmer support</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="py-20 hero-bg">
    <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
      <div><div class="font-display text-5xl font-black text-white">2000</div><div class="text-green-300 mt-2">Founded in Addis Ababa</div></div>
      <div><div class="font-display text-5xl font-black text-white">15+</div><div class="text-green-300 mt-2">Countries Served</div></div>
      <div><div class="font-display text-5xl font-black text-white">8+</div><div class="text-green-300 mt-2">Export Product Lines</div></div>
      <div><div class="font-display text-5xl font-black text-white">20</div><div class="text-green-300 mt-2">Fuel Trucks in Fleet</div></div>
    </div>
  </section>

  <!-- TEAM -->
  @if($teamMembers->isNotEmpty())
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">The People</span>
        <h2 class="font-display text-4xl font-black text-gray-900 mt-3">Meet Our Team</h2>
      </div>
      <style>
        .team-carousel-wrapper {
          overflow: hidden;
        }
        .team-carousel-track {
          display: flex;
          gap: 2rem;
          animation: team-scroll 20s linear infinite;
        }
        .team-carousel-item {
          min-width: 22%;
          flex-shrink: 0;
        }
        .team-carousel-wrapper::-webkit-scrollbar { display: none; }
        .team-carousel-wrapper { -ms-overflow-style: none; scrollbar-width: none; }
        @keyframes team-scroll {
          0% { transform: translateX(0); }
          100% { transform: translateX(-50%); }
        }
      </style>
      <div class="relative">
        <div class="absolute inset-y-0 left-0 w-16 md:w-24 bg-gradient-to-r from-white to-transparent pointer-events-none"></div>
        <div class="absolute inset-y-0 right-0 w-16 md:w-24 bg-gradient-to-l from-white to-transparent pointer-events-none"></div>
        <div class="team-carousel-wrapper py-6">
          <div class="team-carousel-track">
            @foreach($teamMembers->take(6) as $index => $member)
            @php
                $ethiopianPhotos = [
                    'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&q=80',
                    'https://images.unsplash.com/photo-1494790108755-2616b612b786?w=300&q=80',
                    'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&q=80',
                    'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&q=80',
                    'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&q=80',
                    'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300&q=80'
                ];
                $photoUrl = $member->photo ? asset('storage/' . $member->photo) : $ethiopianPhotos[$index % count($ethiopianPhotos)];
            @endphp
            <div class="team-carousel-item text-center scroll-reveal">
              <div class="relative mb-6">
                <img src="{{ $photoUrl }}" class="w-full h-72 object-cover rounded-full shadow-xl" alt="{{ $member->name }}"/>
                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full">{{ $member->role ?? 'Team' }}</div>
              </div>
              <h4 class="font-bold text-gray-900 mt-4">{{ $member->name }}</h4>
              <p class="text-gray-500 text-sm">{{ $member->position }}</p>
            </div>
            @endforeach
            @foreach($teamMembers->take(6) as $index => $member)
            @php
                $ethiopianPhotos = [
                    'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&q=80',
                    'https://images.unsplash.com/photo-1494790108755-2616b612b786?w=300&q=80',
                    'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&q=80',
                    'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&q=80',
                    'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&q=80',
                    'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300&q=80'
                ];
                $photoUrl = $member->photo ? asset('storage/' . $member->photo) : $ethiopianPhotos[$index % count($ethiopianPhotos)];
            @endphp
            <div class="team-carousel-item text-center scroll-reveal">
              <div class="relative mb-6">
                <img src="{{ $photoUrl }}" class="w-full h-72 object-cover rounded-full shadow-xl" alt="{{ $member->name }}"/>
                <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full">{{ $member->role ?? 'Team' }}</div>
              </div>
              <h4 class="font-bold text-gray-900 mt-4">{{ $member->name }}</h4>
              <p class="text-gray-500 text-sm">{{ $member->position }}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif

  <!-- CERTIFICATIONS -->
  <!-- CERTIFICATIONS -->
  @if($certifications->isNotEmpty())
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">Quality Assurance</span>
        <h2 class="font-display text-4xl font-black text-gray-900 mt-3">Our Certifications</h2>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
        @foreach($certifications as $cert)
        <div class="text-center scroll-reveal">
          <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-shadow">
            @if($cert->logo)
              <img src="{{ asset('storage/' . $cert->logo) }}" alt="{{ $cert->name }}" class="w-16 h-16 mx-auto mb-4 object-contain"/>
            @else
              <div class="w-16 h-16 bg-primary/10 rounded-2xl mx-auto mb-4 flex items-center justify-center">
                <span class="text-2xl">?</span>
              </div>
            @endif
            <h4 class="font-bold text-gray-900 text-sm mb-2">{{ $cert->name }}</h4>
            <p class="text-gray-500 text-xs">{{ $cert->issuing_body }}</p>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif

</body>
@endsection
