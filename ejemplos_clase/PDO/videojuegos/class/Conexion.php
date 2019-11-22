<?php
class Conexion{
    private $conector;
    private $usuario;
    private $pass;
    private $database;
    private $host;
    private $dsn;

    public function __construct(){
        $this->usuario='userpdo';
        $this->pass='secreto';
        $this->database='videojuegos';
        $this->host='localhost';
        $this->dsn="mysql:host={$this->host};dbname={$this->database};charset=utf8";
    }

    public function getConector(){
        try{
            $this->conector=new PDO($this->dsn, $this->usuario, $this->pass);
            $this->conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            die("Error al conectar a la base de datos: ".$ex);
        }
        return $this->conector;
    }

}