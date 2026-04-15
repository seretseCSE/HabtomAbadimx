<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Service;

class ServiceController extends Controller
{
    public function show(Service $service)
    {
        // Format service data for JSON response
        return response()->json([
            'id' => $service->id,
            'name' => $service->name,
            'slug' => $service->slug,
            'description' => $service->description,
            'full_description' => $service->full_description ?? $service->description,
            'icon' => $service->icon,
            'features' => $service->features ?? [],
            'benefits' => $service->benefits,
            'process' => $service->process,
            'is_active' => $service->is_active,
        ]);
    }
}
