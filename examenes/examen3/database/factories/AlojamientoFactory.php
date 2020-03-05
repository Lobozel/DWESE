<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alojamiento;
use Faker\Generator as Faker;

$factory->define(Alojamiento::class, function (Faker $faker) {
    $provincias=[
        'Almería',
        'Cadiz',
        'Córdoba',
        'Granada',
        'Huelva',
        'Jaen',
        'Málaga',
        'Sevilla'
    ];
    return [
        'nombre'=>$faker->domainWord,
        'provincia'=>$provincias[rand(0,count($provincias)-1)],
        'descripcion'=>$faker->sentence($nbWords = rand(6,12), $variableNbWords = true),
        'telefono'=>$faker->phoneNumber,
        'hab'=>rand(0,21)
    ];
});
