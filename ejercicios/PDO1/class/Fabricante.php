<?php
class Fabricante{
    private $conector;
    private $id; //codigo
    private $nombre;

    public function __construct(){
        $num=func_num_args();
        switch($num){
            case 2:
                $this->nombre=func_get_arg(1);
            case 1:
                $this->conector=func_get_arg(0);
        }

    }
    //CRUD
    public function read(){ //RETURN ALL FABR
        $q="select * from fabricante order by nombre";
        $stmt = $this->conector->prepare($q);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar fabricantes ".$ex);
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }
    public function create(){ //CREATE NEW FABR
        $q="insert into fabricante(nombre) values(:n)";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':n'=>$this->nombre
            ]);
        }catch(PDOException $ex){
            die("Error al crear el fabricante ".$ex);
        }
    }
    public function update(){ //UPDATE EXIT FABR
        $q="update fabricante set nombre=:n where codigo=:i";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al actualizar fabricante ".$ex);
        }
    }
    public function delete(){  //DELETE EXIT FABR
        $q="delete from fabricante where codigo=:i";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al borrar fabricante ".$ex);
        }
    }
    //GETTERS
    public function getFabricante(){
        $q="select * from fabricante where codigo=:i";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar fabricante ".$ex);
        }
        $fabr=$stmt->fetch(PDO::FETCH_OBJ);
        return $fabr;
    }
    //SETTERS
    public function setNombre($n){
        $this->nombre=$n;
    }
    public function setId($i){
        $this->id=$i;
    }
}