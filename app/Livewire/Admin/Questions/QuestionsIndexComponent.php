<?php

namespace App\Livewire\Admin\Questions;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class QuestionsIndexComponent extends Component
{
    use WithPagination;
    public $del_id;

    public function render()
    {
        $questions = Question::orderBy('order')->paginate(5);
        return view('livewire.admin.questions.questions-index-component', compact('questions'))
            ->layout('components.layouts.admin-app');
    }

    public function deleteId($id)
    {
        $this->del_id = $id;
    }

    public function destroy()
    {
        $item = Question::findOrFail($this->del_id);
        $item->delete();

        $this->dispatch('closeNewsModal');
        session()->flash('error', 'Вопрос успешно удалены!');
    }
}
