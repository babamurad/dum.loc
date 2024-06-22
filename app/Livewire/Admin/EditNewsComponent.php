<?php

namespace App\Livewire\Admin;

use App\Models\News;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditNewsComponent extends Component
{
    use WithFileUploads;

    #[Validate]
    public $image;

    public $edit_id;

    public $title;

    public $text;

    public bool $published = false;

    public $newImage;

    protected array $rules = [
        'image' => 'max:1024',
        'newImage' => 'max:1024',
        'title' => 'required|min:5',
        'text' => 'required|min:5',
    ];

    public function resetInputFields()
    {
        $this->image = '';
        $this->title = '';
        $this->text = '';
        $this->published = false;
    }

    /**
     * @return void
     *
     */

    public function update()
    {
        $this->validate();

        $item = News::findOrFail($this->edit_id);
        $item->title = $this->title;
        $item->text = $this->text;
        $item->published = $this->published;

        if ($this->newImage){
            if (file_exists('news/'.$this->image)){
                unlink('news/'.$this->image);
            }
            $imageName = Carbon::now()->timestamp.'.'.$this->newImage->extension();
            $this->newImage->storeAs('news/', $imageName);
            $item->image = $imageName;
        }
        $item->update();

        $this->resetInputFields();
        redirect()->route('admin.news');
        session()->flash('success', 'Новость успешно изменена!');
    }

    public function mount($id)
    {
        $item = News::findOrFail($id);
        $this->edit_id = $item->id;
        $this->image = $item->image;
        $this->title = $item->title;
        $this->text = $item->text;
        $this->published = $item->published;
    }

    public function render()
    {
        return view('livewire.admin.edit-news-component')->layout('components.layouts.admin-app');
    }
}
