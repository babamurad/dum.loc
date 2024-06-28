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
//        dd(Auth::user()->utype. ' and ' . Auth::check());
        if (Auth::check() && Auth::user()->utype == 'ADM') {
            $this->redirectRoute('admin.dashboard');
        } else {
            $this->redirectRoute('login', navigate: true);
        }
    }
}
