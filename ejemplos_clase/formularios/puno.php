<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h3 class='text-center'>Procesando el Formulario</h3>
        <?php
            //Recoemos los datos del formulario
            $mail=$_REQUEST['email'];//<-- el nombre que tenga el input
            $pass=$_POST['password'];
            $prov=$_POST['prov'];
            if(isset($_POST['cbop1'])){
                echo "<br>Has marcado Opción1<br>";
            }
            if(isset($_POST['cbop2'])){
                echo "<br>Has marcado Opción2<br>";
            }
            echo "<br>El correo es: <br>$mail<br>".PHP_EOL;
            echo "<br>El password es: <br>$pass<br>".PHP_EOL;
            echo "<br>La provincia es: <br>$prov<br>".PHP_EOL;
        ?>
    </div>
    </body>
</html>