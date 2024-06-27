<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsComponent extends Component
{
    public $kol, $del;

    public function render()
    {
        $newsItems = News::orderBy('order')->published()->get();
        $chunkedNewsItems  = $newsItems->chunk(3);

        return view('livewire.news-component', compact('chunkedNewsItems'));
    }
}
