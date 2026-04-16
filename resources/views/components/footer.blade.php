<footer class="bg-gray-900 text-gray-400 pt-16 pb-8">
    <div class="max-w-7xl mx-auto px-6">
      <div class="grid md:grid-cols-3 gap-10 mb-12">
        <div>
          <div class="flex items-center gap-3 mb-4">
            <div class="w-11 h-11 rounded-xl bg-primary flex items-center justify-center">
              <img src="{{ asset('Asset 1.png') }}"
                             alt="Habtom Abadi Logo"
                             class="h-10 transition-all duration-300 rounded-lg">
            </div>
            <div>
              <div class="text-white font-display font-bold">Habtom Abadi</div>
              <div class="text-green-400 text-xs tracking-widest uppercase">Import · Export</div>
            </div>
          </div>
        </div>
        <div>
          <h4 class="text-white font-bold mb-4">Quick Links</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="{{ route('about') }}" class="hover:text-primary transition-colors">About Us</a></li>
            <li><a href="{{ route('services') }}" class="hover:text-primary transition-colors">Services</a></li>
            <li><a href="{{ route('products') }}" class="hover:text-primary transition-colors">Products</a></li>
            <li><a href="{{ route('blog.index') }}" class="hover:text-primary transition-colors">Resources</a></li>
            <li><a href="{{ route('contact') }}" class="hover:text-primary transition-colors">Contact</a></li>
          </ul>
        </div>
        <div>
          <h4 class="text-white font-bold mb-4">Contact</h4>
          <ul class="space-y-3 text-sm">
            <li>{{ $settings['address_1'] ?? 'Addis Ababa, Ethiopia' }}</li>
            <li>{{ $settings['phone_1'] ?? '+251 000 000 000' }}</li>
            <li>{{ $settings['email_1'] ?? 'info@habtomabadimx.com' }}</li>
            <li>{{ $settings['working_hours'] ?? 'Mon-Sat: 8:00 AM - 5:00 PM' }}</li>
          </ul>
        </div>
      </div>
      <div class="border-t border-gray-800 pt-6 text-xs flex justify-between">
        <span>{{ date('Y') }} {{ $settings['site_name'] ?? 'Habtom Abadi Import Export' }}.</span>
        <span>Developed by
            <a href="https://empire.et" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-gold transition-colors">
                Empire Technological Solution
            </a>
        </span>
      </div>
    </div>
</footer>
