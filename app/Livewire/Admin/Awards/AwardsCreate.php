<?php

namespace App\Livewire\Admin\Awards;

use App\Models\Award;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AwardsCreate extends Component
{
    use WithFileUploads;

    #[Validate('required|image|max:1024')]
    public $image;
    #[Validate('required|min:3')]
    public $title;

    public $desc;

    public bool $published = false;
    public $order;

//    protected array $rules = [
//        'image' => 'required|image|max:1024',
//    ];

    public function render()
    {
        return view('livewire.admin.awards.awards-create')->layout('components.layouts.admin-app');
    }

    public function create()
    {
        $this->validate();

        $item = new Award();
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('/awards', $imageName);
        $item->image = $imageName;
        $item->title = $this->title;
        $item->desc = $this->desc;
        $item->published = $this->published;
        $item->order = $this->order;
        $item->save();
        //dd($item->id);
        $this->resetInputFields();
        session()->flash('success', 'Награда успешно добавлен!');
        return redirect()->to('/admin/awards');

    }

    public function resetInputFields()
    {
        $this->image = '';
        $this->title = '';
        $this->text = '';
        $this->published = false;
    }
}
