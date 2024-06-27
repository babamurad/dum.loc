<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class SingleNewsComponent extends Component
{
    public $newsItem;

    public function render()
    {
        return view('livewire.single-news-component')->layout('components.layouts.app-second');
    }

    public function mount($id)
    {
        $this->newsItem = News::findOrFail($id);
    }
}
