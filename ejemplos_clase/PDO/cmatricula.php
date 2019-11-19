<!DOCTYPE html>
<html lang="es">
<?php
    session_start();
    spl_autoload_register(function ($nombre){
        require './class/'.$nombre.'.php';
    });

    $conexion = new Conexion();
    $llave=$conexion->getConector();
    $alumno=new Alumnos($llave);
    $modulo=new Modulos($llave);
    $matricula=new Matriculas($llave);
    $todosAl=$alumno->read();
    $todosMod=$modulo->read();

    function error($mes){
        $_SESSION['error']=$mes;
        header('Location:cmatricula.php');
        die();
    }
    function matricular($al, $mod, $not){   
        global $matricula;     
        $matricula->setAl($al);
        $matricula->setModulo($mod);
        $matricula->setNotaFinal($not);

        $matricula->create();
        $llave=null;        

        $_SESSION['mensaje']='Alumno matriculado con éxito';
        header('Location:matriculas.php');
        die();
    }
?>

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style='background-color:tomato'>
    <h3 class='mt-3 text-center'>Matricular Alumno</h3>
    <div class="container mt-3">
        <?php
        if(isset($_SESSION['error'])){
            echo "<h3 class='text-danger mb-2'>
            {$_SESSION['error']}
            </h3>";
            unset($_SESSION['error']);
        }
        if(isset($_POST['enviar'])){
            $alumno=$_POST['alumno'];
            $modulo = $_POST['modulo'];
            $nota = $_POST['nota'];
            if($matricula->existeMatricula($alumno,$modulo)){
                error("El alumno ya está Matriculado de ese Módulo!!!");
                $llave=null;
            }
            matricular($alumno,$modulo,$nota);
        }else{
            
    ?>
        <form name="as" action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
            <div class="row">
                <div class="col">
                    <select class="form-control form-control-lg" name='alumno'>
                        <?php
                            foreach($todosAl as $item){
                                echo "<option value='{$item->idAl}'>
                                    {$item->apeAl}, {$item->nomAl}
                                </option>";
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col">
                    <select class="form-control form-control-lg" name='modulo'>
                    <?php
                            foreach($todosMod as $item){
                                echo "<option value='{$item->idMod}'>
                                    {$item->nomMod}, {$item->horasSem}
                                </option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <input type='number' name='nota' class="form-control form-control-lg" max='10' min='0' required value='0'>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name='enviar'>Matricular</button>&nbsp;
            <input type='reset' value='Limpiar' class='btn btn-warning'>&nbsp;
            <a href='matriculas.php' class='btn btn-info'>Volver</a>
        </form>
        <?php } ?>
    </div>

</body>

</html>