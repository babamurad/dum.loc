<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.app-second')]
#[Title('Вход / Регистрация')]
class UserRegisterComponent extends Component
{
    public bool $loginform = true;

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required')]
    public $password = '';

    #[Rule('required_if:loginform,false|string|max:255')]
    public $name = '';

    #[Rule('required_if:loginform,false|same:password')]
    public $password_confirmation = '';

    public function toggleForm()
    {
        $this->loginform = ! $this->loginform;
        $this->resetValidation();
        $this->reset(['name', 'email', 'password', 'password_confirmation']);
    }

    public function login()
    {
        $this->validateOnly('email');
        $this->validateOnly('password');

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->flash('message', 'Login successful');
            if (Auth::user()->utype === 'ADM') {
                return redirect()->route('admin.dashboard');
            }
            return redirect()->route('home');
        }

        session()->flash('error', 'Invalid credentials');
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
        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('error', 'Logout');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.user.user-register-component');
    }
}
