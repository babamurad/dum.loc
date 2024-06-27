<?php

namespace App\Livewire;

use Livewire\Component;

class KartockaComponent extends Component
{
    public function render()
    {
        return view('livewire.kartocka-component')->layout('components.layouts.app-second');
    }
}
