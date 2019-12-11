<?php
class Conexion{
    private $conector;
    private $user;
    private $pass;
    private $dbname;
    private $host;
    private $dsn;

    function __construct(){
        $this->user='user1';
        $this->pass='secreto';
        $this->dbname='base3';
        $this->host='localhost';
        $this->dsn="mysql:host={$this->host};dbname={$this->dbname};charset=utf8";
    }

    public function getConector(){
        try{
            $this->conector = new PDO($this->dsn,$this->user,$this->pass);
            $this->conector->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            die("Error al conectar a la base de datos ".$ex);
        }
        return $this->conector;
        
    }
}