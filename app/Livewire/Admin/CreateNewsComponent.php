<?php

namespace App\Livewire\Admin;

use App\Models\News;
use Carbon\Carbon;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
class CreateNewsComponent extends Component
{
    use WithFileUploads;

    #[Validate]
    public $image;

    public $title;

    public $text;

    public bool $published = false;

    protected array $rules = [
            'image' => 'required|image|max:1024',
            'title' => 'required|min:5',
            'text' => 'required|min:5',
        ];

    public function render()
    {
        return view('livewire.admin.create-news-component')->layout('components.layouts.admin-app');
    }

    public function save()
    {
        $this->validate();

        $item = new News();
        $imageName = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('/news', $imageName);
        $item->image = $imageName;
        $item->title = $this->title;
        $item->text = $this->text;
        $item->published = $this->published;
        $item->save();
        $this->resetInputFields();
        session()->flash('success', __('Новость успешно добавлена!'));
        return redirect()->to('/admin/news');

    }

    public function resetInputFields()
    {
        $this->image = '';
        $this->title = '';
        $this->text = '';
        $this->published = false;
    }
}
