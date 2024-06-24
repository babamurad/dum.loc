<?php

namespace App\Livewire\Admin\Partners;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $partners = Partner::paginate(8);
        return view('livewire.admin.partners.index-component', compact('partners'))
            ->layout('components.layouts.admin-app');
    }
}
