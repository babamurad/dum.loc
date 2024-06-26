<?php

namespace App\Livewire\Admin;

use App\Models\Contact;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ContactComponent extends Component
{
    use WithFileUploads;
    public $edit = false;
    #[Validate('required|min:10')]
    public $address;
    #[Validate('required|email')]
    public $email;
    #[Validate('required')]
    public $phone;
    #[Validate('required')]
    public $fax;
    #[Validate('required|image|max:1024')]
    public $image;
    public $newImage = '';

    public function render()
    {
        return view('livewire.admin.contact-component')->layout('components.layouts.admin-app');
    }

    public function mount()
    {
        $item = Contact::find(1);
        $this->address = $item->address;
        $this->email = $item->email;
        $this->phone = $item->phone;
        $this->fax = $item->fax;
        $this->image = $item->image;
    }

    public function canEdit()
    {
        $this->edit = ! $this->edit;
    }

    public function save()
    {
        $item = Contact::find(1);
        $item->address = $this->address;
        $item->email = $this->email;
        $item->phone = $this->phone;
        $item->fax = $this->fax;
        if ($this->newImage){
            if (file_exists('contacts/'.$this->image)){
                unlink('contacts/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('contacts/', $imageName);
            $item->image = $imageName;
        }
        $item->update();
        session()->flash('success', 'Данные успешно сохранены');
        $this->edit = false;
    }
}
