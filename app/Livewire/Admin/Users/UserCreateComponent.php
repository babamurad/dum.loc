<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class UserCreateComponent extends Component
{
    public $name, $email, $password, $utype;
    public $password_confirmation;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ];

    public function render()
    {
        return view('livewire.admin.users.user-create-component')
            ->layout('components.layouts.admin-app');
    }

    public function create()
    {
        $this->validate();
        $user = new User();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->utype = $this->utype == true? 'ADM':'USR';
        $user->save();
        session()->flash('success', 'Данные пользователя успешно сохранены.');
        redirect()->route('admin.users.index');
    }
}
