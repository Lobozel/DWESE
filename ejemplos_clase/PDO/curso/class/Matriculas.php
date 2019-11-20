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
        $c="insert into matriculas values(:a, :m, :n)";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute([
                ':a'=>$this->al,
                ':m'=>$this->modulo,
                ':n'=>$this->notaFinal
            ]);
        }catch(PDOException $ex){
            die("Error al matricular Alumno!! ".$ex);
        }
    }
    public function read($p, $c){
        $cons="select al, modulo, nomAl, apeAl, nomMod, notaFinal from alumnos, modulos, matriculas where idAl=al AND modulo=idMod order by apeAl, nomMod limit $p, $c";
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
        $u="update matriculas set notaFinal=:n where al=:a AND modulo=:m";
        $stmt=$this->conector->prepare($u);
        try{
            $stmt->execute([
                ':a'=>$this->al,
                ':m'=>$this->modulo,
                ':n'=>$this->notaFinal
            ]);
        }catch(PDOException $ex){
            die("Error al modificar la matricula: ".$ex);
        }
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
    public function existeMatricula($a, $m){
        $consulta="select * from matriculas where al=:a AND modulo=:m";
        $stmt=$this->conector->prepare($consulta);
        try{
            $stmt->execute([
                ':a'=>$a,
                ':m'=>$m
            ]);
        }catch(PDOException $ex){
            die("Error al comprobar matricula: ".$ex);
        }
        $cont=0;
        while($fila=$stmt->fetch()){
            $cont++;
        }
        return ($cont!=0);
    }

    public function getMatricula($al, $mod){
        $cons="select al, modulo, nomAl, apeAl, nomMod, horasSem, notaFinal from alumnos, modulos, matriculas where idAl=:a AND modulo=:m";
        $stmt=$this->conector->prepare($cons);
        try{
            $stmt->execute([
                ':a'=>$al,
                ':m'=>$mod
            ]);
        }catch(PDOException $ex){
            die("Error al recuperar matriculas: ".$ex);
        }
        $fila=$stmt->fetch(PDO::FETCH_OBJ);
        return $fila;
    }

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
    //Total de registros para paginación
    public function getTotal(){
        $c="select * from matriculas";
        $stmt=$this->conector->prepare($c);
        try{
            $stmt->execute();
        }catch(PDOException $ex){
            die("Error al contar registros!! ".$ex);
        }
        $cont=0;
        while($fila=$stmt->fetch()){
            $cont++;
        }
        return $cont;
    }
}