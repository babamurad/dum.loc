<?php

namespace App\Livewire\Admin\Files;

use App\Models\File;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class FilesCreateComponent extends Component
{
    use WithFileUploads;

    #[Validate('required|min:3')]
    public $title;
    #[Validate('required')]
    public $file;
    public $filename;
    public $published;
    public $order;

    public function render()
    {
        return view('livewire.admin.files.files-create-component')
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

        $file->save();
        session()->flash('success', 'Успешно добавлен!');
        $this->redirectRoute('admin.files', navigate: true);
//        redirect()->route('admin.files');
    }
}
