<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\TeamMember;
use App\Models\Certification;

class AboutController extends Controller
{
    public function index()
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get team members
        $teamMembers = TeamMember::orderBy('sort_order', 'asc')
            ->get();
        
        // Get certifications
        $certifications = Certification::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        return view('about', compact(
            'settings',
            'teamMembers',
            'certifications'
        ));
    }
}
