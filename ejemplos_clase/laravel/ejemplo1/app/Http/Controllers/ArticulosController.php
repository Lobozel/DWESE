<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosController extends Controller{
    public function index(){
        return "Página inicio de Articulos";
    }
    public function show($n){
        return view('vArtDet', compact('n'));
    }
    public function listado(){
        $articulos=[
            'hdd',
            'sdd',
            'tarjeta gráfica',
            'microprocesador',
            'gpu',
            'placa base'
        ];
        return view('vArt', compact('articulos'));
    }
}