<?php
namespace Src;
require '../vendor/autoload.php';
use PDOException;
use PDO;
use Faker\Factory;
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
        $this->rellenar(15);
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
        $i = "insert into usuarios(nombre, direction, mail, web, description) values(:n, :di, :m, :w, :de)";
        $stmt=$this->llave->prepare($i);
        try{
            $stmt->execute([
                ':n'=>$this->nombre,
                ':di'=>$this->direccion,
                ':m'=>$this->mail,
                ':w'=>$this->web,
                ':de'=>$this->descripcion
            ]);
        }catch(PDOException $ex){
            die("Error al guardar usuarios ".$ex);
        }
    }
    //---------------------------------------------------------------
    public function rellenar($num){
        if(!$this->hayDatos()){
            //utilizaremos faker para rellenar 15 datos
            $faker=Factory::create('es:ES');
            for($i=0;$i<$num;$i++){
                // $this->nombre=$faker->name;
                $this->nombre=$faker->unique()->userName;
                $this->direccion=$faker->address;
                // $this->mail=$faker->unique()->freeEmail;
                $this->mail=$this->nombre.'@'.$faker->domainName;
                $this->web=$faker->optional()->url;
                $this->descripcion=$faker->sentence;
                $this->create();
            }
        }
    }
    public function hayDatos(){
        //comprueba si la tabla usuario tiene datos
        //si es así devuelve true si no false
        $c="select * from usuarios";
        $res=$this->llave->query($c);
        if($res->rowCount()==0) return false;
        return true;
    }

}