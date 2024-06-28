<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LogoutComponent extends Component
{
    public function render()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
