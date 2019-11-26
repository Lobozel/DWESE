<?php
class Plataformas{
    private $conector;
    private $id;
    private $nombre;
    private $imagen;

    public function __construct(){
        $num=func_num_args();
        switch($num){
            case 3:
                $this->imagen=func_get_arg(2);
            case 2:
                $this->nombre=func_get_arg(1);
            case 1:
                $this->conector=func_get_arg(0);
        }
        if($num==2){
            $this->imagen='recursos/img/consola.jpeg';
        }

    }
    //-----------------CRUD
    public function create(){
        $i="insert into plataformas(nombre,imagen) values(:n, :i)";
        $stmt=$this->conector->prepare($i);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':i'=>$this->imagen
            ]);
        }catch(PDOException $ex){
            die("Error al crear una nueva plataforma: ".$ex);
        }
    }
    public function read(){
        $c="select * from plataformas order by nombre";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar las plataformas:".$ex);
        }
        $plataformas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $plataformas;
    }
    public function update(){
        $u="update plataformas set nombre=:n, imagen=:i where id=:id";
        $stmt=$this->conector->prepare($u);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':i'=>$this->imagen,
                ':id'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al actualizar la plataforma: ".$ex);
        }
    }
    public function delete(){
        $b = 'delete from plataformas where id=:i';
        $stmt=$this->conector->prepare($b);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al borrar la plataforma: ".$ex);
        }
    }
    //getPlataforma----------
    public function getPlataforma($id){
        $c="select * from plataformas where id=:i";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':i'=>$id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar la plataforma: ".$ex);
        }
        $plataforma=$stmt->fetch(PDO::FETCH_OBJ);
        return $plataforma;
    }
    //setters----------------
    public function setId($i){
        $this->id=$i;
    }
    public function setNombre($n){
        $this->nombre=$n;
    }
    public function setImagen($i){
        $this->imagen=$i;
    }
}