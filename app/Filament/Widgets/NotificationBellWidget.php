<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class NotificationBellWidget extends Widget
{
    protected static ?int $sort = 1;
    
    protected static string $view = 'filament.widgets.notification-bell';

    public function getViewData(): array
    {
        $user = Auth::user();
        
        if (!$user) {
            return [
                'unreadCount' => 0,
                'notifications' => [],
            ];
        }

        $unreadNotifications = $user->unreadNotifications()
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        $unreadCount = $user->unreadNotifications()->count();

        return [
            'unreadCount' => $unreadCount,
            'notifications' => $unreadNotifications,
        ];
    }

    public static function canView(): bool
    {
        return auth()->check() && auth()->user()->is_admin;
    }
}
