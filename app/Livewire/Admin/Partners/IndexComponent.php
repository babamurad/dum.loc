<?php

namespace App\Livewire\Admin\Partners;

use App\Models\Partner;
use Livewire\Component;
use Livewire\WithPagination;

class IndexComponent extends Component
{
    use WithPagination;

    public $del_id;
    public $image;
    public $selectedDate;

    public function render()
    {
        $partners = Partner::orderBy('order')->paginate(18);
        return view('livewire.admin.partners.index-component', compact('partners'))
            ->layout('components.layouts.admin-app');
    }

    public function deleteId($id)
    {
        $this->del_id = $id;
    }

    public function destroy()
    {
        $item = Partner::findOrFail($this->del_id);
        $this->image = $item->image;
        if (file_exists('images/partners/'.$this->image)){
            unlink('images/partners/'.$this->image);
        }
        $item->delete();

        $this->dispatch('closeNewsModal');
        session()->flash('error', 'Данные партнера успешно удалены!');
    }
}
