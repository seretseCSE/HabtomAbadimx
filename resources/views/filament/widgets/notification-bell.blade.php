@php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
@endphp

<div class="relative" x-data="{ open: false }">
    <!-- Notification Bell -->
    <button @click="open = !open" class="relative p-2 rounded-lg hover:bg-gray-100 transition-colors">
        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538.214 1.055.595 1.405L5 17m5 4v1a1 1 0 01-1 1h-4a1 1 0 01-1-1v-1m3-5a2 2 0 11-4 0v-1a2 2 0 114 0v1m-1 4h8"></path>
        </svg>
        
        @if ($unreadCount > 0)
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold">
                {{ $unreadCount > 99 ? '99+' : $unreadCount }}
            </span>
        @endif
    </button>

    <!-- Dropdown -->
    <div x-show="open" 
         x-cloak
         @click.away="open = false"
         class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg border border-gray-200 z-50">
        <div class="p-4 border-b border-gray-200">
            <h3 class="font-semibold text-gray-900">Notifications</h3>
        </div>
        
        <div class="max-h-96 overflow-y-auto">
            @if ($notifications->count() > 0)
                @foreach ($notifications as $notification)
                    <div class="p-4 hover:bg-gray-50 border-b border-gray-100 cursor-pointer transition-colors"
                         onclick="window.location.href='{{ $notification->data['url'] ?? '#' }}'">
                        <div class="flex items-start space-x-3">
                            <div class="flex-shrink-0">
                                @if ($notification->data['type'] === 'rfq')
                                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-blue-100 text-blue-600">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-5L9 2 4H4zm2 6a1 1 0 012 0v4a1 1 0 11-2 0v-4zm3 0a1 1 0 012 0v4a1 1 0 11-2 0v-4z" clip-rule="evenodd"/>
                                        </svg>
                                    </span>
                                @elseif ($notification->data['type'] === 'contact')
                                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-green-100 text-green-600">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                                        </svg>
                                    </span>
                                @else
                                    <span class="inline-flex items-center justify-center w-8 h-8 rounded-full bg-gray-100 text-gray-600">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"/>
                                        </svg>
                                    </span>
                                @endif
                            </div>
                            
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-900">
                                    {{ $notification->data['title'] }}
                                </p>
                                <p class="text-sm text-gray-500 truncate">
                                    {{ $notification->data['message'] }}
                                </p>
                                <p class="text-xs text-gray-400">
                                    {{ $notification->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="p-8 text-center text-gray-500">
                    <svg class="w-12 h-12 mx-auto mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538.214 1.055.595 1.405L5 17m5 4v1a1 1 0 01-1 1h-4a1 1 0 01-1-1v-1m3-5a2 2 0 11-4 0v-1a2 2 0 114 0v1m-1 4h8"></path>
                    </svg>
                    <p class="text-sm">No notifications</p>
                </div>
            @endif
        </div>
        
        @if ($notifications->count() > 0)
            <div class="p-4 border-t border-gray-200">
                <a href="{{ route('filament.admin.pages.notifications') }}" 
                   class="text-sm text-primary hover:text-primary-dark font-medium">
                    View all notifications
                </a>
            </div>
        @endif
    </div>
</div>
