<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Setting;
use App\Models\Certification;
use App\Models\Partner;

class Footer extends Component
{
    public $settings;
    public $socialLinks;
    public $quickLinks;
    public $certifications;
    public $partners;

    public function __construct()
    {
        $this->settings = Setting::pluck('value', 'key')->toArray();
        $this->socialLinks = $this->getSocialLinks();
        $this->quickLinks = $this->getQuickLinks();
        $this->certifications = $this->getCertifications();
        $this->partners = $this->getPartners();
    }

    private function getSocialLinks()
    {
        return [
            'facebook' => $this->settings['facebook_url'] ?? null,
            'twitter' => $this->settings['twitter_url'] ?? null,
            'linkedin' => $this->settings['linkedin_url'] ?? null,
            'instagram' => $this->settings['instagram_url'] ?? null,
            'youtube' => $this->settings['youtube_url'] ?? null,
        ];
    }

    private function getQuickLinks()
    {
        return [
            ['name' => 'Home', 'route' => 'home'],
            ['name' => 'About Us', 'route' => 'about'],
            ['name' => 'Services', 'route' => 'services'],
            ['name' => 'Products', 'route' => 'products'],
            ['name' => 'Blog', 'route' => 'blog.index'],
            ['name' => 'Certifications', 'route' => 'certifications'],
            ['name' => 'Contact', 'route' => 'contact'],
            ['name' => 'Privacy Policy', 'route' => 'privacy'],
            ['name' => 'Terms of Service', 'route' => 'terms'],
        ];
    }

    private function getCertifications()
    {
        return Certification::where('is_active', true)
            ->where('is_featured', true)
            ->orderBy('sort_order', 'asc')
            ->take(6)
            ->get();
    }

    private function getPartners()
    {
        return Partner::where('is_featured', true)
            ->orderBy('sort_order', 'asc')
            ->take(8)
            ->get();
    }

    public function render()
    {
        return view('components.footer');
    }
}
