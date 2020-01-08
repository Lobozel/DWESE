<?php
namespace Src;
use PDO;
use PDOException;
class Conexion{
    private $conector;
    private $user;
    private $pass;
    private $bd;
    private $host;
    private $dsn;

    public function __construct(){
        $this->user='userpdo';
        $this->pass='secreto';
        $this->bd='base2020';
        $this->host='localhost';
        $this->dsn="mysql:host={$this->host};dbname={$this->bd};charset=utf8";
    }

    public function getConector(){
        try{
            $this->conector=new PDO($this->dsn,$this->user,$this->pass);
            $this->conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            die("Error al conectar con la BD--> ".$ex);
        }
        return $this->conector;
    }
}