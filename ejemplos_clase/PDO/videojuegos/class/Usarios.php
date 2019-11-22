<?php
class Usuarios{
    private $conector;
    private $nombre;
    private $pass;
    private $perfil;

    public function __construct(){
        $num=func_num_args();
        if($num==1){
            $this->conector=func_get_arg(0);
        }
    }

    //CRUD
    public function create(){

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
                ':n'=>$n;
            ])
        }catch(PDOException $ex){
            die("Error al comprobar si existe el usuario: "+$ex);
        }
        $cont=0;
        while($fila=$stmt->fetch()){
            $cont++;
        }
        return !($cont==0);

    }

}