<?php

namespace App\Livewire\Admin\Awards;

use App\Models\Award;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AwardsEdit extends Component
{
    use WithFileUploads;

    #[Validate('max:1024|nullable')]
    public $image;
    #[Validate('required|min:3')]
    public $title;

    public $desc;

    public bool $published = false;
    public $edit_id;
    #[Validate('max:1024|nullable')]
    public $newImage;
    public $order;

    public function render()
    {
        return view('livewire.admin.awards.awards-edit')->layout('components.layouts.admin-app');
    }
    public function mount($id)
    {
        $item = Award::findOrFail($id);
        $this->edit_id = $item->id;
        $this->image = $item->image;
        $this->title = $item->title;
        $this->desc = $item->desc;
        $this->order = $item->order;
        $this->published = $item->published;
    }

    public function update()
    {
        $this->validate();

        $item = Award::findOrFail($this->edit_id);
        if ($this->newImage){
            if (file_exists('awards/'.$this->image)){
                unlink('awards/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('awards/', $imageName);
            $item->image = $imageName;
        }
        $item->title = $this->title;
        $item->desc = $this->desc;
        $item->order = $this->order;
        $item->published = $this->published;
        $item->update();

        $this->resetInputFields();
        session()->flash('success', 'Данные награды успешно изменены!');
        return redirect()->to('/admin/awards');

    }

    public function resetInputFields()
    {
        $this->image = '';
        $this->title = '';
        $this->desc = '';
        $this->published = '';
    }
}
