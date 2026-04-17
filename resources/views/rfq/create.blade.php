@extends('layouts.app')

@section('title', 'Request Quote - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<!-- Hero Section -->
<section class="hero-bg text-white py-20">
    <div class="max-w-4xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-display font-bold mb-6">Request for Quote</h1>
        <p class="text-xl text-green-100">
            Get a customized quote for your specific import/export requirements
        </p>
    </div>
</section>

<!-- RFQ Form Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-6">
        <div class="bg-white rounded-xl shadow-lg p-8">
            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            @if(session('success'))
                <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('rfq.store') }}" method="POST" class="space-y-6" onsubmit="console.log('Form submitted with data:', new FormData(this));">
                @csrf
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                        <input type="text" name="company" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('company') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Your Name *</label>
                        <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('name') }}">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                        <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('email') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                        <input type="tel" name="phone" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('phone') }}">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                    <input type="text" name="country" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('country') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Product of Interest *</label>
                    <input type="text" name="product_interest" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('product_interest') }}">
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Quantity</label>
                        <input type="text" name="quantity" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('quantity') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Unit</label>
                        <input type="text" name="unit" placeholder="e.g., kg, tons, units" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('unit') }}">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Product Description</label>
                    <textarea name="product_description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">{{ old('product_description') }}</textarea>
                </div>
                <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white py-3 rounded-lg font-semibold transition-all duration-300">
                    Submit RFQ Request
                </button>
            </form>
        </div>
    </div>
</section>
@endsection
