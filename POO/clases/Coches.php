<?php

class Coches{
    //los atributos que queramos public, protected o private

    public static $cont=0;
    public $id;
    public $matricula;
    private $modelo;
    private $marca;
    public $color;
    //métodos; primero el constructor
    public function __construct(){
        if(func_num_args()==1){
            $this->matricula=func_get_arg(0);
        }
        self::$cont++;
        $this->id=self::$cont;
    }
    public function setModelo($m){
        $this->modelo=$m;
    }

    

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Get the value of marca
     */ 
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */ 
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }
    

    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of matricula
     */ 
    public function getMatricula()
    {
        return $this->matricula;
    }

    public function mostrarCoche(){
        echo "<div class='container text-center'>".PHP_EOL;
        echo "<b>id:</b>".$this->id;
        echo "<br>".PHP_EOL;
        echo "<b>Marca:</b>".$this->marca;
        echo "<br>".PHP_EOL;
        echo "<b>Modelo:</b>".$this->modelo;
        echo "<br>".PHP_EOL;
        echo "<b>Color:</b>".$this->color;
        echo "<br>".PHP_EOL;
        echo "<b>Matricula:</b>".$this->matricula;
        echo "</div>".PHP_EOL;
    }
}