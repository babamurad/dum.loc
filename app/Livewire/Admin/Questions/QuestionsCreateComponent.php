<?php

namespace App\Livewire\Admin\Questions;

use App\Models\Question;
use Livewire\Attributes\Validate;
use Livewire\Component;

class QuestionsCreateComponent extends Component
{
    #[Validate('required|min:3')]
    public $question;
    #[Validate('required|min:3')]
    public $answer;
    public $published = false;
    public $order;

    public function render()
    {
        return view('livewire.admin.questions.questions-create-component')
            ->layout('components.layouts.admin-app');
    }

    public function create()
    {
        $this->validate();
        $question = new Question();
        $question->question = $this->question;
        $question->answer = $this->answer;
        $question->published = $this->published;
        $question->order = $this->order;
        $question->save();
        $this->resetInputFields();
        session()->flash('success', 'Вопрос успешно добавлен!');
        return redirect()->to('/admin/questions');
    }

    public function resetInputFields()
    {
        $this->reset('question', 'answer', 'published', 'order');
    }
}
