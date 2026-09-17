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
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
              <span>{{ $settings['address'] ?? 'Addis Ababa, Ethiopia' }}</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
              <span>{{ $settings['contact_phone'] ?? $settings['company_phone'] ?? '+251 000 000 000' }}</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
              <span>{{ $settings['contact_email'] ?? $settings['company_email'] ?? 'info@habtomabadimx.com' }}</span>
            </li>
            <li class="flex items-start gap-2">
              <svg class="w-4 h-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              <span>{{ $settings['working_hours'] ?? 'Mon-Sat: 8:00 AM - 5:00 PM' }}</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="border-t border-gray-800 pt-6 text-xs flex justify-between">
        <span>&copy; {{ date('Y') }} {{ $settings['company_name'] ?? 'Habtom Abadi Import Export' }}.</span>
        <span>Developed by
            <a href="https://empire.et" target="_blank" rel="noopener noreferrer" class="text-primary hover:text-gold transition-colors">
                Empire Technological Solution
            </a>
        </span>
      </div>
    </div>
</footer>
