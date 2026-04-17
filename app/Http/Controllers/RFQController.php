<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\RFQ;
use App\Models\Service;
use App\Models\User;
use App\Notifications\NewRFQNotification;
use Illuminate\Http\Request;

class RFQController extends Controller
{
    public function create()
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get services for dropdown
        $services = Service::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        return view('rfq.create', compact(
            'settings',
            'services'
        ));
    }
    
    public function store(Request $request)
    {
        // Check honeypot fields first
        if ($request->filled('website') || $request->filled('email_confirm')) {
            return response()->json(['message' => 'Spam detected'], 422);
        }

        $validated = $request->validate([
            'company' => 'nullable|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'product_interest' => 'required|string|max:255',
            'product_description' => 'nullable|string|max:5000',
            'quantity' => 'nullable|string|max:255',
            'unit' => 'nullable|string|max:255',
            'website' => 'prohibited', // Honeypot field
            'email_confirm' => 'prohibited', // Honeypot field
        ]);
        
        // Set default status
        $validated['status'] = 'New';
        
        // Create RFQ
        $rfq = RFQ::create($validated);
        
        // Send notification to admin users
        $adminUsers = User::where('is_admin', true)->get();
        foreach ($adminUsers as $admin) {
            $admin->notify(new NewRFQNotification($rfq));
        }
        
        return redirect()->route('rfq.create')
            ->with('success', 'Thank you for your RFQ request! We will review your requirements and get back to you');
    }
}
