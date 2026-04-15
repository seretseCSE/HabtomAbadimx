<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;

class NotificationIconWidget extends Widget
{
    protected static ?int $sort = 1;
    
    protected static string $view = 'filament.widgets.notification-icon';

    public function getViewData(): array
    {
        $user = Auth::user();
        
        if (!$user) {
            return [
                'unreadCount' => 0,
            ];
        }

        $unreadCount = $user->unreadNotifications()->count();

        return [
            'unreadCount' => $unreadCount,
        ];
    }

    public static function canView(): bool
    {
        return auth()->check() && auth()->user()->is_admin;
    }
}
