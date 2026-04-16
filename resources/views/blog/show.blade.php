@extends('layouts.app')

@section('title', $post->title . ' - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<!-- Hero Section -->
<section class="hero-bg text-white py-20">
    <div class="max-w-4xl mx-auto px-6">
        <div class="text-center">
            @if($post->category)
                <span class="bg-gold text-white px-4 py-2 rounded-full text-sm font-semibold mb-4 inline-block">
                    {{ $post->category->name }}
                </span>
            @endif
            <h1 class="text-4xl md:text-5xl font-display font-bold mb-6">{{ $post->title }}</h1>
            <div class="flex items-center justify-center text-green-100 space-x-6">
                @if($post->author)
                    <div class="flex items-center">
                        <div class="w-10 h-10 bg-white bg-opacity-20 rounded-full mr-3 flex items-center justify-center">
                            <span class="text-white font-semibold">{{ substr($post->author, 0, 1) }}</span>
                        </div>
                        <span>{{ $post->author }}</span>
                    </div>
                @endif
                <span>·</span>
                <span>{{ $post->published_at ? $post->published_at->format('F d, Y') : $post->created_at->format('F d, Y') }}</span>
                @if($post->reading_time)
                    <span>·</span>
                    <span>{{ $post->reading_time }} min read</span>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- Featured Image -->
@if($post->featured_image_url)
<section class="py-8 bg-white">
    <div class="max-w-6xl mx-auto px-6">
        <img src="{{ $post->featured_image_url }}"
             alt="{{ $post->title }}"
             class="w-full rounded-xl shadow-2xl">
    </div>
</section>
@endif

<!-- Article Content -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <div class="prose prose-lg max-w-none">
            <!-- Table of Contents (if needed) -->
            @if($post->table_of_contents)
            <div class="bg-gray-50 rounded-lg p-6 mb-12">
                <h3 class="text-xl font-bold mb-4">Table of Contents</h3>
                {!! $post->table_of_contents !!}
            </div>
            @endif

            <!-- Main Content -->
            <div class="article-content">
                {!! $post->body !!}
            </div>

            <!-- Tags -->
            @if($post->tags)
            <div class="mt-12 pt-8 border-t">
                <h3 class="text-lg font-semibold mb-4">Tags</h3>
                <div class="flex flex-wrap gap-2">
                    @foreach(explode(',', $post->tags) as $tag)
                        <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">
                            {{ trim($tag) }}
                        </span>
                    @endforeach
                </div>
            </div>
            @endif
        </div>

        <!-- Share Buttons -->
        <div class="mt-12 pt-8 border-t">
            <h3 class="text-lg font-semibold mb-4">Share this article</h3>
            <div class="flex space-x-4">
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ route('blog.show', $post->slug) }}"
                   target="_blank"
                   class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition-colors">
                    LinkedIn
                </a>
                <a href="https://twitter.com/intent/tweet?url={{ route('blog.show', $post->slug) }}&text={{ $post->title }}"
                   target="_blank"
                   class="bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-lg transition-colors">
                    Twitter
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('blog.show', $post->slug) }}"
                   target="_blank"
                   class="bg-blue-800 hover:bg-blue-900 text-white px-4 py-2 rounded-lg transition-colors">
                    Facebook
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Related Posts -->
@if($relatedPosts->isNotEmpty())
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-display font-bold mb-4">Related Articles</h2>
            <p class="text-xl text-gray-600">Continue reading about similar topics</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            @foreach($relatedPosts as $relatedPost)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300">
                <div class="relative h-48 bg-gray-200">
                    @if($relatedPost->featured_image_url)
                        <img src="{{ $relatedPost->featured_image_url }}"
                             alt="{{ $relatedPost->title }}"
                             class="w-full h-full object-cover">
                    @else
                        <div class="w-full h-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center">
                            <span class="text-4xl text-white">📄</span>
                        </div>
                    @endif
                </div>
                <div class="p-6">
                    <div class="text-sm text-gray-500 mb-3">
                        {{ $relatedPost->published_at ? $relatedPost->published_at->format('M d, Y') : $relatedPost->created_at->format('M d, Y') }}
                    </div>
                    <h3 class="text-xl font-bold mb-3">
                        <a href="{{ route('blog.show', $relatedPost->slug) }}" class="hover:text-primary transition-colors">
                            {{ $relatedPost->title }}
                        </a>
                    </h3>
                    <p class="text-gray-600">
                        {{ $relatedPost->excerpt ?? Str::limit(strip_tags($relatedPost->body), 100) }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-primary text-white">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-display font-bold mb-6">Ready to Start Trading?</h2>
        <p class="text-xl mb-8">Get expert guidance for your import/export needs</p>
        <div class="flex flex-wrap gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-gold hover:bg-yellow-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                Contact Us
            </a>
            <a href="{{ route('rfq.create') }}" class="border-2 border-white hover:bg-white hover:text-primary text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300">
                Request Quote
            </a>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    .article-content {
        @apply text-gray-700 leading-relaxed;
    }

    .article-content h1,
    .article-content h2,
    .article-content h3,
    .article-content h4,
    .article-content h5,
    .article-content h6 {
        @apply font-bold text-gray-900 mt-8 mb-4;
    }

    .article-content h1 { @apply text-3xl; }
    .article-content h2 { @apply text-2xl; }
    .article-content h3 { @apply text-xl; }

    .article-content p {
        @apply mb-6;
    }

    .article-content ul,
    .article-content ol {
        @apply mb-6 pl-6;
    }

    .article-content li {
        @apply mb-2;
    }

    .article-content blockquote {
        @apply border-l-4 border-primary pl-6 italic text-gray-600 my-6;
    }

    .article-content img {
        @apply rounded-lg shadow-lg my-8;
    }

    .article-content a {
        @apply text-primary hover:text-gold underline;
    }

    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endpush
