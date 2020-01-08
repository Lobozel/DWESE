<?php
namespace Src;
use PDOException;
use PDO;
class Usuarios{
    private $llave;
    private $id;
    private $nombre;
    private $direccion;
    private $mail;
    private $web;
    private $descripcion;

    public function __construct(){
        $n=func_num_args();
        if($n==1){
            $this->llave=func_get_arg(0);
        }
    }
    //Crud solo haremos el read
    public function read(){
        $c="select * from usuarios order by nombre";
        $stmt=$this->llave->prepare($c);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar los usuarios!!! $ex");
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }

}