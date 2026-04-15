<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share navigation menu with all views
        view()->composer('*', function ($view) {
            $navigation = [
                ['name' => 'Home', 'route' => 'home', 'icon' => 'home'],
                ['name' => 'About', 'route' => 'about', 'icon' => 'information-circle'],
                ['name' => 'Services', 'route' => 'services', 'icon' => 'briefcase'],
                ['name' => 'Products', 'route' => 'products', 'icon' => 'cube'],
                ['name' => 'Blog', 'route' => 'blog.index', 'icon' => 'document-text'],
                ['name' => 'Contact', 'route' => 'contact', 'icon' => 'shield-check'],
            ];

            $view->with('navigation', $navigation);
        });
    }
}
