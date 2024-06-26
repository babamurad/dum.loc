<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;

class UserEditComponent extends Component
{
    public $editId;
    public $name, $email, $password, $utype;
    public $password_confirmation;
    public $admin;

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
        $this->admin = $user->admin;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|string|min:6|confirmed',
        ]);
        $user = User::findOrFail($this->editId);
        if (!$user->admin) {
            $user->name = $this->name;
            $user->email = $this->email;
            $user->password = $this->password;
            $user->utype = $this->utype == true? 'ADM':'USR';
            $user->update();
            session()->flash('success', 'Данные пользователя изменены.');
            redirect()->route('admin.users.index');
        } else {
            session()->flash('error', 'Error.');
            $this->redirectRoute('admin.users.index', navigate: true);
        }

    }
}
