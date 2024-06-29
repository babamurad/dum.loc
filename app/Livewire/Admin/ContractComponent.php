<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class ContractComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.contract-component')
            ->layout('components.layouts.admin-app');
    }
}
