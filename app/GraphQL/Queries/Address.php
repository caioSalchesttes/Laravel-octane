<?php

namespace App\GraphQL\Queries;

use App\Models\Address as ModelsAddress;
use App\Models\User;

final class Address
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args) : ModelsAddress
    {
        return ModelsAddress::findCep($args['cep']);
    }
}
