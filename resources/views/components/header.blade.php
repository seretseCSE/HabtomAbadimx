@php
$settings = \App\Models\Setting::pluck('value', 'key')->toArray();
@endphp

<header x-data="{ mobileOpen: false, scrolled: false }" @scroll.window="scrolled = window.scrollY > 50" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <!-- Top Bar with Contact Info -->
    <div class="bg-earth text-white py-3">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center text-sm">
                <div class="hidden md:flex items-center space-x-4">
                    <a href="mailto:{{ $settings['email_1'] ?? 'info@habtomabadimx.com' }}" class="hover:text-gold transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        {{ $settings['email_1'] ?? 'info@habtomabadimx.com' }}
                    </a>
                    <a href="tel:{{ $settings['phone_1'] ?? '+251 000 000 000' }}" class="hover:text-gold transition-colors flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        {{ $settings['phone_1'] ?? '+251 000 000 000' }}
                    </a>
                    <span class="flex items-center">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        {{ $settings['working_hours'] ?? 'Mon-Sat: 9AM-6PM' }}
                    </span>
                </div>

                <!-- Language Switcher (if needed) -->
                <div class="flex items-center space-x-4">
                    @if(!empty($settings['phone_1']))
                        <a href="https://wa.me/{{ preg_replace('/[^0-9+]/', '', $settings['phone_1']) }}"
                           target="_blank"
                           class="hover:text-gold transition-colors flex items-center bg-green-600 hover:bg-green-700 px-3 py-1 rounded-lg text-white text-sm font-medium">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.646.134-.166.298-.346.447-.541.149-.199.149-.342.074-.541-.074-.199-.697-1.697-.967-2.321-.27-.623-.547-.539-.747-.539-.197 0-.423-.014-.65-.014-.227 0-.593.074-.904.372-.311.297-1.19 1.164-1.19 2.835 0 1.672 1.216 3.284 1.384 3.517.167.232 2.395 3.66 5.814 5.138 2.033.878 3.068 1.094 3.716 1.164.246.014.447.014.646-.014.99-.149 1.758-.867 2.006-1.647.247-.78.247-1.452.173-1.59-.074-.137-.27-.223-.547-.372z"/>
                                <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm0 22c-5.514 0-10-4.486-10-10S6.486 2 12 2s10 4.486 10 10-4.486 10-10 10z"/>
                            </svg>
                            WhatsApp
                        </a>
                    @endif

                  
                </div>
            </div>
        </div>

    </div>
    <!-- Main Navigation -->
    <nav :class="scrolled ? 'bg-white shadow-lg py-3' : 'bg-transparent py-5'" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    <br>
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center justify-between h-16">
            <!-- Logo -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center space-x-3">
                        <img src="{{ asset('Asset 1.png') }}"
                             alt="Habtom Abadi Logo"
                             class="h-10 transition-all duration-300 rounded-lg">
                        <span class="text-xl font-bold" :class="scrolled ? 'text-primary' : 'text-white'" transition-colors duration-300">
                            {{ $settings['site_name'] ?? 'Habtom Abadi Import Export' }}
                        </span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    @foreach($navigation ?? [] as $item)
                        <a href="{{ route($item['route']) }}"
                           class="nav-link flex items-center space-x-1" :class="scrolled ? 'text-gray-700 hover:text-primary' : 'text-white hover:text-green-200'" transition-colors duration-300">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                @switch($item['icon'])
                                    @case('home')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                        @break
                                    @case('information-circle')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        @break
                                    @case('briefcase')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        @break
                                    @case('cube')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                        @break
                                    @case('document-text')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                        @break
                                    @case('shield-check')
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0zm-9 2v1m0-3h.01M12 12h.01"></path>
                                        @break
                                    @default
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                @endswitch
                            </svg>
                            <span>{{ $item['name'] }}</span>
                        </a>
                    @endforeach

                    <a href="{{ url('/admin') }}"
                       class="bg-gold hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold transition-all duration-300 flex items-center space-x-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Admin</span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button @click="mobileOpen = !mobileOpen"
                        class="md:hidden" :class="scrolled ? 'text-gray-700' : 'text-white'" transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div x-show="mobileOpen"
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                 class="md:hidden bg-white border-t border-gray-200">
                <div class="px-6 py-4 space-y-3">
                    @foreach($navigation as $item)
                        <a href="{{ route($item['route']) }}"
                           @click="mobileOpen = false"
                           class="block text-gray-700 hover:text-primary transition-colors duration-300 py-2">
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                    <a href="{{ url('/admin') }}"
                       class="block bg-gold hover:bg-yellow-600 text-white px-4 py-2 rounded-lg font-semibold transition-all duration-300 mt-4">
                        Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
