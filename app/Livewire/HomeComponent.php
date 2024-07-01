<?php

namespace App\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $files = File::published()->orderBy('order')->get();
        $contracts = File::published()->contract()->orderBy('order')->get();
        return view('livewire.home-component', compact('files', 'contracts'));
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
