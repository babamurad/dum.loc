<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class SingleNewsComponent extends Component
{
    public $newsItem;

    public function render()
    {
        return view('livewire.single-news-component');
    }

    public function mount($id)
    {
        $this->newsItem = News::findOrFail($id);
    }
}
