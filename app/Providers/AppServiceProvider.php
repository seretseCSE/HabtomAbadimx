<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::share('navigation', [
            ['name' => 'Home', 'route' => 'home', 'icon' => 'home'],
            ['name' => 'About', 'route' => 'about', 'icon' => 'information-circle'],
            ['name' => 'Services', 'route' => 'services', 'icon' => 'briefcase'],
            ['name' => 'Products', 'route' => 'products', 'icon' => 'cube'],
            ['name' => 'Blog', 'route' => 'blog.index', 'icon' => 'document-text'],
            ['name' => 'Contact', 'route' => 'contact', 'icon' => 'envelope'],
        ]);

        try {
            View::share('settings', Setting::getAllSettings());
        } catch (\Throwable $e) {
            View::share('settings', []);
        }
    }
}
