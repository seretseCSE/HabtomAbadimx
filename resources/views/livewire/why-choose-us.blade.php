<div>
    @if($advantages->isNotEmpty())
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-display font-bold mb-4">Why Choose Us</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Discover the advantages that make us your ideal trading partner
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($advantages as $advantage)
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 group">
                    <!-- Icon -->
                    <div class="text-5xl text-primary mb-6 group-hover:text-gold transition-colors duration-300">
                        {{ $advantage->icon ?? 'star' }}
                    </div>
                    
                    <!-- Title -->
                    <h3 class="text-2xl font-bold mb-4 group-hover:text-primary transition-colors">
                        {{ $advantage->title }}
                    </h3>
                    
                    <!-- Description -->
                    <div class="text-gray-600 leading-relaxed">
                        {!! $advantage->description !!}
                    </div>
                    
                    <!-- Additional Features if available -->
                    @if($advantage->features)
                    <div class="mt-6 pt-6 border-t border-gray-200">
                        <ul class="space-y-2">
                            @foreach(json_decode($advantage->features, true) as $feature)
                            <li class="flex items-start">
                                <svg class="w-5 h-5 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span class="text-gray-600 text-sm">{{ $feature }}</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</div>
