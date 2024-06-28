<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndexComponent extends Component
{
    use WithPagination;

    public $userId;
    public $delId;
    public $delName;

    //public $utype;

    public function render()
    {
        $users = User::paginate(25);
        return view('livewire.admin.users.user-index-component', compact('users'))
            ->layout('components.layouts.admin-app');
    }

    public function mount()
    {
        $this->userId = Auth::user()->id;
    }

    public function ChangeType($id)
    {
        $user = User::findOrFail($id);
        if (!$user->admin) {
            $user->utype = $user->utype == 'USR' ? 'ADM' : 'USR';
            $user->update();
        } else {
            session()->flash('error', 'Error.');
            $this->redirectRoute('admin.users.index', navigate: true);
        }
    }

    public function editUser($id)
    {
        return redirect()->route('admin.users.edit', ['id' => $id]);
    }

    public function deleteId($id)
    {
        $user = User::findOrFail($id);
        $this->delId = $user->id;
        $this->delName = $user->name;
    }

    public function destroy()
    {
        $user = User::findOrFail($this->delId);
        if (!$user->admin){
            $user->delete();
            $this->dispatch('closeNewsModal');
            session()->flash('error', 'Данные пользователя удалены.');
        }else {
            session()->flash('error', 'Error.');
            $this->redirectRoute('admin.users.index', navigate: true);
        }
    }
}
