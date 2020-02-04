<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        "nombre"=>$faker->firstName(),
        "apellidos"=>$faker->lastName(),
        "email"=>$faker->unique()->email(),
        "direccion"=>$faker->streetAddress(),
        "telefono"=>$faker->optional()->phoneNumber
    ];
});
