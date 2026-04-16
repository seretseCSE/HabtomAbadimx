<?php

namespace App\Http\Controllers;

use App\Models\Setting;

class AboutController extends Controller
{
    public function index()
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        return view('about', compact(
            'settings'
        ));
    }
}
