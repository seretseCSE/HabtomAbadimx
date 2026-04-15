<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ServiceController;

// API Routes
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/services/{service}', [ServiceController::class, 'show']);
