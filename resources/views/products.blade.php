@extends('layouts.app')

@section('title', 'Products - ' . ($settings['company_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<!-- HERO -->
<section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
        <img src="https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?w=1600&q=80" class="w-full h-full object-cover" alt=""/>
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
        <span class="text-green-300 font-medium text-sm tracking-widest uppercase">What We Trade</span>
        <h1 class="font-display text-5xl md:text-6xl font-black text-white mt-3 mb-6">Our Product Catalogue</h1>
        <p class="text-green-100 text-lg max-w-2xl mx-auto">Premium Ethiopian exports and world-class imported agricultural equipment — all in one place.</p>
    </div>
</section>

<!-- FILTER + GRID -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        <!-- Filter tabs -->
        <div class="flex flex-wrap gap-3 justify-center mb-12" x-data="{ activeFilter: 'all' }">
            <button @click="activeFilter='all'" :class="activeFilter==='all' ? 'bg-primary text-white' : 'bg-white text-gray-700 border border-gray-200'" class="px-6 py-2.5 rounded-full text-sm font-semibold transition-colors hover:bg-primary hover:text-white">All Products</button>
            <button @click="filterByType('export')" :class="activeFilter==='export' ? 'bg-primary text-white' : 'bg-white text-gray-700 border border-gray-200'" class="px-6 py-2.5 rounded-full text-sm font-semibold transition-colors hover:bg-primary hover:text-white">🌾 Exports</button>
            <button @click="filterByType('import')" :class="activeFilter==='import' ? 'bg-primary text-white' : 'bg-white text-gray-700 border border-gray-200'" class="px-6 py-2.5 rounded-full text-sm font-semibold transition-colors hover:bg-primary hover:text-white">🚜 Imports</button>
        </div>

        <!-- Category Filter Tabs -->
        @if($categories->isNotEmpty())
        <div class="flex flex-wrap gap-2 justify-center mb-8" id="categoryTabs">
            <button onclick="filterProducts('all')" class="category-tab px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-category="all">
                All Categories
            </button>
            @foreach($categories as $category)
            <button onclick="filterProducts('{{ $category->id }}')" class="category-tab px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300" data-category="{{ $category->id }}">
                {{ $category->name }}
            </button>
            @endforeach
        </div>
        @endif

        <!-- Grid -->
        <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="productsGrid">
            @foreach($products as $product)
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer group border border-gray-100 product-card" data-category="{{ $product->category_id }}" data-type="{{ $product->category && in_array(strtolower($product->category->name), ['equipment', 'machinery', 'tractor']) ? 'import' : 'export' }}">
                <div class="relative overflow-hidden h-48">
                    @if($product->images && count($product->images) > 0)
                        <img src="{{ $product->images[0]['url'] }}" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    @else
                        <img src="https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?w=600&q=80" alt="{{ $product->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"/>
                    @endif
                    <div class="absolute top-3 left-3 flex gap-2">
                        <span class="product-type-badge text-white text-xs font-bold px-2.5 py-1 rounded-full uppercase">
                            {{ in_array(strtolower($product->category->name ?? ''), ['equipment', 'machinery', 'tractor']) ? 'Import' : 'Export' }}
                        </span>
                        @if($product->is_featured)
                            <span class="bg-white text-gray-800 text-xs font-bold px-2.5 py-1 rounded-full">Featured</span>
                        @endif
                    </div>
                </div>
                <div class="p-5">
                    <h3 class="font-display font-bold text-gray-900 text-lg">{{ $product->name }}</h3>
                    <p class="text-gray-500 text-xs mt-1 mb-3">{{ $product->origin_country ?? 'Ethiopia' }}</p>
                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-2">{{ $product->description ?? 'Premium quality product available for export/import.' }}</p>
                    <button onclick="showProductModal({{ $product->id }})" class="mt-4 w-full bg-primary/10 text-primary font-semibold text-sm py-2.5 rounded-xl hover:bg-primary hover:text-white transition-colors">View Details</button>
                </div>
            </div>
            @endforeach
        </div>
        
        <!-- Pagination -->
        @if($products->hasPages())
        <div class="mt-12 flex justify-center">
            {{ $products->links() }}
        </div>
        @endif
    </div>
</section>

<!-- PRODUCT MODAL -->
<div id="productModal" class="fixed inset-0 bg-black/60 z-50 hidden flex items-center justify-center p-4" onclick="closeProductModal(event)">
    <div class="bg-white rounded-3xl max-w-2xl w-full overflow-hidden shadow-2xl max-h-[90vh] overflow-y-auto" onclick="event.stopPropagation()">
        <div id="modalContent">
            <!-- Content will be loaded dynamically -->
        </div>
    </div>
</div>

<!-- CTA -->
<section class="py-20 hero-bg text-center">
    <div class="max-w-3xl mx-auto px-6">
        <h2 class="font-display text-4xl font-black text-white mb-4">Don't See What You Need?</h2>
        <p class="text-green-200 mb-8">We source custom quantities and varieties on request. Contact us and we'll find it for you.</p>
        <a href="{{ route('contact') }}" class="bg-white text-primary font-bold px-10 py-4 rounded-full hover:bg-green-50 transition-colors shadow-xl inline-block">Contact Us Now</a>
    </div>
</section>
@endsection

@push('scripts')
<script>
// Filter by type (export/import)
function filterByType(type) {
    const allCards = document.querySelectorAll('.product-card');
    const allTabs = document.querySelectorAll('[x-data] button');
    
    allCards.forEach(card => {
        const cardType = card.dataset.type;
        if (type === 'all' || cardType === type) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Filter by category
function filterProducts(categoryId) {
    const allCards = document.querySelectorAll('.product-card');
    const allTabs = document.querySelectorAll('.category-tab');
    
    // Update tab styles
    allTabs.forEach(tab => {
        if (tab.dataset.category === categoryId.toString()) {
            tab.className = 'category-tab px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-primary text-white';
        } else {
            tab.className = 'category-tab px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 bg-gray-200 text-gray-700 hover:bg-gray-300';
        }
    });
    
    // Filter products
    allCards.forEach(card => {
        if (categoryId === 'all' || card.dataset.category === categoryId.toString()) {
            card.style.display = 'block';
        } else {
            card.style.display = 'none';
        }
    });
}

// Show product modal
function showProductModal(productId) {
    // Fetch product details via AJAX
    fetch(`/api/products/${productId}`)
        .then(response => response.json())
        .then(data => {
            const modalContent = document.getElementById('modalContent');
            const isImport = data.category && (data.category.name.toLowerCase().includes('equipment') || data.category.name.toLowerCase().includes('machinery') || data.category.name.toLowerCase().includes('tractor'));
            
            modalContent.innerHTML = `
                <div>
                    <div class="relative h-64">
                        ${data.images && data.images.length > 0 ? 
                            `<img src="${data.images[0].url}" class="w-full h-full object-cover" alt="${data.name}"/>` :
                            `<img src="https://images.unsplash.com/photo-1574323347407-f5e1ad6d020b?w=600&q=80" class="w-full h-full object-cover" alt="${data.name}"/>`
                        }
                        <button onclick="closeProductModal()" class="absolute top-4 right-4 bg-white rounded-full w-9 h-9 flex items-center justify-center shadow-lg text-gray-700 hover:text-red-500 transition-colors">✕</button>
                        <div class="absolute bottom-4 left-4">
                            <span class="${isImport ? 'bg-amber-600' : 'bg-primary'} text-white text-xs font-bold px-3 py-1.5 rounded-full uppercase">${isImport ? 'Import' : 'Export'}</span>
                        </div>
                    </div>
                    <div class="p-8">
                        <h2 class="font-display text-3xl font-black text-gray-900 mb-1">${data.name}</h2>
                        <p class="text-primary text-sm font-medium mb-4">📍 ${data.origin_country || 'Ethiopia'}</p>
                        <p class="text-gray-600 leading-relaxed mb-6">${data.description || 'Premium quality product available for international trade.'}</p>
                        
                        ${data.specifications && Object.keys(data.specifications).length > 0 ? `
                            <div class="bg-gray-50 rounded-2xl p-5 mb-6">
                                <h4 class="font-bold text-gray-900 mb-3 text-sm uppercase tracking-wide">Specifications</h4>
                                <ul class="space-y-2">
                                    ${Object.entries(data.specifications).map(([key, value]) => `
                                        <li class="flex items-center gap-2 text-sm text-gray-700">
                                            <span class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></span>
                                            <span class="font-medium">${key}:</span>
                                            <span>${value}</span>
                                        </li>
                                    `).join('')}
                                </ul>
                            </div>
                        ` : ''}
                        
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div>
                                <span class="text-gray-500 text-sm">Category:</span>
                                <p class="font-medium">${data.category?.name || 'N/A'}</p>
                            </div>
                            <div>
                                <span class="text-gray-500 text-sm">Unit:</span>
                                <p class="font-medium">${data.unit || 'kg'}</p>
                            </div>
                            <div>
                                <span class="text-gray-500 text-sm">Origin:</span>
                                <p class="font-medium">${data.origin_country || 'Ethiopia'}</p>
                            </div>
                            <div>
                                <span class="text-gray-500 text-sm">HS Code:</span>
                                <p class="font-medium">${data.hs_code || 'N/A'}</p>
                            </div>
                        </div>
                        
                        <a href="{{ route('rfq.create') }}?product=${productId}" class="block w-full bg-primary text-white font-bold py-4 rounded-2xl text-center hover:bg-primary-dark transition-colors">Request a Quote for This Product →</a>
                    </div>
                </div>
            `;
            document.getElementById('productModal').classList.remove('hidden');
        })
        .catch(error => console.error('Error fetching product:', error));
}

// Close product modal
function closeProductModal(event) {
    if (!event || event.target.id === 'productModal') {
        document.getElementById('productModal').classList.add('hidden');
    }
}

// Initialize type badges
document.addEventListener('DOMContentLoaded', function() {
    const typeBadges = document.querySelectorAll('.product-type-badge');
    typeBadges.forEach(badge => {
        const card = badge.closest('.product-card');
        const type = card.dataset.type;
        badge.className = `${type === 'import' ? 'bg-amber-600' : 'bg-primary'} text-white text-xs font-bold px-2.5 py-1 rounded-full uppercase`;
    });
});
</script>
@endpush
