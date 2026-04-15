@extends('layouts.app')

@section('title', 'Resources & Blog - ' . ($settings['company_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<!-- HERO -->
<section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?w=1600&q=80" class="w-full h-full object-cover" alt=""/>
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <span class="text-green-300 font-medium text-sm tracking-widest uppercase">Knowledge Hub</span>
        <h1 class="font-display text-5xl md:text-6xl font-black text-white mt-3 mb-6">Resources & Insights</h1>
        <p class="text-green-100 text-lg max-w-2xl mx-auto">Trade guides, market insights, and agricultural news to help you make smarter global trade decisions.</p>
    </div>
</section>

<!-- BLOG -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">

        <!-- Category Filter -->
        <div class="flex flex-wrap gap-3 mb-12" x-data="{ activeCategory: 'All' }">
            @if($categories->isNotEmpty())
                <button @click="activeCategory = 'All'" :class="activeCategory === 'All' ? 'bg-primary text-white' : 'bg-white text-gray-600 border border-gray-200'" class="px-5 py-2 rounded-full text-sm font-semibold transition-colors hover:bg-primary hover:text-white">All</button>
                @foreach($categories as $category)
                <button @click="activeCategory = '{{ $category->name }}'" :class="activeCategory === '{{ $category->name }}' ? 'bg-primary text-white' : 'bg-white text-gray-600 border border-gray-200'" class="px-5 py-2 rounded-full text-sm font-semibold transition-colors hover:bg-primary hover:text-white">{{ $category->name }}</button>
                @endforeach
            @else
                <button @click="activeCategory = 'All'" class="bg-primary text-white px-5 py-2 rounded-full text-sm font-semibold">All</button>
                <button @click="activeCategory = 'Export Tips'" class="bg-white text-gray-600 border border-gray-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-primary hover:text-white">Export Tips</button>
                <button @click="activeCategory = 'Market Insights'" class="bg-white text-gray-600 border border-gray-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-primary hover:text-white">Market Insights</button>
                <button @click="activeCategory = 'Agriculture'" class="bg-white text-gray-600 border border-gray-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-primary hover:text-white">Agriculture</button>
                <button @click="activeCategory = 'Trade News'" class="bg-white text-gray-600 border border-gray-200 px-5 py-2 rounded-full text-sm font-semibold hover:bg-primary hover:text-white">Trade News</button>
            @endif
        </div>

        <!-- Featured Post -->
        @if($posts->isNotEmpty())
        <div class="mb-10">
            @php
                $featuredPost = $posts->first();
            @endphp
            <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-gray-100 grid md:grid-cols-2 group cursor-pointer hover:shadow-xl transition-shadow">
                <div class="overflow-hidden h-64 md:h-auto">
                    @if($featuredPost->featured_image_url)
                        <img src="{{ $featuredPost->featured_image_url }}" alt="{{ $featuredPost->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    @else
                        <img src="https://images.unsplash.com/photo-1611854779393-1b2da9d400fe?w=600&q=80" alt="{{ $featuredPost->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    @endif
                </div>
                <div class="p-8 flex flex-col justify-center">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="bg-primary/10 text-primary text-xs font-bold px-3 py-1 rounded-full">{{ $featuredPost->category->name ?? 'Resources' }}</span>
                        <span class="text-gray-400 text-xs">{{ Str::limit(strip_tags($featuredPost->body), 100) }} min read</span>
                    </div>
                    <h2 class="font-display text-2xl font-bold text-gray-900 mb-4 leading-tight">
                        <a href="{{ route('blog.show', $featuredPost->slug) }}" class="hover:text-primary transition-colors">{{ $featuredPost->title }}</a>
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-6 text-sm">{{ $featuredPost->excerpt ?? Str::limit(strip_tags($featuredPost->body), 150) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400 text-xs">{{ $featuredPost->published_at ? $featuredPost->published_at->format('M d, Y') : $featuredPost->created_at->format('M d, Y') }}</span>
                        <a href="{{ route('blog.show', $featuredPost->slug) }}" class="text-primary font-semibold text-sm hover:underline">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <!-- Grid -->
        @if($posts->isNotEmpty())
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
                $remainingPosts = $posts->slice(1);
            @endphp
            @foreach($remainingPosts as $post)
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-gray-100 group cursor-pointer hover:shadow-xl transition-shadow">
                <div class="overflow-hidden h-48">
                    @if($post->featured_image_url)
                        <img src="{{ $post->featured_image_url }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    @else
                        <img src="https://images.unsplash.com/photo-1486312338419-908e2235af24?w=600&q=80" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    @endif
                </div>
                <div class="p-6">
                    <div class="flex items-center gap-3 mb-3">
                        <span class="bg-primary/10 text-primary text-xs font-bold px-2.5 py-1 rounded-full">{{ $post->category->name ?? 'Resources' }}</span>
                        <span class="text-gray-400 text-xs">{{ Str::limit(strip_tags($post->body), 100) }} min read</span>
                    </div>
                    <h3 class="font-display font-bold text-gray-900 text-lg leading-tight mb-3">
                        <a href="{{ route('blog.show', $post->slug) }}" class="hover:text-primary transition-colors">{{ $post->title }}</a>
                    </h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-4 line-clamp-2">{{ $post->excerpt ?? Str::limit(strip_tags($post->body), 150) }}</p>
                    <div class="flex items-center justify-between">
                        <span class="text-gray-400 text-xs">{{ $post->published_at ? $post->published_at->format('M d, Y') : $post->created_at->format('M d, Y') }}</span>
                        <a href="{{ route('blog.show', $post->slug) }}" class="text-primary font-semibold text-sm hover:underline">Read →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        <!-- Pagination -->
        @if($posts->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $posts->links() }}
        </div>
        @endif
    </div>
</section>

<!-- NEWSLETTER -->
<section class="py-20 hero-bg">
    <div class="max-w-2xl mx-auto px-6 text-center">
        <h2 class="font-display text-3xl font-black text-white mb-4">Stay Updated on Trade & Markets</h2>
        <p class="text-green-200 mb-8">Get commodity price updates, export guides, and trade news delivered to your inbox.</p>
        <div class="flex gap-3 max-w-md mx-auto" x-data="{ email: '', subDone: false }">
            <input x-show="!subDone" x-model="email" type="email" placeholder="Enter your email" class="flex-1 px-5 py-3.5 rounded-full text-sm focus:outline-none"/>
            <button x-show="!subDone" @click="if(email) subDone=true" class="bg-white text-primary font-bold px-6 py-3.5 rounded-full hover:bg-green-50 transition-colors whitespace-nowrap">Subscribe</button>
            <div x-show="subDone" class="w-full text-center text-white font-semibold py-3">✅ You're subscribed! Thank you.</div>
        </div>
    </div>
</section>
@endsection
