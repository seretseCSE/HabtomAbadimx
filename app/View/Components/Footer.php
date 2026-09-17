<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Setting;

class Footer extends Component
{
    public $settings;
    public $socialLinks;
    public $quickLinks;

    public function __construct()
    {
        $this->settings = Setting::getAllSettings();
        $this->socialLinks = $this->getSocialLinks();
        $this->quickLinks = $this->getQuickLinks();
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

    public function render()
    {
        return view('components.footer');
    }
}
