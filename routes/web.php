<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CertificationsController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ServiceController;

// Test routes for debugging admin access
Route::get('/test-admin', function () {
    if (auth()->check()) {
        $user = auth()->user();
        return response()->json([
            'authenticated' => true,
            'user' => [
                'email' => $user->email,
                'id' => $user->id,
                'is_admin' => $user->is_admin
            ]
        ]);
    } else {
        return response()->json([
            'authenticated' => false,
            'message' => 'Not authenticated'
        ]);
    }
});

Route::get('/test-admin-access', function () {
    if (auth()->check() && auth()->user()->is_admin) {
        return response()->json([
            'access' => 'granted',
            'message' => 'Admin access confirmed'
        ]);
    } else {
        return response()->json([
            'access' => 'denied',
            'message' => 'Admin access required'
        ], 403);
    }
});

// Public web routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', function () {
    return redirect()->route('home');
})->name('login');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/{service}', [ServicesController::class, 'show'])->name('services.show');
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/products/{product}', [ProductsController::class, 'show'])->name('products.show');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/certifications', [CertificationsController::class, 'index'])->name('certifications');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store')->middleware('form.protection');

// Static pages
Route::get('/privacy', function() {
    return view('pages.privacy');
})->name('privacy');
Route::get('/terms', function() {
    return view('pages.terms');
})->name('terms');
Route::get('/sitemap', function() {
    return view('pages.sitemap');
})->name('sitemap');

// API routes for AJAX calls
Route::prefix('api')->group(function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::get('products/{product}', [ProductController::class, 'show']);
    Route::get('services/{service}', [ServiceController::class, 'show']);
});

// Filament admin routes (automatically registered)
