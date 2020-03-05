<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstallController extends Controller
{
    public function makeModel(String $nombre){
        \Artisan::call("make:model $nombre -mfscr");
        return "Modelo $nombre creado";
    }
    public function migration(){
        \Artisan::call("migrate:fresh --seed");
        return "Migraciones realizadas";
    }
    public function makeRequest(String $nombre){
        \Artisan::call("make:request $nombre");
        return "Request $nombre creado";
    }
    public function addTable(String $nombre){
        \Artisan::call("make:seeder $nombre"."Seeder");
         \Artisan::call("make:migration create_".$nombre."_table --create $nombre");
         return "Migracion creada para la tabla $nombre";
    }
    //Para casos de errores
    public function migrateReset(){
        \Artisan::call('migrate:reset');
        return "Las migraciones se han reiniciado";
    }
}
