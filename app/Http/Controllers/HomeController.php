<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Service;
use App\Models\Product;
use App\Models\Partner;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get services
        $services = Service::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->take(6)
            ->get();
        
        // Get products
        $products = Product::where('status', 'active')
            ->with('category')
            ->take(8)
            ->get();
        
        // Get partners
        $partners = Partner::where('is_featured', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        // Stats counter data
        $stats = [
            ['value' => '50+', 'label' => 'Countries Served'],
            ['value' => '1000+', 'label' => 'Happy Clients'],
            ['value' => '500+', 'label' => 'Products'],
            ['value' => '10+', 'label' => 'Years Experience'],
        ];
        
        // Navigation menu items
        $navigation = [
            ['name' => 'Home', 'route' => 'home'],
            ['name' => 'About', 'route' => 'about'],
            ['name' => 'Services', 'route' => 'services'],
            ['name' => 'Products', 'route' => 'products'],
            ['name' => 'Blog', 'route' => 'blog.index'],
            ['name' => 'Contact', 'route' => 'contact'],
        ];
        
        return view('home', compact(
            'settings',
            'services',
            'products',
            'partners',
            'stats',
            'navigation'
        ));
    }
}
