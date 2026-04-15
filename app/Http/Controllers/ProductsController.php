<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Product;
use App\Models\Category;

class ProductsController extends Controller
{
    public function index()
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get all categories
        $categories = Category::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        // Get products with pagination
        $products = Product::with('category')
            ->where('status', 'active')
            ->orderBy('sort_order', 'asc')
            ->paginate(12);
        
        return view('products', compact(
            'settings',
            'categories',
            'products'
        ));
    }
    
    public function show(Product $product)
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get related products
        $relatedProducts = Product::with('category')
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('status', 'active')
            ->take(4)
            ->get();
        
        return view('products.show', compact(
            'settings',
            'product',
            'relatedProducts'
        ));
    }
}
