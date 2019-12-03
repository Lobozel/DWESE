<?php
class Producto{
    private $conector;
    private $id; //codigo
    private $nombre;
    private $precio;
    private $idFabr;

    public function __construct(){
        $num=func_num_args();
        if($num==4){
            $this->nombre=func_get_arg(1);
            $this->precio=func_get_arg(2);
            $this->idFabr=func_get_arg(3);
        }
        if($num>=1){
            $this->conector=func_get_arg(0);
        }
        
    }
    //CRUD
    public function read(){
        $q="select * from producto order by nombre, precio";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar productos ".$ex);
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }
    public function create(){
        $q="insert into producto(nombre,precio,codigo_fabricante) values(:n,:p,:iF)";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':p'=>$this->precio,
                ':iF'=>$this->idFabr
            ]);
        }catch(PDOException $ex){
            die("Error al crear producto ".$ex);
        }
    }
    public function update(){
        $q="update producto set nombre=:n, precio=:p, codigo_fabricante=:iF where codigo=:i";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':p'=>$this->precio,
                ':iF'=>$this->idFabr,
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al actualizar producto ".$ex);
        }
    }
    public function delete(){
        $q="delete from producto where codigo=:i";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al eliminar producto ".$ex);
        }
    }
    //GETTERS
    public function getProducto(){
        $q="select * from producto where codigo=:i";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar producto ".$ex);
        }
        $prod=$stmt->fetch(PDO::FETCH_OBJ);
        return $prod;
    }
    //SETTERS
    public function setNombre($n){
        $this->nombre=$n;
    }
    public function setPrecio($p){
        $this->precio=$p;
    }
    public function setIdFabr($i){
        $this->idFabr=$i;
    }
    public function setId($i){
        $this->id=$i;
    }
    //TOOLS
    public function ofFabricante($idFabr){
        $q="select * from producto where codigo_fabricante=:i order by nombre, precio";
        $stmt=$this->conector->prepare($q);
        try{
            $stmt->execute([
                ':i'=>$idFabr
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar productos ".$ex);
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }

}