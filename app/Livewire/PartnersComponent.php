<?php

namespace App\Livewire;

use App\Models\Award;
use App\Models\Partner;
use Livewire\Component;

class PartnersComponent extends Component
{
    public function render()
    {
        $partners = Partner::published()->orderBy('order')->get();
        $awards = Award::published()->orderBy('order')->get();
        return view('livewire.partners-component', compact('partners', 'awards'));
    }
}
