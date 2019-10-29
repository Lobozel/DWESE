<?php
    session_start();
    //Si no existe el usuario vuelvo al login=>index.php
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    define("ADMIN","administrador");
    define("NORMAL","usuario normal");
    define("AVANZADO","usuario avanzado");
    
    function fondo($color){
        echo "<body style='background-color:$color'>".PHP_EOL;
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Página 3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<?php
    if($_SESSION['user']['tipe']==ADMIN){
        fondo("red");
    }else if($_SESSION['user']['tipe']==NORMAL){
        fondo("orange");
    }else{
        fondo("black");
    }
?>
<div class="container float-right mt-1">
    <div class='from-group row float-right'>
        <div class='col-xs-3'>
            <input type='text' class='form-control'
                value='<?php echo $_SESSION['user']['name']." - ".$_SESSION['user']['tipe']; ?>' readonly />
        </div>
        <div class='col-xs-2'>
            <a href='cerrar.php' class='btn btn-primary ml-3'>Cerrar sesion</a>
        </div>
        <div class='col-xs-2'>
            <a href='menu.php' class='btn btn-primary ml-3'>Volver</a>&nbsp;&nbsp;
        </div>
    </div>
</div>
<!---------------------------------------------------------------------------------------------------->
<div class="container mt-3 text-center">
    <br><br>
    <h1>Esta es la página 3</h1>
</div>

</body>

</html>