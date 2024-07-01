<?php

namespace App\Livewire\Admin\Contract;

use App\Models\File;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditContract extends Component
{
    use WithFileUploads;

    #[Validate('required|min:3')]
    public $title;
    #[Validate('required')]
    public $file;
    public $filename;
    public $published;
    public $order;
    public $newFile;
    public $editId;

    public function render()
    {
        return view('livewire.admin.contract.edit-contract')
            ->layout('components.layouts.admin-app');
    }

    public function mount($id)
    {
        $file = File::findOrFail($id);
        $this->editId = $file->id;
        $this->title = $file->title;
        $this->file = $file->file;
        $this->filename = $file->filename;
        $this->order = $file->order;
        $this->published = $file->published;
    }

    public function update()
    {
        $this->validate();
        $file = File::findOrFail($this->editId);
        $file->title = $this->title;

        if ($this->newFile){
            if (file_exists('files/'.$this->file)){
                unlink('files/'.$this->file);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newFile->extension();
            $this->newFile->storeAs('files/', $imageName);
            $file->file = $imageName;
            $file->filename = $this->newFile->getClientOriginalName();
        }

        $file->published = $this->published;
        $file->order = $this->order;
        $file->contract = true;
        $file->update();
        $this->resetInputFields();
        session()->flash('success', 'Успешно изменена!');
        $this->redirectRoute('admin.contract', navigate: true);
    }

    public function resetInputFields()
    {
        $this->title = '';
        $this->file = '';
        $this->order = '';
        $this->published = '';
    }
}
