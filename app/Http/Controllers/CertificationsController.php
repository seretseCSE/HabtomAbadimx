<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\Certification;
use App\Models\Partner;

class CertificationsController extends Controller
{
    public function index()
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get all active certifications
        $certifications = Certification::with('media')
            ->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        // Get featured partners (with media)
        $featuredPartners = Partner::where('is_featured', true)
            ->with('media')
            ->orderBy('sort_order', 'asc')
            ->get();
        
        // Get all partners for slider (with media)
        $allPartners = Partner::where('is_active', true)
            ->with('media')
            ->orderBy('sort_order', 'asc')
            ->get();
        
        // Get partnership types statistics
        $partnershipTypes = $allPartners->groupBy('partnership_type')
            ->mapWithKeys(function ($group, $key) {
                return [$key => $group->count()];
            });
        
        return view('certifications', compact(
            'settings',
            'certifications',
            'featuredPartners',
            'allPartners',
            'partnershipTypes'
        ));
    }
}
