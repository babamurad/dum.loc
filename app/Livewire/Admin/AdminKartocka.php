<?php

namespace App\Livewire\Admin;

use App\Models\Cart;
use Livewire\Component;

class AdminKartocka extends Component
{
    public $carts;
    public $editId;
    public $title, $bold, $desc, $group;

    public function render()
    {
        return view('livewire.admin.admin-kartocka')->layout('components.layouts.admin-app');
    }

    public function mount()
    {
        $this->carts = Cart::all();
    }

    public function edit($itemId)
    {
        $item = Cart::find($itemId);
        $this->editId = $item->id;
        $this->title = $item->title;
        $this->desc = $item->desc;
        $this->bold = $item->bold;
        $this->group = $item->group;
    }

    public function save()
    {
        $item = Cart::find($this->editId);
//        $item->editId =  $this->editId;
        $item->title =  $this->title;
        $item->desc =  $this->desc;
        $item->bold =  $this->bold;
        $item->group =  $this->group;
        $item->update();

        // Reload the items
        $this->carts = Cart::all();

        // Clear the edit state
        $this->editId = '';
        $this->title = '';
        $this->desc = '';
        $this->bold = '';
        $this->group = '';
    }


}
