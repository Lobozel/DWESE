<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller{
    public function index(){
        return "Página Inicio de Usuarios";
    }
    public function show($nombre){
        return view('vdetalle',compact('nombre'));
    }
    public function listado(){
        $usuarios=[
            'Juan',
            'Pedro',
            'Ana',
            'Mara',
            'Juanito',
            'Ines'
        ];
    }
}