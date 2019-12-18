<?php
class Autores{
    private $conector;
    private $id;
    private $apellidos;
    private $nombre;
    private $pais;

    function __construct(){
        $num=func_num_args();
        switch($num){
            case 4:
            $this->pais=func_get_arg(3);
            case 3:
            $this->nombre=func_get_arg(2);
            case 2:
            $this->apellidos=func_get_arg(1);
            case 1:
            $this->conector=func_get_arg(0);
        }
    }
    //CRUD
    public function read(){
        $c="select * from autores order by apellidos, nombre";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar los autores ".$ex);
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }   
    public function create(){
        $c="insert into autores(apellidos,nombre,pais) values(:a,:n,:p)";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':a'=>$this->apellidos,
                ':n'=>$this->nombre,
                ':p'=>$this->pais
            ]);
        }catch(PDOException $ex){
            die("Error al crear autor ".$ex);
        }
    } 
    public function update(){
        $c="update autores set apellidos=:a, nombre=:n, pais=:p where id=:i";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':a'=>$this->apellidos,
                ':n'=>$this->nombre,
                ':p'=>$this->pais,
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al actualizar autor ".$ex);
        }
    }
    public function delete(){
        $c="delete from autores where id=:i";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al borrar autor ".$ex);
        }
    }
    //getters
    public function getAutor(){
        $c="select * from autores where id=:i";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar autor ".$ex);
        }
        $autor = $stmt->fetch(PDO::FETCH_OBJ);
        return $autor;
    }
    //setters
    public function setId($i){
        $this->id=$i;
    }
    public function setApellidos($a){
        $this->apellidos=$a;
    }
    public function setNombre($n){
        $this->nombre=$n;
    }
    public function setPais($p){
        $this->pais=$p;
    }    
}