@extends('layouts.app')

@section('title', $service->name . ' - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<body class="bg-white" x-data="{ mobileOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50">

  <!-- HERO SECTION -->
  <section class="relative py-24 bg-gradient-to-br from-primary to-primary-dark text-white overflow-hidden">
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
      <div class="scroll-reveal">
        <h1 class="font-display text-4xl md:text-6xl font-black mb-6">{{ $service->name }}</h1>
        <p class="text-xl md:text-2xl text-green-100 max-w-3xl mx-auto">{{ $service->description }}</p>
      </div>
    </div>
  </section>

  <!-- SERVICE DETAILS -->
  <section class="py-24 bg-white">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <div class="scroll-reveal">
          <h2 class="font-display text-3xl font-bold text-gray-900 mb-6">About This Service</h2>
          <div class="prose prose-lg text-gray-600 leading-relaxed">
            {!! $service->full_description !!}
          </div>
        </div>

        <div class="scroll-reveal">
          @if($service->features && is_array($service->features) && count($service->features) > 0)
          <div class="bg-gray-50 rounded-3xl p-8 mb-8">
            <h3 class="font-display text-2xl font-bold text-gray-900 mb-6">Key Features</h3>
            <ul class="space-y-3">
              @foreach($service->features as $feature)
                <li class="flex items-start">
                  <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                  </svg>
                  <span class="text-gray-700">{{ $feature }}</span>
                </li>
              @endforeach
            </ul>
          </div>
          @endif

          @if($service->benefits && is_array($service->benefits) && count($service->benefits) > 0)
          <div class="bg-primary/10 rounded-3xl p-8">
            <h3 class="font-display text-2xl font-bold text-gray-900 mb-6">Benefits</h3>
            <ul class="space-y-3">
              @foreach($service->benefits as $benefit)
              <li class="flex items-start gap-3">
                <span class="text-primary text-xl">?</span>
                <span class="text-gray-700">{{ $benefit }}</span>
              </li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
      </div>
    </div>
  </section>

  <!-- PROCESS SECTION -->
  @if($service->process)
  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <h2 class="font-display text-3xl font-bold text-gray-900 mb-4">How It Works</h2>
        <p class="text-xl text-gray-600">Our streamlined process for delivering excellence</p>
      </div>

      <div class="prose prose-lg max-w-4xl mx-auto text-center scroll-reveal">
        {!! $service->process !!}
      </div>
    </div>
  </section>
  @endif

  <!-- CTA SECTION -->
  <section class="py-24 bg-primary text-white">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <div class="scroll-reveal">
        <h2 class="font-display text-3xl font-bold mb-6">Ready to Get Started?</h2>
        <p class="text-xl text-green-100 mb-8 max-w-2xl mx-auto">Contact us today to learn more about how our {{ $service->name }} service can benefit your business.</p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="{{ route('contact') }}" class="bg-white text-primary px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition-colors">
            Contact Us
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  @include('components.footer')

  <!-- SCRIPTS -->
  <script>
    // Scroll animations
    const observerOptions = {
      threshold: 0.1,
      rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('animate-fade-in-up');
        }
      });
    }, observerOptions);

    document.querySelectorAll('.scroll-reveal').forEach(el => {
      observer.observe(el);
    });
  </script>

  <style>
    .animate-fade-in-up {
      animation: fadeInUp 0.6s ease-out forwards;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</body>
@endsection
