<?php
    session_start();
    //Si no existe el usuario vuelvo al login=>index.php
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    if(isset($_COOKIE['lastSession'.$_SESSION['user']])){
        $_SESSION['mensaje']=$_COOKIE['lastSession'.$_SESSION['user']];
    }else{
        $_SESSION['mensaje']='Es tu primera visita';
    }
    setcookie('lastSession'.$_SESSION['user'],date('d/m/Y H:i:s'),time()+365*24*60*60);

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>INICIO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style='background-color:#FFCCCC'>
<div class="container float-left mt-1">
    <div class='from-group row float-left'>
        <div class='col-xs-3'>
            <input type='text' class='form-control' value='<?php echo $_SESSION['user']; ?>' readonly />
        </div>
        <div class='col-xs-3'>
            <input type='text' class='form-control' value='<?php echo $_SESSION['mensaje']; ?>' readonly />
        </div>
        <div class='col-xs-2'>
            <a href='cerrar.php' class='btn btn-primary ml-3'>Cerrar sesion</a>
        </div>
    </div>
</div>
</body>

</html>