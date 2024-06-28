<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserRegisterComponent extends Component
{
    public $loginform = false;
    public $email;
    public $password;
    public $password_confirmation;
    public $name;


    public function regLog()
    {
        $this->resetValidation();
        $this->loginform = ! $this->loginform;
    }

    public function render()
    {
        return view('livewire.user.user-register-component')
            ->layout('components.layouts.app-second');
    }

    public function login()
    {
        $credentials = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            session()->flash('message', 'Login successful');
            if (Auth::user()->utype == 'ADM') {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('home');
        } else {
            session()->flash('error', 'Invalid credentials');
        }

    }

    public function register()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        Auth::login($user);

        session()->flash('message', 'Registration successful');
        return redirect()->intended('/');
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('error', 'Logout');
    }

}
