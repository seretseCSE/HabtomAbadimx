@extends('layouts.app')

@section('title', 'Certifications & Partners - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<!-- HERO -->
<section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=1600&q=80" class="w-full h-full object-cover" alt=""/>
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <span class="text-green-300 font-medium text-sm tracking-widest uppercase">Quality & Trust</span>
        <h1 class="font-display text-5xl md:text-6xl font-black text-white mt-3 mb-6">Certifications & Partners</h1>
        <p class="text-green-100 text-lg max-w-2xl mx-auto">Building trust through quality standards and reliable international partnerships since 2000</p>
    </div>
</section>

<!-- Certifications Section -->
@if($certifications->isNotEmpty())
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-display font-bold mb-4">Our Certifications</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Recognized and certified for quality, safety, and industry standards
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($certifications as $cert)
            <div class="bg-gray-50 rounded-xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 group">
                <!-- Certification Logo -->
                <div class="flex justify-center mb-6">
                    @if($cert->logo)
                        <img src="{{ asset('storage/' . $cert->logo) }}" 
                             alt="{{ $cert->name }}" 
                             class="w-24 h-24 object-contain group-hover:scale-105 transition-transform duration-300">
                    @else
                        <div class="w-24 h-24 bg-gradient-to-br from-green-400 to-green-600 rounded-lg flex items-center justify-center">
                            <span class="text-4xl text-white">shield-check</span>
                        </div>
                    @endif
                </div>
                
                <!-- Certification Info -->
                <div class="text-center">
                    <h3 class="text-xl font-bold mb-2">{{ $cert->name }}</h3>
                    <p class="text-gray-600 mb-3">{{ $cert->issuing_body }}</p>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-center">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full font-semibold">
                                {{ $cert->certificate_number }}
                            </span>
                        </div>
                        <div class="text-gray-500">
                            Issued: {{ $cert->issue_date ? $cert->issue_date->format('M d, Y') : 'N/A' }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Partners Section -->
@if($allPartners->isNotEmpty())
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-display font-bold mb-4">Trusted Partners & Clients</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Working with leading companies across the globe to deliver exceptional trading solutions
            </p>
        </div>
        
        <!-- Featured Partners -->
        @if($featuredPartners->isNotEmpty())
        <div class="mb-16">
            <h3 class="text-2xl font-bold text-center mb-8">Featured Partners</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach($featuredPartners as $partner)
                <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition-all duration-300 group">
                    <div class="flex justify-center mb-4">
                        @if($partner->logo)
                            <img src="{{ asset('storage/' . $partner->logo) }}" 
                                 alt="{{ $partner->name }}" 
                                 class="w-32 h-32 object-contain group-hover:scale-105 transition-transform duration-300">
                        @else
                            <div class="w-32 h-32 bg-gradient-to-br from-gray-200 to-gray-300 rounded-lg flex items-center justify-center">
                                <span class="text-2xl text-gray-600 font-bold text-center">{{ $partner->name }}</span>
                            </div>
                        @endif
                    </div>
                    <div class="text-center">
                        <h4 class="font-bold text-lg mb-2">{{ $partner->name }}</h4>
                        <p class="text-sm text-gray-600 mb-3">{{ $partner->country }}</p>
                        <span class="inline-block px-3 py-1 bg-primary text-white rounded-full text-sm font-medium">
                            {{ ucfirst($partner->partnership_type) }}
                        </span>
                    </div>
                    @if($partner->website_url)
                    <div class="mt-4 text-center">
                        <a href="{{ $partner->website_url }}" 
                           target="_blank" 
                           class="text-primary hover:text-gold transition-colors text-sm font-medium">
                            Visit Website &rarr;
                        </a>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
        @endif
        
        <!-- All Partners Logo Slider -->
        @if($allPartners->isNotEmpty())
        <div class="bg-white rounded-xl shadow-lg p-8">
            <h3 class="text-2xl font-bold text-center mb-8">All Partners</h3>
            <div class="relative overflow-hidden">
                <div class="marquee-track flex items-center">
                    @foreach($allPartners as $partner)
                    @foreach(range(1,2) as $duplicate)
                    <div class="flex-shrink-0 w-48 h-24 flex items-center justify-center mx-4">
                        @if($partner->logo)
                            <img src="{{ asset('storage/' . $partner->logo) }}" 
                                 alt="{{ $partner->name }}" 
                                 class="max-h-16 max-w-full opacity-60 hover:opacity-100 transition-opacity duration-300">
                        @else
                            <div class="text-lg text-gray-400 font-bold text-center px-2">{{ $partner->name }}</div>
                        @endif
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
@endif

<!-- Partnership Types Section -->
@if($allPartners->isNotEmpty())
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-display font-bold mb-4">Partnership Types</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Different types of partnerships that drive our global trading network
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @foreach($partnershipTypes as $type => $count)
            <div class="text-center bg-gray-50 rounded-xl p-6 hover:shadow-lg transition-all duration-300">
                <div class="text-4xl text-primary mb-4">
                    @switch($type)
                        @case('supplier')
                            <span>truck</span>
                            @break
                        @case('buyer')
                            <span>shopping-cart</span>
                            @break
                        @case('logistics')
                            <span>plane</span>
                            @break
                        @case('financial')
                            <span>banknotes</span>
                            @break
                        @default
                            <span>handshake</span>
                    @endswitch
                </div>
                <h3 class="text-xl font-bold mb-2">{{ ucfirst($type) }}s</h3>
                <p class="text-3xl font-bold text-primary">{{ $count }}</p>
                <p class="text-gray-600 text-sm">Active partners</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-display font-bold mb-6">Become Our Partner</h2>
        <p class="text-xl mb-8">Join our global network of trusted partners and grow your business with us</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-gold hover:bg-yellow-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                Discuss Partnership
            </a>
            <a href="{{ route('services') }}" class="border-2 border-white hover:bg-white hover:text-primary text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300">
                Learn More
            </a>
        </div>
    </div>
</section>
@endsection
