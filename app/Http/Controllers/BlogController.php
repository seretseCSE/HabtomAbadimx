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
        $settings = Setting::pluck('value', 'key')->toArray();
        
        $categories = BlogCategory::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        $query = BlogPost::with('category', 'media')
            ->where('is_published', true)
            ->orderBy('published_at', 'desc');
        
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', "%{$searchTerm}%")
                ->orWhere('excerpt', 'like', "%{$searchTerm}%")
                ->orWhere('body', 'like', "%{$searchTerm}%");
            });
        }
        
        $posts = $query->paginate(12);

        // TEMPORARY DEBUG
        // $firstPost = $posts->first();
        // if ($firstPost) {
        //     dd([
        //         'featured_image_url' => $firstPost->featured_image_url,
        //         'getFirstMediaUrl' => $firstPost->getFirstMediaUrl('featured_image'),
        //         'media_count' => $firstPost->getMedia('featured_image')->count(),
        //         'cover_image' => $firstPost->cover_image,
        //         'media' => $firstPost->getMedia('featured_image')->first()?->toArray(),
        //     ]);
        // }
        
        return view('blog.index', compact('settings', 'categories', 'posts'));
    }
    
    public function show($slug)
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get the post
        $post = BlogPost::with('category', 'media')
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
