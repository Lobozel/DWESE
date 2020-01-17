<?php

use Illuminate\Database\Seeder;
use App\Articulo;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Borro todos los datos de articulos si tiene
        DB::table('articulos')->truncate();
        //rellenamos la tabla con x datos
        factory(Articulo::class, 12)->create();
    }
}
