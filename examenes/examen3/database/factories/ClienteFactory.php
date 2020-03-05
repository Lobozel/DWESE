<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'apellidos'=>$faker->lastName,
        'nombre'=>$faker->name,
        'mail'=>$faker->unique()->email
    ];
});
