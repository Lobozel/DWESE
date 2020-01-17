<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Libro;
// use Faker\Generator as Faker;
//Para cargar en castellano
$faker=Faker\Factory::create("es_ES");

$factory->define(Libro::class, function ($faker) {
    return [
        "titulo"=>$faker->sentence(3),
        "sinopsis"=>$faker->text($maxNbCjars=100),
        "pvp"=>$faker->randomFloat($nbMaxDecimal=2, $min=1, $max=999),
        "stock"=>$faker->optional()->numberBetween($min=1, $max=50),
        "isbn"=>$faker->unique()->isbn13()
    ];
});
