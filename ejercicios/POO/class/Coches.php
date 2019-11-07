<?php

class Coches{
    private $marca;
    private $modelo;
    private $matricula;
    private $kms;
    private $precio;
    private static $descuento=5;
    static $cant=0;

    function __construct($marca,$modelo,$matricula,$kms=0,$precio=5000){
        if(preg_match('/[0-9]{4}-[a-z]{3}/',$matricula)){
            self::$cant++;
            $this->marca=$marca;
            $this->matricula=$matricula;
            $this->modelo=$modelo;
            $this->kms=$kms;
            $this->precio=$precio;
        }else{
            return "<h3 class='text-danger'>La matricula $matricula no es válida.</h3>".PHP_EOL;
        }
        
    }

    //GETTERS AND SETTERS

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMatricula()
    {        
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        if(preg_match('/[0-9]{4}-[a-z]{3}/',$matricula)){
            $this->matricula = $matricula;

            return $this;
        }else{
            return "<h3 class='text-danger'>La matricula $matricula no es válida.</h3>".PHP_EOL;

        }
        
    }

    public function getKms()
    {
        return $this->kms;
    }

    public function setKms($kms)
    {
        $this->kms = $kms;

        return $this;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    public function getDescuento()
    {
        return $this->descuento;
    }

    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    //TOSTRING

    function __toString(){
        return "<div class='container mt-3 text-center'>
        <b>Marca: </b>$this->marca<br>
        <b>Modelo: </b>$this->modelo<br>
        <b>Matricula: </b>$this->matricula<br>
        <b>Kms: </b>$this->kms<br>
        <b>Precio: </b>$this->precio<br>
        <b>Descuento: </b>".self::$descuento."
        </div>";
    }
}