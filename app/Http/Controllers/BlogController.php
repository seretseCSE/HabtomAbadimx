<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get categories
        $categories = BlogCategory::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        // Build query
        $query = BlogPost::with('category')
            ->where('is_published', true)
            ->orderBy('published_at', 'desc');
        
        // Filter by category
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        
        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                  ->orWhere('excerpt', 'like', "%{$searchTerm}%")
                  ->orWhere('body', 'like', "%{$searchTerm}%");
            });
        }
        
        // Get posts with pagination
        $posts = $query->paginate(12);
        
        return view('blog.index', compact(
            'settings',
            'categories',
            'posts'
        ));
    }
    
    public function show($slug)
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get the post
        $post = BlogPost::with('category')
            ->where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
        
        // Get related posts
        $relatedPosts = BlogPost::with('category')
            ->where('category_id', $post->category_id)
            ->where('id', '!=', $post->id)
            ->where('is_published', true)
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();
        
        // Increment view count
        $post->increment('views');
        
        return view('blog.show', compact(
            'settings',
            'post',
            'relatedPosts'
        ));
    }
}
