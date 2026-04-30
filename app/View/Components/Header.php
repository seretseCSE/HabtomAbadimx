<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Setting;

class Header extends Component
{
    public $navigation;
    public $contactInfo;

    public function __construct()
    {
        $this->navigation = $this->getNavigationItems();
        $this->contactInfo = $this->getContactInfo();
    }

    private function getNavigationItems()
    {
        return [
            ['name' => 'Home', 'route' => 'home', 'icon' => 'home'],
            ['name' => 'About', 'route' => 'about', 'icon' => 'information-circle'],
            ['name' => 'Services', 'route' => 'services', 'icon' => 'briefcase'],
            ['name' => 'Products', 'route' => 'products', 'icon' => 'cube'],
            ['name' => 'Blog', 'route' => 'blog.index', 'icon' => 'document-text'],
            ['name' => 'Certifications', 'route' => 'certifications', 'icon' => 'shield-check'],
            ['name' => 'Contact', 'route' => 'contact', 'icon' => 'envelope'],
        ];
    }

    private function getContactInfo()
    {
        $settings = Setting::pluck('value', 'key')->toArray();

        return [
            'email' => $settings['email_1'] ?? 'info@habtomabadimx.com',
            'phone' => $settings['phone_1'] ?? '+251 000 000 000',
            'whatsapp' => $settings['phone_1'] ?? null,
            'working_hours' => $settings['working_hours'] ?? 'Mon-Fri: 9:00 AM - 6:00 PM',
        ];
    }

    public function render()
    {
        return view('components.header');
    }
}
