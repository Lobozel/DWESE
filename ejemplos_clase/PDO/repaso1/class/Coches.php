<?php
class Coches{
    private $conector;
    private $id;
    private $marca;
    private $modelo;
    private $color;

    function __construct(){
        $num=func_get_args();
        if($num>=1){
            $this->conector=func_get_arg(0);
        }
        if($num==4){
            $this->marca=func_get_arg(1);
            $this->modelo=func_get_arg(2);
            $this->color=func_get_arg(3);
        }
    }

    //CRUD
    public function read(){
        $r="select * from coches order by marca, modelo";
        $stmt=$this->conector->prepare($r);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar los coches: ".$ex);
        }
        $coches=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $coches;
    }
    public function create(){
        $c="insert into coches(marca,modelo,color) values(:m,:md,:c)";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':m'=>$this->marca,
                ':md'=>$this->modelo,
                ':c'=>$this->color
            ]);
        }catch(PDOException $ex){
            die("Error al crear el coche: ".$ex);
        }
    }
    public function update(){
        $u="update coches set marca=:m, modelo=md, color=:c where id=i";
        $stmt=$this->conector->prepare($u);
        try{
            $stmt->execute([
                ':m'=>$this->marca,
                ':md'=>$this->modelo,
                ':c'=>$this->color,
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al actualizar el coche: ".$ex);
        }
    }
    public function delete(){
        $d="delete from coches where id=i";
        $stmt=$this->conector->prepare($d);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al borrar el coche: ".$ex);
        }
    }
    //getters
    public function getCoche($i){
        $r="select * from coches where id=:i";
        $stmt=$this->conector->prepare($r);
        try{
            $stmt->execute([
                ':i'=>$i
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar el coche: ".$ex);
        }
        $coches=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $coches;
    }
    //setters
    public function setMarca($m){
        $this->marca=$m;
    }
    public function setModelo($m){
        $this->modelo=$m;
    }
    public function setColor($c){
        $this->color=$c;
    }
}