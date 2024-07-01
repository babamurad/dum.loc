<?php

namespace App\Livewire\Admin\Contract;

use App\Models\File;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateContract extends Component
{
    use WithFileUploads;

    #[Validate('required|min:3')]
    public $title;
    #[Validate('required')]
    public $file;
    public $filename;
    public $published;
    public $order;
    public $contract = true;

    public function render()
    {
        return view('livewire.admin.contract.create-contract')
            ->layout('components.layouts.admin-app');
    }
    public function create()
    {
        $this->validate();
        $file = new File();
        $file->title = $this->title;
        $file->published = $this->published;
        $file->order = $this->order;

        $fileName = Carbon::now()->timestamp.'.'.$this->file->extension();
        $this->file->storeAs('/files', $fileName);
        $file->file = $fileName;
        $file->filename = $this->file->getClientOriginalName();
        $file->contract = $this->contract;

        $file->save();
        session()->flash('success', 'Успешно добавлен!');
        $this->redirectRoute('admin.contract', navigate: true);
//        redirect()->route('admin.files');
    }
}
