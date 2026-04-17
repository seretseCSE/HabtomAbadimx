<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Actions\Action;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Page
{
    protected static ?int $navigationSort = -2;
    
    protected function getViewPath(): string
    {
        return 'filament.pages.dashboard';
    }
    
    public function getTitle(): string
    {
        return 'Dashboard';
    }
    
    public static function getNavigationIcon(): string
    {
        return 'heroicon-o-home';
    }
    
    public static function getNavigationLabel(): string
    {
        return 'Dashboard';
    }
    
    protected function getHeaderActions(): array
    {
        return [
            Action::make('refresh')
                ->label('Refresh')
                ->icon('heroicon-o-arrow-path')
                ->action('refresh'),
        ];
    }
    
    public function refresh(): void
    {
        // Refresh action if needed
    }
    
    public function getUser()
    {
        return Auth::user();
    }
    
    public function getCompanyName()
    {
        return 'Habtom Abadi Import Export';
    }
}
