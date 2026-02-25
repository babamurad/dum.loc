<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RateRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'email',
        'railcar_owner',
        'departure_station',
        'contact_person',
        'railcar_type',
        'destination_station',
        'forwarding_territory',
        'cargo_name',
        'cargo_code',
        'cargo_weight',
    ];
}
