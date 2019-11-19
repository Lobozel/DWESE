<!DOCTYPE html>
<html lang="es">
<?php

    if(!isset($_GET['al']) || !isset($_GET['mod'])){
        header('Location:matriculas.php');
        die();
    }

    session_start();
    spl_autoload_register(function ($nombre){
        require './class/'.$nombre.'.php';
    });

    $conexion = new Conexion();
    $llave=$conexion->getConector();
    $matricula=new Matriculas($llave);
    $datos=$matricula->getMatricula($_GET['al'],$_GET['mod']);


    function error($mes){
        $_SESSION['error']=$mes;
        header('Location:ematricula.php');
        die();
    }
    function modificar($al, $mod, $not){   
        global $matricula;     
        $matricula->setAl($al);
        $matricula->setModulo($mod);
        $matricula->setNotaFinal($not);

        $matricula->update();
        $llave=null;        

        $_SESSION['mensaje']='Matricula modificada con éxito';
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
    <h3 class='mt-3 text-center'>Editar matricular</h3>
    <div class="container mt-3">
        <?php
        if(isset($_SESSION['error'])){
            echo "<h3 class='text-danger mb-2'>
            {$_SESSION['error']}
            </h3>";
            unset($_SESSION['error']);
        }
        if(isset($_POST['enviar'])){
            $alumno=$_GET['al'];
            $modulo = $_GET['mod'];
            $nota = $_POST['nota'];

            modificar($alumno,$modulo,$nota);
        }else{
            
    ?>
        <form name="as" action='<?php echo $_SERVER['PHP_SELF']."?al={$_GET['al']}&mod={$_GET['mod']}"; ?>' method='POST'>
            <div class="row">
                <div class="col">
                    <input type='text' name='alumno'  value='<?php echo $datos->apeAl.', '.$datos->nomAl; ?>' readonly class="form-control form-control-lg">
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col">
                <input type='text' name='modulo'  value='<?php echo $datos->nomMod.', '.$datos->horasSem; ?>' readonly class="form-control form-control-lg">
                </div>
                <div class="col">
                    <input type='number' name='nota' class="form-control form-control-lg" max='10' min='0' required value='<?php echo $datos->notaFinal; ?>'>
                </div>
            </div>

            <button type="submit" class="btn btn-primary" name='enviar'>Editar</button>&nbsp;
            <input type='reset' value='Limpiar' class='btn btn-warning'>&nbsp;
            <a href='matriculas.php' class='btn btn-info'>Volver</a>
        </form>
        <?php } ?>
    </div>

</body>

</html>