<?php

namespace App\Livewire\Admin\Partners;

use App\Models\Partner;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    #[Validate]
    public $image;

    public $title;

    public $desc;

    public bool $published = false;

    protected array $rules = [
        'image' => 'required|image|max:1024',
        'title' => 'required|min:5',
        'desc' => 'required|min:5',
    ];

    public function render()
    {
        return view('livewire.admin.partners.create')->layout('components.layouts.admin-app');
    }

    public function save()
    {
        $this->validate();

        $item = new Partner();
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('/partners', $imageName);
        $item->image = $imageName;
        $item->title = $this->title;
        $item->desc = $this->desc;
        $item->published = $this->published;
        $item->save();
        $this->resetInputFields();
        session()->flash('success', 'Партнер успешно добавлен!');
        return redirect()->to('/admin/partners');

    }

    public function resetInputFields()
    {
        $this->image = '';
        $this->title = '';
        $this->text = '';
        $this->published = false;
    }
}
