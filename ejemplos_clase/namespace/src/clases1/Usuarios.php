<?php
namespace Src\Clases1;
class Usuarios{
    private $nombre;
    public function __construct($n="Sin nombre"){
        $this->nombre=$n;
    }
    public function saludo(){
        return "<br>Hola {$this->nombre}, Estamos en clases1/Usuarios.php";
    }
}