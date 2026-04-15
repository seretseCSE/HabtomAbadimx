<?php

namespace App\Http\Livewire;

use App\Models\Advantage;
use Livewire\Component;

class WhyChooseUs extends Component
{
    public $advantages;

    public function mount()
    {
        $this->advantages = Advantage::where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->get();
    }

    public function render()
    {
        return view('livewire.why-choose-us');
    }
}
