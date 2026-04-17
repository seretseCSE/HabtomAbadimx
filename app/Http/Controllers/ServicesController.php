<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index()
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();

        // Get all active services
        $services = Service::with('media')
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('services', compact(
            'settings',
            'services'
        ));
    }

    public function show(Service $service)
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();

        // Get related services
        $relatedServices = Service::where('is_active', true)
            ->where('id', '!=', $service->id)
            ->orderBy('sort_order', 'asc')
            ->take(3)
            ->get();

        return view('services.show', compact(
            'settings',
            'service',
            'relatedServices'
        ));
    }
}
