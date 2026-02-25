<?php

namespace App\Livewire;

use App\Models\RateRequest;
use Livewire\Component;
use Livewire\Attributes\Rule;

class RascetStavokComponent extends Component
{
    #[Rule('required|min:2')]
    public $company_name = '';

    #[Rule('nullable|email')]
    public $email = '';

    #[Rule('nullable')]
    public $railcar_owner = '';

    #[Rule('nullable')]
    public $departure_station = '';

    #[Rule('nullable')]
    public $contact_person = '';

    #[Rule('nullable')]
    public $railcar_type = '';

    #[Rule('nullable')]
    public $destination_station = '';

    #[Rule('nullable')]
    public $forwarding_territory = '';

    #[Rule('nullable')]
    public $cargo_name = '';

    #[Rule('nullable')]
    public $cargo_code = '';

    #[Rule('nullable')]
    public $cargo_weight = '';

    public function save()
    {
        $this->validate();

        RateRequest::create([
            'company_name' => $this->company_name,
            'email' => $this->email,
            'railcar_owner' => $this->railcar_owner,
            'departure_station' => $this->departure_station,
            'contact_person' => $this->contact_person,
            'railcar_type' => $this->railcar_type,
            'destination_station' => $this->destination_station,
            'forwarding_territory' => $this->forwarding_territory,
            'cargo_name' => $this->cargo_name,
            'cargo_code' => $this->cargo_code,
            'cargo_weight' => $this->cargo_weight,
        ]);

        $this->reset();

        session()->flash('message', 'Ваша заявка успешно отправлена!');
    }

    public function render()
    {
        return view('livewire.rascet-stavok-component');
    }
}
