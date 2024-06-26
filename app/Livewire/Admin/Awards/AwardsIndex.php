<?php

namespace App\Livewire\Admin\Awards;

use App\Models\Award;
use Livewire\Component;

class AwardsIndex extends Component
{
    public $del_id;
    public $image;

    public function render()
    {
        $awards = Award::all();
        return view('livewire.admin.awards.awards-index', compact('awards'))
            ->layout('components.layouts.admin-app');
    }

    public function unPublish($id)
    {
        $award = Award::findOrFail($id);
        $award->published = !$award->published;
        $award->update();
    }
    public function deleteId($id)
    {
        $this->del_id = $id;
    }

    public function destroy()
    {
        $item = Award::findOrFail($this->del_id);
        $this->image = $item->image;
        if (file_exists('images/awards/'.$this->image)){
            unlink('images/awards/'.$this->image);
        }
        $item->delete();

        $this->dispatch('closeNewsModal');
        session()->flash('error', 'Данные награды успешно удалены!');
    }
}
