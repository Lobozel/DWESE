<?php
class Libros{
    private $conector;
    private $id;
    private $titulo;
    private $descripcion;
    private $precio;
    private $portada;
    private $autor;

    function __construct(){
        $num=func_num_args();
        if($num>=1){
            $this->conector=func_get_arg(0);
        }
        if($num==6){
            $this->titulo=func_get_arg(1);
            $this->descripcion=func_get_arg(2);
            $this->precio=func_get_arg(3);
            $this->autor=func_get_arg(4);
            $this->portada=func_get_arg(5);
        }
    }
    //crud
    public function read($inicio, $paginacion){
        $c="select * from libros order by titulo limit $inicio, $paginacion";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar los libros ".$ex);
        }
        $filas = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }
    public function create(){
        $c="insert into libros(titulo, descripcion, precio, portada, autor) values(:t,:d,:p,:img,:a)";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':t'=>$this->titulo,
                ':d'=>$this->descripcion,
                ':p'=>$this->precio,
                ':img'=>$this->portada,
                ':a'=>$this->autor
            ]);
        }catch(PDOException $ex){
            die("Error al crear libro ".$ex);
        }
    }
    public function update(){
        $c="update libros set titulo=:t, descripcion=:d, precio=:p, portada=:img, autor=:a where id=:i";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':t'=>$this->titulo,
                ':d'=>$this->descripcion,
                ':p'=>$this->precio,
                ':img'=>$this->portada,
                ':a'=>$this->autor,
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al actualizar libro ".$ex);
        }
    }
    public function delete(){
        $c="delete from libros where id=:i";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al eliminar libro ".$ex);
        }
    }
    //getters
    public function getLibro(){
        $c="select * from libros where id=:i";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':i'=>$this->id
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar libro ".$ex);
        }
        $libro = $stmt->fetch(PDO::FETCH_OBJ);
        return $libro;
    }
    public function getTotal(){
        $c="select * from libros";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar cantidad de registros de libros ".$ex);
        }
        $cont=0;
        while($fila=$stmt->fetch()){
            $cont++;
        }
        return $cont;
    }
    public function getLibrosdeAutor(){
        $c="select * from libros where autor=:a";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':a'=>$this->autor
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar libros del autor ".$ex);
        }
        $filas = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $filas;
    }
    //setters
    public function setId($i){
        $this->id=$i;
    }
    public function setTitulo($t){
        $this->titulo=$t;
    }
    public function setDescripcion($d){
        $this->descripcion=$d;
    }
    public function setPrecio($p){
        $this->precio=$p;
    }
    public function setPortada($p){
        $this->portada=$p;
    }
    public function setAutor($a){
        $this->autor=$a;
    }
}