<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        return view('livewire.home-component');
    }

    public function toDashboard()
    {
        if (Auth::check() && Auth::user()->utype == 'ADM') {
            return redirect()->route('admin.dashboard')->with(wire:navigate);
        }
        return redirect()->route('login')->with(wire:navigate);
    }
}
