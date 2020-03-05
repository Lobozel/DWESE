<?php

use Illuminate\Database\Seeder;
use App\Alojamiento;
use Illuminate\Support\Facades\DB;

class AlojamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alojamientos');
        factory(Alojamiento::class,5)->create();
    }
}
