<?php

namespace App\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class AdminNewsComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $del_id;
    public $image;

    public function deleteId($id)
    {
        $this->del_id = $id;
    }

    public function destroy()
    {
        $item = News::findOrFail($this->del_id);
        $this->image = $item->image;
        if (file_exists('images/news/'.$this->image)){
            unlink('images/news/'.$this->image);
        }
        $item->delete();

        $this->dispatch('closeNewsModal');
        session()->flash('error', 'Новость успешно удалена!');
    }

    public function unPublish($id)
    {
        $item = News::findOrFail($id);
        $item->published = !$item->published;
        $item->update();
    }

    public function DecOrder($id)
    {
        $item = News::findOrFail($id);
        $item->order = --$item->order;
        if ($item->order < 0) {
            $item->order = 0;
        }
        $item->update();
    }
    public function IncOrder($id)
    {
        //dd($id);
        $item = News::findOrFail($id);
        $item->order = ++$item->order;
        $item->update();
    }

    public function render()
    {
        $news = News::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.admin-news-component', compact('news'))->layout('components.layouts.admin-app');
    }
}
