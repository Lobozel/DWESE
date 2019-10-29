<?php
    session_start();
    if(!isset($_SESSION['usuario'] )){
        salir();
    }
    function salir(){
        header('Location:index.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class='container'>INFORMACION</div>

    <div class="container float-right mt-1">
    <div class='from-group row float-right'>
        <div class='col-xs-3'>
            <input type='text' class='form-control' value='<?php echo $_SESSION['usuario']; ?>' readonly />
        </div>
        <div class='col-xs-2'>
            <a href='cerrar.php' class='btn btn-primary ml-3'>Cerrar sesion</a>
        </div>
    </div>
</div>
    </body>
</html>