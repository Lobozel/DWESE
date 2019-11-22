<?php
class Usuarios{
    private $conector;
    private $nombre;
    private $pass;
    private $perfil;

    public function __construct(){
        $num=func_num_args();
        if($num>=1){
            $this->conector=func_get_arg(0);
        }
        if($num==3){
            $this->nombre=func_get_arg(1);
            $this->pass=func_get_arg(2);
        }
    }

    //CRUD
    public function create(){
        $i="insert into usuarios(nombre, pass) values(:n, :p)";
        $stmt=$this->conector->prepare($i);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':p'=>$this->pass
            ]);
        }catch(PDOException $ex){
            die("Error al registrar usuario: ".$ex);
        }
    }
    public function read(){

    }
    public function update(){

    }
    public function delete(){

    }
    //Setters
    public function setNombre($n){
        $this->nombre=$n;
    }
    public function setPass($p){
        $this->pass=$p;
    }
    public function setPerfil($p){
        $this->perfil=$p;
    }
    //existeUser()
    public function existeUser($n){
        $c="select * from usuarios where nombre=:n";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':n'=>$n
            ]);
        }catch(PDOException $ex){
            die("Error al comprobar si existe el usuario: "+$ex);
        }
        $cont=0;
        while($fila=$stmt->fetch()){
            $cont++;
        }
        return !($cont==0);

    }
    //----------Devuelve perfil o -1 si no encuentra el usuario
    public function isOk(){
        $c="select * from usuarios where nombre=:n AND pass=:p";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':p'=>$this->pass
            ]);
        }catch(PDOException $ex){
            die("Error al validar: ".$ex);
        }
        $perfil=-1;
        while($fila=$stmt->fetch(PDO::FETCH_ASSOC)){
            $perfil=$fila['perfil'];
        }
        return $perfil;
        
    }

}