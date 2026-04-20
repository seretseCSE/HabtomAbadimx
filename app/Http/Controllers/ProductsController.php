<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get all categories
        $categories = Category::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        // Build products query
        $query = Product::with('category', 'media')
            ->where('status', 'active')
            ->orderBy('is_featured', 'desc')
            ->orderBy('created_at', 'desc');
        
        // Apply category filter
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        
        // Apply search filter
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('name', 'like', "%{$searchTerm}%")
                  ->orWhere('description', 'like', "%{$searchTerm}%")
                  ->orWhere('origin_country', 'like', "%{$searchTerm}%")
                  ->orWhere('unit', 'like', "%{$searchTerm}%")
                  ->orWhere('hs_code', 'like', "%{$searchTerm}%");
            });
        }
        
        // Get products with pagination
        $products = $query->paginate(12);
        
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
        $relatedProducts = Product::with('category', 'media')
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
