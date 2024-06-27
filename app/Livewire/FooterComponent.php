<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class FooterComponent extends Component
{
    public function render()
    {
        $contacts = Contact::find(1);
        return view('livewire.footer-component', compact('contacts'));
    }
}
