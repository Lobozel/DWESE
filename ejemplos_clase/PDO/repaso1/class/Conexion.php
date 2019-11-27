<?php
class Conexion{
    private $conector;
    private $user;
    private $pass;
    private $database;
    private $host;
    private $dsn;

    function __construct(){
        $this->user='prueba';
        $this->pass='secreto';
        $this->database='prueba27';
        $this->host='localhost';
        $this->dns="mysql:host={$this->host};dbname={$this->database};charset=utf8";
    }

    public function getConector(){
        try{
            $this->conector=new PDO($this->dsn, $this->user, $this->pass);
            $this->conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            die("Error en la  conexión a la BD: ".$ex);
        }

        return $this->conector;
    }
}