<?php

namespace App\Livewire\Admin;

use App\Models\Award;
use App\Models\News;
use App\Models\Partner;
use App\Models\Question;
use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $news= News::all()->count();
        $newsp = News::published()->count();

        $partners = Partner::all()->count();
        $partnersp = Partner::published()->count();

        $questions = Question::all()->count();
        $questionsp = Question::published()->count();

        $awards = Award::all()->count();
        $awardsp = Award::published()->count();
        return view('livewire.admin.dashboard-component',
            compact('news', 'partners', 'questions', 'awards', 'newsp', 'partnersp', 'questionsp', 'awardsp'))
            ->layout('components.layouts.admin-app');
    }
}
