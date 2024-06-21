<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminNewsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-news-component')->layout('components.layouts.admin-app');
    }
}
