<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        //si no existe volvemos a index
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

<body style='background-color:orange'>
    <div class="container mt-5">
        <h3 class='text-center'>Sitio principal del Portal</h3>
        <p>Bienvenido : <?php echo $_SESSION['usuario']; ?></p>
        <a href='cerrar.php' class='btn btn-danger'>Cerrar Sesión</a>
    </div>
</body>

</html>