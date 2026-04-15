@extends('layouts.app')

@section('title', 'Contact - ' . ($settings['company_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<div x-data="{ activeTab: 'rfq' }">
<!-- HERO -->
<section class="hero-bg min-h-screen flex items-center relative overflow-hidden">
    <div class="absolute inset-0 opacity-20">
      <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1600&q=80" class="w-full h-full object-cover" alt=""/>
    </div>
    <div class="relative max-w-7xl mx-auto px-6 text-center">
      <span class="text-green-300 font-medium text-sm tracking-widest uppercase">Get In Touch</span>
      <h1 class="font-display text-5xl md:text-6xl font-black text-white mt-3 mb-6">Contact & Inquiries</h1>
      <p class="text-green-100 text-lg max-w-2xl mx-auto">Ready to trade? Submit a quote request or send us a message — we respond within 24 hours.</p>
    </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-3 gap-12">

      <!-- Info Column -->
      <div>
        <h2 class="font-display text-2xl font-black text-gray-900 mb-6">Get In Touch</h2>
        <div class="space-y-5">
          <div class="flex gap-4 items-start">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 text-white text-xl">📍</div>
            <div>
              <div class="font-bold text-gray-900">Office Address</div>
              <div class="text-gray-500 text-sm">{{ $settings['address'] ?? 'Addis Ababa, Ethiopia' }}<br/>Ayat Area, Bole Sub-City</div>
            </div>
          </div>
          <div class="flex gap-4 items-start">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 text-white text-xl">📞</div>
            <div>
              <div class="font-bold text-gray-900">Phone</div>
              <div class="text-gray-500 text-sm">{{ $settings['contact_phone'] ?? '+251 000 000 000' }}<br/>+251 000 000 001</div>
            </div>
          </div>
          <div class="flex gap-4 items-start">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 text-white text-xl">✉️</div>
            <div>
              <div class="font-bold text-gray-900">Email</div>
              <div class="text-gray-500 text-sm">{{ $settings['contact_email'] ?? 'info@habtomabadimx.com' }}<br/>trade@habtomabadimx.com</div>
            </div>
          </div>
          <div class="flex gap-4 items-start">
            <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 text-white text-xl">🕐</div>
            <div>
              <div class="font-bold text-gray-900">Working Hours</div>
              <div class="text-gray-500 text-sm">{{ $settings['working_hours'] ?? 'Mon–Fri: 8:00 AM – 6:00 PM<br/>Sat: 9:00 AM – 2:00 PM (EAT)' }}</div>
            </div>
          </div>
        </div>

        <!-- Map placeholder -->
        <div class="mt-8 rounded-2xl overflow-hidden h-48 bg-gray-200 relative">
          <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=600&q=80" class="w-full h-full object-cover opacity-60" alt="Map"/>
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="bg-primary text-white px-4 py-2 rounded-full text-sm font-bold shadow-lg">📍 Addis Ababa, Ethiopia</div>
          </div>
        </div>
      </div>

<!-- Forms Column -->
      <div class="lg:col-span-2">
        <!-- Tabs -->
        <div class="flex gap-1 bg-gray-200 p-1 rounded-2xl mb-8 w-fit">
          <button @click="activeTab = 'rfq'" :class="activeTab === 'rfq' ? 'bg-white shadow text-primary font-semibold' : 'text-gray-500'" class="px-6 py-2.5 rounded-xl text-sm transition-all">📋 Request a Quote (RFQ)</button>
          <button @click="activeTab = 'contact'" :class="activeTab === 'contact' ? 'bg-white shadow text-primary font-semibold' : 'text-gray-500'" class="px-6 py-2.5 rounded-xl text-sm transition-all">✉️ General Inquiry</button>
        </div>

        <!-- RFQ Form -->
        <div x-show="activeTab === 'rfq'" x-transition class="bg-white rounded-xl shadow-lg p-8">
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
            
            <form action="{{ route('rfq.store') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Honeypot fields -->
                <div style="display:none;">
                    <label for="website">Leave this field empty</label>
                    <input type="text" name="website" id="website" autocomplete="off" tabindex="-1">
                    <label for="email_confirm">Leave this field empty</label>
                    <input type="email" name="email_confirm" id="email_confirm" autocomplete="off" tabindex="-1">
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Company Name *</label>
                        <input type="text" name="company_name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('company_name') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Contact Person *</label>
                        <input type="text" name="contact_person" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('contact_person') }}">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email *</label>
                        <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('email') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone *</label>
                        <input type="tel" name="phone" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('phone') }}">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Service Type</label>
                    <select name="service_type" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">
                        <option value="">Select Service</option>
                        @foreach($services ?? [] as $service)
                            <option value="{{ $service->id }}" {{ old('service_type') == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Product/Commodity *</label>
                    <input type="text" name="product" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('product') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Quantity *</label>
                    <input type="text" name="quantity" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('quantity') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Target Market/Destination</label>
                    <input type="text" name="destination" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('destination') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Additional Requirements</label>
                    <textarea name="requirements" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">{{ old('requirements') }}</textarea>
                </div>
                <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white py-3 rounded-lg font-semibold transition-all duration-300">
                    Submit RFQ Request
                </button>
            </form>
        </div>

        <!-- Contact Form -->
        <div x-show="activeTab === 'contact'" x-transition class="bg-white rounded-xl shadow-lg p-8">
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
            
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Honeypot fields -->
                <div style="display:none;">
                    <label for="website">Leave this field empty</label>
                    <input type="text" name="website" id="website" autocomplete="off" tabindex="-1">
                    <label for="phone2">Leave this field empty</label>
                    <input type="tel" name="phone2" id="phone2" autocomplete="off" tabindex="-1">
                </div>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Full Name *</label>
                        <input type="text" name="name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('name') }}">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" name="email" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('email') }}">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                    <input type="text" name="subject" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" value="{{ old('subject') }}">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Message *</label>
                    <textarea name="message" rows="6" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent">{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white py-3 rounded-lg font-semibold transition-all duration-300">
                    Send Message
                </button>
            </form>
        </div>
      </div>
    </div>
</section>
</div>
@endsection
