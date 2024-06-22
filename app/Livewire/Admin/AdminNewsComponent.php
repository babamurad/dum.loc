<?php

namespace App\Livewire\Admin;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class AdminNewsComponent extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $news = News::orderBy('id', 'desc')->paginate(5);
        return view('livewire.admin.admin-news-component', compact('news'))->layout('components.layouts.admin-app');
    }
}
