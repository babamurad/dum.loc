<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class CreateNewsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.create-news-component')->layout('components.layouts.admin-app');
    }
}
