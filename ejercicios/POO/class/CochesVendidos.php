<?php

class CochesVendidos{
    private $marca;
    private $modelo;
    private $matricula;
    private $kms;
    private $fecha_venta;
    private $precio_venta;
    static $cant=0;

    function __construct($marca,$modelo,$matricula,$kms=0,$precio,$fecha_venta){
        if($this->validarMatricula($matricula)){
            self::$cant++;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->matricula=$matricula;
            $this->kms=$kms;
            $descuento = Coches::getDescuento();
            $this->precio_venta=$precio-($precio*$descuento/100);
            $this->fecha_venta=$fecha_venta;
        }        
    }

    function validarMatricula($matricula){
        if(preg_match('/[0-9]{4}-[a-z]{3}/',$matricula)){
            return true;
        }else{
            echo "<h3 class='text-danger'>La matricula $matricula no es válida.</h3>".PHP_EOL;
            return false;
        }
    }

    function __toString(){
        return "<div class='container mt-3 text-center'>
        <b>Marca: </b>$this->marca<br>
        <b>Modelo: </b>$this->modelo<br>
        <b>Matricula: </b>$this->matricula<br>
        <b>Kms: </b>$this->kms<br>
        <b>Fecha vendido: </b>$this->fecha_venta<br>
        <b>Precio de venta: </b>$this->precio_venta
        </div>";
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
        $this->matricula = $matricula;

        return $this;
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

    public function getFecha_venta()
    {
        return $this->fecha_venta;
    }

    public function setFecha_venta($fecha_venta)
    {
        $this->fecha_venta = $fecha_venta;

        return $this;
    }

    public function getPrecio_venta()
    {
        return $this->precio_venta;
    }

    public function setPrecio_venta($precio_venta)
    {
        $this->precio_venta = $precio_venta;

        return $this;
    }
}