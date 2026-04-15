<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        // Load product with relationships
        $product->load('category');
        
        // Format product data for JSON response
        return response()->json([
            'id' => $product->id,
            'name' => $product->name,
            'slug' => $product->slug,
            'description' => $product->description,
            'category' => [
                'id' => $product->category->id,
                'name' => $product->category->name,
            ],
            'origin_country' => $product->origin_country,
            'unit' => $product->unit,
            'status' => $product->status,
            'hs_code' => $product->hs_code,
            'images' => $product->images ?? [],
            'is_featured' => $product->is_featured,
        ]);
    }
}
