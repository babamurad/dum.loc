<?php

namespace App\Livewire\Admin\Contract;

use App\Models\File;
use Livewire\Component;
use Livewire\WithPagination;

class ContractComponent extends Component
{
    use WithPagination;

    public $delId;

    public function render()
    {
        $files = File::contract()->orderBy('order')->paginate(10);
        return view('livewire.admin.contract.contract-component', compact('files'))
            ->layout('components.layouts.admin-app');
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
