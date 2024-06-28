<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class UserEditComponent extends Component
{
    public $editId;
    public $name, $email, $password, $utype;

    public function render()
    {
        return view('livewire.admin.users.user-edit-component')
            ->layout('components.layouts.admin-app');
    }

    public function mount($id)
    {
        $user = User::findOrFail($id);
        $this->editId = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->utype = $user->utype == 'ADM'? true:false;
    }

    public function update()
    {
        $user = User::findOrFail($this->editId);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->utype = $this->utype == true? 'ADM':'USR';
        $user->update();
        session()->flash('success', 'Данные пользователя изменены.');
        redirect()->route('admin.users.index');
    }
}
