<?php
class Matriculas{
    private $al;
    private $modulo;
    private $notaFinal;
    private $conector;

    public function __construct(){
        $n=func_num_args();
        if($n==1){
            $this->conector=func_get_arg(0);
        }
        if($n==4){
            $this->conector=func_get_arg(0);
            $this->al=func_get_arg(1);
            $this->modulo=func_get_arg(2);
            $this->notaFinal=func_get_arg(3);
            
        }
    }
    /////////////////CRUD
    public function create(){

    }
    public function read(){
        $cons="select al, modulo, nomAl, apeAl, nomMod, notaFinal from alumnos, modulos, matriculas where idAl=al AND modulo=idMod order by apeAl, nomMod";
        $stmt=$this->conector->prepare($cons);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al recuperar las matriculas: ".$ex);
        }
        $todos=$stmt->fetchAll(PDO::FETCH_OBJ);
        return $todos;
    }
    public function update(){

    }
    public function delete(){
        $borrar = 'delete from matriculas where al=:a AND modulo=:m';
        $stmt=$this->conector->prepare($borrar);
        try{
            $stmt->execute([
                ':a'=>$this->al,
                ':m'=>$this->modulo
            ]);
        }catch(PDOException $ex){
            die("Error al dar de baja al alumno del modulo: ".$ex);
        }
    }
    //--------------------getters, setters and others

    public function setAl($al)
    {
        $this->al = $al;
    }

    public function setModulo($modulo)
    {
        $this->modulo = $modulo;
    }

    public function setNotaFinal($notaFinal)
    {
        $this->notaFinal = $notaFinal;
    }

    public function getConector()
    {
        return $this->conector;
    }
}