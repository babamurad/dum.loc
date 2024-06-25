<?php

namespace App\Livewire;

use App\Models\Question;
use Livewire\Component;

class QuestionComponent extends Component
{
    public function render()
    {
        $questions = Question::published()->get();
        return view('livewire.question-component', compact('questions'));
    }
}
