<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'street',
        'city',
        'state',
        'neighborhood',
    ];

    public static function findCep(string $cep) : Address
    {
        $porra = [
            'street' => 'Rua dos Bobos',
            'city' => 'São Paulo',
            'state' => 'SP',
            'neighborhood' => 'Bairro dos Bobos',
        ];

        return new Address($porra);
    }
}
