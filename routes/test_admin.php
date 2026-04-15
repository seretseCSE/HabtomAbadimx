<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
