<div class="relative">
    <a href="{{ route('filament.admin.pages.notifications') }}" 
       class="relative p-2 rounded-lg hover:bg-gray-100 transition-colors group">
        <svg class="w-6 h-6 text-gray-600 group-hover:text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538.214 1.055.595 1.405L5 17m5 4v1a1 1 0 01-1 1h-4a1 1 0 01-1-1v-1m3-5a2 2 0 11-4 0v-1a2 2 0 114 0v1m-1 4h8"></path>
        </svg>
        
        @if ($unreadCount > 0)
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-bold animate-pulse">
                {{ $unreadCount > 99 ? '99+' : $unreadCount }}
            </span>
        @endif
    </a>
</div>
