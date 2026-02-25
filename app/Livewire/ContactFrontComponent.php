<?php

namespace App\Livewire;

use App\Models\Contact;
use App\Models\ContactMessage;
use Livewire\Component;
use Livewire\Attributes\Rule;

class ContactFrontComponent extends Component
{
    #[Rule('required|min:3')]
    public $name = '';

    #[Rule('required|email')]
    public $email = '';

    #[Rule('required|min:3')]
    public $subject = '';

    #[Rule('required|min:5')]
    public $message = '';

    public function save()
    {
        $this->validate();

        ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'subject', 'message']);

        session()->flash('message', 'Ваше сообщение успешно отправлено!');
    }

    public function render()
    {
        $contacts = Contact::find(1);
        return view('livewire.contact-front-component', compact('contacts'));
    }
}
