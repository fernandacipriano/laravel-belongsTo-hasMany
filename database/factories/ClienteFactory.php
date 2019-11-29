<?php

use Faker\Generator as Faker;
use App\Cliente;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'id' => $faker->randomNumber(5),
        'nome' => $faker->name
    ];
});
