<?php
namespace Src;
use PDOException;
use PDO;

class Usuarios{
    private $llave;
    private $id;
    private $nombre;
    private $foto;

    public function __construct(){
        $n=func_num_args();
        if($n>=1){
            $this->llave=func_get_arg(0);
        }
        if($n==3){
            $this->nombre=func_get_arg(1);
            $this->foto=func_get_arg(2);
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
    public function create(){
        $i = "insert into usuarios(nombre, foto) values(:n, :f)";
        $stmt=$this->llave->prepare($i);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':f'=>$this->foto
            ]);
        }catch(PDOException $ex){
            die("Error al guardar usuarios ".$ex);
        }
    }
    public function update(){
        $u="update usuarios set nombre=:n, foto=:f where id=:id";
        $stmt=$this->llave->prepare($u);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':f'=>$this->foto,
                ':id'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al actualizar el usuario: ".$ex);
        }
    }
    public function delete(){
        $b = 'delete from usuarios where id=:i';
        $stmt=$this->llave->prepare($b);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al borrar el usuario: ".$ex);
        }
    }
    //Getters
    public function getUsuario($id){
        $c="select * from usuarios where id=:i";
        $stmt=$this->llave->prepare($c);
        try{
            $stmt->execute([
                ':i'=>$id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar el usuario: ".$ex);
        }
        $usuario=$stmt->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
    //Setters
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    
}