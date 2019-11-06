<?php
class Personas{
    static $cant=0;
    private $nombre;
    private $edad;
    public $mail;

    //----------------
    public function __construct($n,$e,$m){
        self::$cant++;
        $this->nombre=$n;
        $this->edad=$e;
        $this->mail=$m;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    //metodos mágicos
    public function __get($p){
        if(property_exists($this,$p)){
            // return $this->$p;
            return "La propiedad <b>$p</b> es Privada";
        }
        return "La propiedad <b>$p</b> No existe en esta clase!!!";
    }

    public function __set($p, $v){
        if(property_exists($this,$p)){
            //Lo que queramos hacer
            $this->$p=$v;
        }else{
            return "La propiedad <b>$p</b> No existe en esta clase!!!";
        }
    }
}