<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        // Load product with relationships
        $product->load(['category', 'media']);
        
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
            'sku' => $product->sku,
            'specifications' => $product->specifications,
            'images' => $product->getMedia('images')->map(function ($media) {
                return [
                    'id' => $media->id,
                    'url' => $media->getUrl(),
                    'thumb_url' => $media->getUrl('thumb'),
                    'name' => $media->name,
                    'size' => $this->formatBytes($media->size),
                ];
            })->toArray(),
            'is_featured' => $product->is_featured,
            'created_at' => $product->created_at->format('M d, Y'),
        ]);
    }

    public function index(Request $request)
    {
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

        // Format products for JSON response
        $formattedProducts = $products->getCollection()->map(function ($product) {
            return [
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
                'sku' => $product->sku,
                'images' => $product->getMedia('images')->map(function ($media) {
                    return [
                        'id' => $media->id,
                        'url' => $media->getUrl(),
                        'thumb_url' => $media->getUrl('thumb'),
                        'name' => $media->name,
                    ];
                })->toArray(),
                'is_featured' => $product->is_featured,
                'created_at' => $product->created_at->format('M d, Y'),
            ];
        });

        return response()->json([
            'data' => $formattedProducts,
            'pagination' => [
                'current_page' => $products->currentPage(),
                'last_page' => $products->lastPage(),
                'per_page' => $products->perPage(),
                'total' => $products->total(),
                'from' => $products->firstItem(),
                'to' => $products->lastItem(),
            ],
        ]);
    }

    private function formatBytes($bytes, $precision = 2)
    {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');
        
        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }
        
        return round($bytes, $precision) . ' ' . $units[$i];
    }
}
