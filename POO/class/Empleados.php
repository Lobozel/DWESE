<?php
class Empleados extends Personas{
    private $puesto;
    private $sueldo;

    public function __construct($n,$e,$m,$p,$s){
        parent::__construct($n,$e,$m);
        $this->puesto=$p;
        $this->sueldo=$s;
    }
    //------------------------------
    public function __toString(){
        return parent::__toString().", <b>Puesto:</b> $this->puesto, <b>Sueldo:</b> $this->sueldo";
    }

    public function getPuesto()
    {
        return $this->puesto;
    }

    public function getSueldo()
    {
        return $this->sueldo;
    }

    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;
    }

    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
    //Vamos a sobreescribir algunos metodos
    //el setNombre(nombre es protected)
    public function setNombre($n){
        $this->nombre=$n;
    }
    //Sobreescribimos edad este es privado en la clase padre
    public function setEdad($e){
        parent::setEdad($e);
    }

    public function isJefe() {
        return $this->puesto=='Jefe';
    }
}