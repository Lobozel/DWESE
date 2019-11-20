<!DOCTYPE html>
<html lang="es">
<?php
    session_start();
    spl_autoload_register(function ($nombre){
        require './class/'.$nombre.'.php';
    });
    function error($mes){
        $_SESSION['error']=$mes;
        header('Location:cmodulo.php');
        die();
    }
    function crearModulo($n,$h){
        $conexion = new Conexion();
        $llave=$conexion->getConector();
        $modulo=new Modulos($llave, $n, $h);
        $modulo->create();
        //Cerramos la conexión
        $llave=null;
        $_SESSION['mensaje']='Módulo creado con éxito';
        header('Location:modulos.php');
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

<body style='background-color:salmon'>
    <h3 class='mt-3 text-center'>Crear Modulo</h3>
    <div class="container mt-3">
    <?php
        if(isset($_SESSION['error'])){
            echo "<h3 class='text-danger mb-2'>
            {$_SESSION['error']}
            </h3>";
            unset($_SESSION['error']);
        }
        if(isset($_POST['enviar'])){
            $nombre=trim($_POST['nombre']);
            $horas = $_POST['horas'];
            if(strlen($nombre)==0){
                error("El nombre debe contener algún carácter válido.");
            }
            crearModulo($nombre,$horas);
        }else{
            
    ?>
        <form name="as" action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
            <div class="form-group">
                <label for="nom">Nombre Modulo</label>
                <input type="text" class="form-control" id="nom"
                    placeholder="Nombre" name='nombre' required>
            </div>
            <div class="form-group">
                <label for="horas">Horas Semanales</label>
                <input type="number" class="form-control" id="horas" placeholder="Horas Semanales" max='8' min='1' name='horas' required>
            </div>
            <button type="submit" class="btn btn-primary" name='enviar'>Crear</button>&nbsp;
            <input type='reset' value='Limpiar' class='btn btn-warning'>&nbsp;
            <a href='modulos.php' class='btn btn-info'>Volver</a>
        </form>
        <?php } ?>
    </div>

</body>

</html>