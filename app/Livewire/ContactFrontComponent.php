<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactFrontComponent extends Component
{
    public function render()
    {
        $contacts = Contact::find(1);
        return view('livewire.contact-front-component', compact('contacts'));
    }
}
