<?php

use App\Alumnos;
use Illuminate\Database\Seeder;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("alumnos")->truncate(); //vacía la tabla
        factory(Alumnos::class, 20)->create();//crea 20 registros
    }
}
