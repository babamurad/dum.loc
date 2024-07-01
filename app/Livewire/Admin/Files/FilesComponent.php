<?php

namespace App\Livewire\Admin\Files;

use App\Models\File;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class FilesComponent extends Component
{
    use WithFileUploads;
    use WithPagination;

    #[Validate('required|min:3')]
    public $title;
    #[Validate('required')]
    public $file;

    public $published;
    public $order;
    public $editId;
    public $delId;

    public $newFile;

    public function render()
    {
        $files = File::files()->orderBy('order')->paginate(10);
        return view('livewire.admin.files.files-component', compact('files'))
            ->layout('components.layouts.admin-app');
    }

    public function resetInputFields()
    {
        $this->editId = '';
        $this->title = '';
        $this->file = '';
        $this->order = '';
        $this->published = '';
    }

    public function edit($id)
    {
        $file = File::findOrFail($id);
        $this->editId = $file->id;
        $this->title = $file->title;
        $this->file = $file->file;
        $this->order = $file->order;
        $this->published = $file->published;
    }

    public function update()
    {
        $this->validate();
        $file = File::findOrFail($this->editId);
        $file->title = $this->title;

        if ($this->newFile){
            if (file_exists('images/files/'.$this->file)){
                unlink('images/files/'.$this->file);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newFile->extension();
            $this->newFile->storeAs('images/files/', $imageName);
            $file->file = $imageName;
        }

        $file->published = $this->published;
        $file->order = $this->order;
        $file->update();
        $this->resetInputFields();
        session()->flash('success', 'Успешно изменена!');
    }

    public function save()
    {
        $file = new File();
        $file->title = $this->title;
        $file->published = $this->published;
        $file->order = $this->order;

        $fileName = Carbon::now()->timestamp.'.'.$this->file->extension();
        $this->file->storeAs('/files', $fileName);
        $file->file = $fileName;

        $file->save();
        session()->flash('success', 'Успешно добавлен!');
    }

    public function deleteId($id)
    {
        $file = File::findOrFail($id);
        $this->delId = $file->id;
    }

    public function destroy()
    {
        $file = File::findOrFail($this->delId);
        $this->file = $file->file;
        if (file_exists('images/files/'.$this->file)){
            unlink('images/files/'.$this->file);
        }
        $file->delete();
        $this->dispatch('closeNewsModal');
        session()->flash('error', 'Успешно удален!');
    }

}
