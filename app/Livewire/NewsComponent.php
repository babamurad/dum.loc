<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class NewsComponent extends Component
{
    public $kol, $del;

    public function render()
    {
        $newsItems = News::all();
        $chunkedNewsItems  = $newsItems->chunk(4);
//        dd($chel);
        return view('livewire.news-component', compact('chunkedNewsItems'));
    }
}
