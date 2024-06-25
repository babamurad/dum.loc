<?php

namespace App\Livewire\Admin\Questions;

use App\Models\Question;
use Livewire\Attributes\Validate;
use Livewire\Component;

class QuestionsEditComponent extends Component
{
    #[Validate('required|min:3')]
    public $question;
    #[Validate('required|min:3')]
    public $answer;
    public $published;
    public $order;
    public $edit_id;

    public function render()
    {
        return view('livewire.admin.questions.questions-edit-component')
            ->layout('components.layouts.admin-app');
    }

    public function mount($id)
    {
        $this->edit_id = $id;
        $question = Question::findOrFail($this->edit_id);
        //dd($question);
        $this->question = $question->question;
        $this->answer = $question->answer;
        $this->published = $question->published;
        $this->order = $question->order;
    }

    public function update()
    {
        $this->validate();
        $question = Question::findOrFail($this->edit_id);
        $question->question = $this->question;
        $question->answer = $this->answer;
        $question->published = $this->published;
        $question->order = $this->order;
        $question->update();
        //$this->resetInputFields();
        session()->flash('success', 'Вопрос успешно изменен!');
        return redirect()->to('/admin/questions');
    }

    public function resetInputFields()
    {
        $this->question = '';
        $this->answer = '';
        $this->published = '';
        $this->order = '';
    }
}
