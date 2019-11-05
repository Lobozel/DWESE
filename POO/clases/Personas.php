<?php
class Personas{
    private static $cantidad=0;
    private $nombre;
    private $edad;
    private $mail;
    public $nick;

    public function __construct(){
        if(func_num_args()==1){
           $this->nombre=func_get_arg(0);
        }
        self::$cantidad++;
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

    /**
     * Get the value of edad
     */ 
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */ 
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail='nomail@dom.es')
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of nick
     */ 
    public function getNick()
    {
        return $this->nick;
    }


    /**
     * Get the value of cantidad
     */ 
    public function getCantidad()
    {
        return self::$cantidad;
    }

    public function mostrarPersona(){
        echo "<div class='container text-center' style='border: 2px solid'>".PHP_EOL;
        echo "<b>Nombre:</b>".$this->nombre;
        echo "<br>".PHP_EOL;
        echo "<b>Edad:</b>".$this->edad;
        echo "<br>".PHP_EOL;
        echo "<b>Mail:</b>".$this->mail;
        echo "<br>".PHP_EOL;
        echo "<b>Nick:</b>".$this->nick;
        echo "</div>".PHP_EOL;
    }
}