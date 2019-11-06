<?php
class Personas{
    static $cant=0;
    protected $nombre;
    private $edad;
    public $mail;

    //----------------
    public function __construct(){
        self::$cant++;
        switch(func_num_args()){
            case 3:
                $this->mail=func_num_arg(2);
            case 2:
                $this->edad=func_num_arg(1);
            case 1:
                $this->nombre=func_num_args(0);
                break;
            default:
                $this->nombre="Guest";
                $this->edad="0";
                $this->mail='noMail@mail.com';
        }
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }


    public function getEdad()
    {
        return $this->edad;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
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

    public function __toString(){
        return "<b>Nombre:</b> $this->nombre, <b>Edad:</b> $this->edad, <b>Mail:</b> $this->mail";
    }

    
}