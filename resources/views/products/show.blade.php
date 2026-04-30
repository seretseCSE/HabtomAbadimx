@extends('layouts.app')

@section('title', $product->name . ' - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<!-- BREADCRUMB -->
<section class="bg-gray-50 border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <nav class="flex items-center text-sm text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Home</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <a href="{{ route('products') }}" class="hover:text-primary transition-colors">Products</a>
            <svg class="w-4 h-4 mx-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="text-gray-900 font-medium">{{ $product->name }}</span>
        </nav>
    </div>
</section>

<!-- PRODUCT DETAIL -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid lg:grid-cols-2 gap-12 items-start">

            <!-- Image Section -->
            <div class="space-y-4">
                @php
                    $mediaItems = $product->getMedia('images');
                    $hasImages = $mediaItems->isNotEmpty();
                @endphp

                @if($hasImages)
                    <div class="aspect-square rounded-2xl overflow-hidden bg-gray-100 border border-gray-200">
                        <img src="{{ $mediaItems->first()->getUrl() }}"
                             alt="{{ $product->name }}"
                             class="w-full h-full object-cover"
                             id="mainProductImage"/>
                    </div>
                    @if($mediaItems->count() > 1)
                        <div class="grid grid-cols-4 gap-3">
                            @foreach($mediaItems as $media)
                                <button onclick="document.getElementById('mainProductImage').src='{{ $media->getUrl() }}'"
                                        class="aspect-square rounded-xl overflow-hidden border-2 border-transparent hover:border-primary transition-all bg-gray-100">
                                    <img src="{{ $media->getUrl('thumb') }}"
                                         alt="{{ $product->name }}"
                                         class="w-full h-full object-cover"/>
                                </button>
                            @endforeach
                        </div>
                    @endif
                @else
                    <div class="aspect-square rounded-2xl bg-gradient-to-br from-green-50 to-green-100 border border-green-200 flex flex-col items-center justify-center">
                        <svg class="w-20 h-20 text-green-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-green-700 font-semibold text-lg">
                            {{ $product->category && strtolower($product->category->name) === 'import' ? 'Import' : 'Export' }}
                        </span>
                        <span class="text-green-600 text-sm mt-1">Image coming soon</span>
                    </div>
                @endif
            </div>

            <!-- Info Section -->
            <div class="space-y-8">
                <!-- Header -->
                <div>
                    <div class="flex flex-wrap items-center gap-3 mb-4">
                        <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wide">
                            {{ $product->category->name ?? 'Product' }}
                        </span>
                        @if($product->is_featured)
                            <span class="bg-amber-100 text-amber-700 text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wide">
                                Featured
                            </span>
                        @endif
                        <span class="bg-gray-100 text-gray-600 text-xs font-bold px-3 py-1.5 rounded-full uppercase tracking-wide">
                            {{ $product->origin_country ?? 'Ethiopia' }}
                        </span>
                    </div>

                    <h1 class="font-display text-4xl font-black text-gray-900 mb-4 leading-tight">
                        {{ $product->name }}
                    </h1>

                    <p class="text-gray-600 text-lg leading-relaxed">
                        {{ $product->description }}
                    </p>
                </div>

                <!-- Quick Facts -->
                <div class="grid grid-cols-2 gap-4">
                    @if($product->hs_code)
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <div class="text-xs text-gray-500 uppercase tracking-wide mb-1">HS Code</div>
                            <div class="font-semibold text-gray-900">{{ $product->hs_code }}</div>
                        </div>
                    @endif
                    @if($product->sku)
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <div class="text-xs text-gray-500 uppercase tracking-wide mb-1">SKU</div>
                            <div class="font-semibold text-gray-900">{{ $product->sku }}</div>
                        </div>
                    @endif
                    @if($product->unit)
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <div class="text-xs text-gray-500 uppercase tracking-wide mb-1">Unit</div>
                            <div class="font-semibold text-gray-900">{{ $product->unit }}</div>
                        </div>
                    @endif
                    @if($product->origin_country)
                        <div class="bg-gray-50 rounded-xl p-4 border border-gray-100">
                            <div class="text-xs text-gray-500 uppercase tracking-wide mb-1">Origin</div>
                            <div class="font-semibold text-gray-900">{{ $product->origin_country }}</div>
                        </div>
                    @endif
                </div>

                <!-- Specifications -->
                @if($product->specifications && count((array)$product->specifications) > 0)
                    <div>
                        <h3 class="font-display text-xl font-bold text-gray-900 mb-4">Specifications</h3>
                        <div class="bg-gray-50 rounded-2xl border border-gray-100 overflow-hidden">
                            <table class="w-full text-sm">
                                <tbody>
                                    @foreach((array)$product->specifications as $key => $value)
                                        <tr class="border-b border-gray-100 last:border-0">
                                            <td class="px-6 py-4 text-gray-500 capitalize w-1/3">
                                                {{ str_replace('_', ' ', $key) }}
                                            </td>
                                            <td class="px-6 py-4 font-semibold text-gray-900">
                                                {{ $value }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                @endif

                <!-- CTA -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="{{ route('contact') }}?subject=Quote request for {{ urlencode($product->name) }}"
                       class="flex-1 bg-primary text-white font-bold px-8 py-4 rounded-full text-center hover:bg-primary-dark transition-colors shadow-lg inline-flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        Request a Quote
                    </a>
                    <a href="{{ route('products') }}"
                       class="flex-1 border-2 border-gray-200 text-gray-700 font-bold px-8 py-4 rounded-full text-center hover:border-gray-400 hover:text-gray-900 transition-colors inline-flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                        </svg>
                        Back to Products
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- RELATED PRODUCTS -->
@if($relatedProducts->isNotEmpty())
<section class="py-16 bg-gray-50 border-t border-gray-100">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="font-display text-2xl font-bold text-gray-900 mb-2">Related Products</h2>
            <p class="text-gray-600">You may also be interested in these items</p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($relatedProducts as $related)
                <a href="{{ route('products.show', $related) }}"
                   class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100">
                    <div class="aspect-square overflow-hidden bg-gray-100 relative">
                        @php $relatedImage = $related->getFirstMediaUrl('images'); @endphp
                        @if($relatedImage)
                            <img src="{{ $relatedImage }}"
                                 alt="{{ $related->name }}"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-green-100 to-green-200 flex items-center justify-center">
                                <span class="text-2xl font-bold text-green-600">
                                    {{ $related->category && strtolower($related->category->name) === 'import' ? 'Import' : 'Export' }}
                                </span>
                            </div>
                        @endif
                        <div class="absolute top-3 left-3">
                            <span class="bg-white/90 backdrop-blur-sm text-gray-800 text-xs font-bold px-2.5 py-1 rounded-full">
                                {{ $related->category->name ?? 'Product' }}
                            </span>
                        </div>
                    </div>
                    <div class="p-5">
                        <h3 class="font-bold text-gray-900 mb-1 group-hover:text-primary transition-colors">{{ $related->name }}</h3>
                        <p class="text-gray-500 text-sm">{{ $related->origin_country ?? 'Ethiopia' }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
