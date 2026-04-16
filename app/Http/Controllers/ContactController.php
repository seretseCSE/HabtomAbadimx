<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\ContactInquiry;
use App\Models\User;
use App\Notifications\NewContactInquiryNotification;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Get site settings
        $settings = Setting::pluck('value', 'key')->toArray();
        
        // Get services for RFQ form
        $services = \App\Models\Service::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
        
        return view('contact', compact(
            'settings',
            'services'
        ));
    }
    
    public function store(Request $request)
    {
        // Check honeypot fields first
        if ($request->filled('website') || $request->filled('phone2')) {
            return response()->json(['message' => 'Spam detected'], 422);
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
            'website' => 'prohibited', // Honeypot field
            'phone2' => 'prohibited', // Honeypot field
        ]);
        
        // Create contact inquiry
        $inquiry = ContactInquiry::create($validated);
        
        // Send notification to admin users
        $adminUsers = User::where('is_admin', true)->get();
        foreach ($adminUsers as $admin) {
            $admin->notify(new NewContactInquiryNotification($inquiry));
        }
        
        return redirect()->route('contact')
            ->with('success', 'Thank you for your message! We will get back to you within 24 hours.');
    }
}
