<?php

namespace App\Livewire\Admin\Partners;

use App\Models\Partner;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    #[Validate]
    public $image;

    public $title;

    public $desc;

    public bool $published = false;
    public $edit_id;
    public $newImage;
    public $order;

    protected array $rules = [
        'image' => 'max:1024',
        'newImage' => 'max:1024',
    ];

    public function render()
    {
        return view('livewire.admin.partners.edit')->layout('components.layouts.admin-app');
    }

    public function mount($id)
    {
        $item = Partner::findOrFail($id);
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

        $item = Partner::findOrFail($this->edit_id);
        if ($this->newImage){
            if (file_exists('partners/'.$this->image)){
                unlink('partners/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('partners/', $imageName);
            $item->image = $imageName;
        }
        $item->title = $this->title;
        $item->desc = $this->desc;
        $item->order = $this->order;
        $item->published = $this->published;
        $item->update();

        $this->resetInputFields();
        session()->flash('success', 'Данные партнера успешно изменены!');
        return redirect()->to('/admin/partners');

    }

    public function resetInputFields()
    {
        $this->image = '';
        $this->title = '';
        $this->desc = '';
        $this->published = '';
    }
}
