@extends('layouts.app')

@section('title', 'Contact - ' . ($settings['site_name'] ?? 'Habtom Abadi Import Export'))

@section('content')
<main id="main-content" class="bg-white text-gray-900">

  <section class="hero-bg min-h-screen flex items-center relative overflow-hidden" aria-labelledby="contact-hero-heading">
    <div class="absolute inset-0 opacity-20">
      <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=1600&q=80"
           class="w-full h-full object-cover lazy-load"
           alt="Global business connections and communication"
           loading="eager" />
    </div>
    
    <!-- Enhanced decorative elements -->
    <div class="absolute top-24 left-10 w-96 h-96 bg-gold opacity-10 rounded-full -translate-x-1/2 animate-float-continuous" aria-hidden="true" style="z-index: 1;"></div>
    <div class="absolute bottom-20 right-10 w-72 h-72 bg-primary-light opacity-10 rounded-full translate-x-1/2 animate-float-continuous" aria-hidden="true" style="animation-delay: 1s; z-index: 1;"></div>
    
    <div class="relative max-w-7xl mx-auto px-8 text-center" style="z-index: 10;">
      <div class="animate-float">
        <div class="inline-flex items-center gap-3 bg-white/10 rounded-full px-6 py-3 mb-8 backdrop-blur-sm">
          <span class="w-3 h-3 bg-gold rounded-full animate-pulse-glow" aria-hidden="true"></span>
          <span class="text-green-200 text-sm font-semibold tracking-wider uppercase">Get In Touch</span>
        </div>
        
        <h1 id="contact-hero-heading" class="font-display text-hero font-black text-white mt-4 mb-8">Contact Us</h1>
        <p class="text-green-100 text-body-lg max-w-4xl mx-auto leading-relaxed">Ready to trade with one of the best international traders? Submit a quote request or send us a message — we respond within 24 hours with our commitment to customer-based service delivery.</p>
      </div>
    </div>
  </section>

  <section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16 scroll-reveal">
        <span class="text-primary font-semibold text-sm tracking-widest uppercase">Reach Out</span>
        <h2 class="font-display text-display-lg font-black text-gray-900 mt-3">Get In Touch With Our Team</h2>
        <p class="text-gray-600 text-body-md max-w-2xl mx-auto mt-4">Whether you're interested in our export products, import services, or transportation solutions, we're here to help you succeed in international trade.</p>
      </div>

      <div class="grid lg:grid-cols-3 gap-12">
        <div class="scroll-reveal">
          <h3 class="font-display text-2xl font-black text-gray-900 mb-8">Contact Information</h3>
          <div class="space-y-6">
            <div class="flex gap-4 items-start">
              <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 text-white text-xl shadow-lg" aria-hidden="true">📍</div>
              <div>
                <div class="font-bold text-gray-900 mb-1">Office Address</div>
                <div class="text-gray-600 text-body-sm leading-relaxed">{!! nl2br(e($settings['address_full'] ?? "Noah Real Estate Building, 7th Floor, Office No. 704\n22 Area, Wereda 04, Bole Sub-City\nAddis Ababa, Ethiopia")) !!}</div>
              </div>
            </div>
            <div class="flex gap-4 items-start">
              <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 text-white text-xl shadow-lg" aria-hidden="true">📞</div>
              <div>
                <div class="font-bold text-gray-900 mb-1">Phone Numbers</div>
                <div class="text-gray-600 text-body-sm space-y-1">
                  <div>{{ $settings['phone_1'] ?? '+251 911 123 456' }}</div>
                  <div>{{ $settings['phone_2'] ?? '+251 922 654 321' }}</div>
                </div>
              </div>
            </div>
            <div class="flex gap-4 items-start">
              <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 text-white text-xl shadow-lg" aria-hidden="true">✉️</div>
              <div>
                <div class="font-bold text-gray-900 mb-1">Email Addresses</div>
                <div class="text-gray-600 text-body-sm space-y-1">
                  <div>{{ $settings['email_1'] ?? 'info@habtomabadimx.com' }}</div>
                  <div>{{ $settings['email_2'] ?? 'trade@habtomabadimx.com' }}</div>
                </div>
              </div>
            </div>
            <div class="flex gap-4 items-start">
              <div class="w-12 h-12 bg-primary rounded-xl flex items-center justify-center flex-shrink-0 text-white text-xl shadow-lg" aria-hidden="true">🕐</div>
              <div>
                <div class="font-bold text-gray-900 mb-1">Working Hours</div>
                <div class="text-gray-600 text-body-sm">{!! nl2br(e($settings['working_hours'] ?? "Monday - Friday: 8:00 AM - 6:00 PM\nSaturday: 9:00 AM - 2:00 PM (EAT)")) !!}</div>
              </div>
            </div>
          </div>

          <div class="mt-8 rounded-2xl overflow-hidden h-48 bg-gray-200 relative shadow-lg">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d711.510647859671!2d38.78587384767726!3d9.014941381340709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2set!4v1777452182945!5m2!1sen!2set"
                    class="w-full h-full"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Habtom Abadi Office Location"></iframe>
          </div>
        </div>

        <div class="lg:col-span-2 scroll-reveal">
          <div x-data="{ activeTab: 'rfq' }" class="bg-white rounded-3xl shadow-xl overflow-hidden">
            <div class="flex gap-1 bg-gray-100 p-2 rounded-t-3xl">
              <button @click="activeTab = 'rfq'"
                      :class="activeTab === 'rfq' ? 'bg-white shadow-lg text-primary font-semibold' : 'text-gray-600 hover:text-gray-900'"
                      class="flex-1 px-6 py-3 rounded-2xl text-sm transition-all duration-300 focus-visible">
                📋 Request a Quote (RFQ)
              </button>
              <button @click="activeTab = 'contact'"
                      :class="activeTab === 'contact' ? 'bg-white shadow-lg text-primary font-semibold' : 'text-gray-600 hover:text-gray-900'"
                      class="flex-1 px-6 py-3 rounded-2xl text-sm transition-all duration-300 focus-visible">
                ✉️ General Inquiry
              </button>
            </div>

            <div class="p-8">
              <div x-show="activeTab === 'rfq'" x-transition class="space-y-6">
                @if ($errors->any())
                  <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg" role="alert">
                    <ul class="list-disc list-inside text-sm">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                @if(session('success'))
                  <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg" role="alert">
                    {{ session('success') }}
                  </div>
                @endif

                <form action="{{ route('rfq.store') }}" method="POST" class="space-y-6">
                  @csrf
                  <div style="display:none;">
                    <label for="website">Leave this field empty</label>
                    <input type="text" name="website" id="website" autocomplete="off" tabindex="-1">
                    <label for="email_confirm">Leave this field empty</label>
                    <input type="email" name="email_confirm" id="email_confirm" autocomplete="off" tabindex="-1">
                  </div>

                  <div class="grid md:grid-cols-2 gap-6">
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="company_name">Company Name *</label>
                      <input type="text" name="name" id="company_name" required
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('company_name') }}">
                    </div>
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="contact_person">Contact Person *</label>
                      <input type="text" name="contact_person" id="contact_person" required
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('contact_person') }}">
                    </div>
                  </div>
                  <div class="grid md:grid-cols-2 gap-6">
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="email">Email *</label>
                      <input type="email" name="email" id="email" required
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('email') }}">
                    </div>
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="phone">Phone *</label>
                      <input type="tel" name="phone" id="phone" required
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('phone') }}">
                    </div>
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="service_type">Service Type</label>
                    <select name="service_type" id="service_type"
                            class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300">
                      <option value="">Select Service</option>
                      @foreach($services ?? [] as $service)
                        <option value="{{ $service->name }}" {{ old('service_type') == $service->name ? 'selected' : '' }}>{{ $service->name }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="grid md:grid-cols-2 gap-6">
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="product">Product/Commodity *</label>
                      <input type="text" name="product_interest" id="product" required
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('product') }}">
                    </div>
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="quantity">Quantity *</label>
                      <input type="text" name="quantity" id="quantity" required
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('quantity') }}">
                    </div>
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="destination">Target Market/Destination</label>
                    <input type="text" name="destination" id="destination"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                           value="{{ old('destination') }}">
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="requirements">Additional Requirements</label>
                    <textarea name="requirements" id="requirements" rows="4"
                              class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300">{{ old('requirements') }}</textarea>
                  </div>
                  <button type="submit"
                          class="w-full bg-primary hover:bg-primary-dark text-white py-4 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl focus-visible transform hover:scale-105">
                    Submit RFQ Request
                  </button>
                </form>
              </div>

              <div x-show="activeTab === 'contact'" x-transition class="space-y-6">
                @if ($errors->any())
                  <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg" role="alert">
                    <ul class="list-disc list-inside text-sm">
                      @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>
                @endif

                @if(session('success'))
                  <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg" role="alert">
                    {{ session('success') }}
                  </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                  @csrf
                  <div style="display:none;">
                    <label for="website">Leave this field empty</label>
                    <input type="text" name="website" id="website" autocomplete="off" tabindex="-1">
                    <label for="phone2">Leave this field empty</label>
                    <input type="tel" name="phone2" id="phone2" autocomplete="off" tabindex="-1">
                  </div>

                  <div class="grid md:grid-cols-2 gap-6">
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="name">Full Name *</label>
                      <input type="text" name="name" id="name" required
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('name') }}">
                    </div>
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="email">Email Address *</label>
                      <input type="email" name="email" id="email" required
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('email') }}">
                    </div>
                  </div>
                  <div class="grid md:grid-cols-2 gap-6">
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="phone">Phone</label>
                      <input type="tel" name="phone" id="phone"
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('phone') }}">
                    </div>
                    <div>
                      <label class="block text-sm font-semibold text-gray-700 mb-2" for="company">Company</label>
                      <input type="text" name="company" id="company"
                             class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                             value="{{ old('company') }}">
                    </div>
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="subject">Subject</label>
                    <input type="text" name="subject" id="subject"
                           class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300"
                           value="{{ old('subject') }}">
                  </div>
                  <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2" for="message">Message *</label>
                    <textarea name="message" id="message" rows="6" required
                              class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-primary focus:border-transparent transition-all duration-300">{{ old('message') }}</textarea>
                  </div>
                  <button type="submit"
                          class="w-full bg-primary hover:bg-primary-dark text-white py-4 rounded-xl font-bold transition-all duration-300 shadow-lg hover:shadow-xl focus-visible transform hover:scale-105">
                    Send Message
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-24 bg-primary">
    <div class="max-w-4xl mx-auto px-6 text-center">
      <div class="scroll-reveal">
        <h2 class="font-display text-display-lg font-black text-white mb-6">Why Choose Habtom Abadi?</h2>
        <p class="text-green-100 text-body-lg mb-8 max-w-2xl mx-auto">With over 18 years of experience in international trade, we combine reliability, respect for commitments, and customer-based service delivery to ensure your success.</p>
        <div class="grid md:grid-cols-3 gap-8">
          <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-6 border border-white/20">
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-primary font-bold text-xl">18+</span>
            </div>
            <h3 class="font-display text-lg font-bold text-white mb-2">Years of Excellence</h3>
            <p class="text-green-100 text-sm">Established foundation in Ethiopian trade sector</p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-6 border border-white/20">
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-primary font-bold text-xl">✓</span>
            </div>
            <h3 class="font-display text-lg font-bold text-white mb-2">Reliable Service</h3>
            <p class="text-green-100 text-sm">Consistent delivery and commitment fulfillment</p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-6 border border-white/20">
            <div class="w-12 h-12 bg-white rounded-full flex items-center justify-center mx-auto mb-4">
              <span class="text-primary font-bold text-xl">🌍</span>
            </div>
            <h3 class="font-display text-lg font-bold text-white mb-2">Global Reach</h3>
            <p class="text-green-100 text-sm">International trade connections worldwide</p>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
@endsection
