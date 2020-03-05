<?php

use Illuminate\Database\Seeder;
use App\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes');
        factory(Cliente::class,10)->create();
    }
}
