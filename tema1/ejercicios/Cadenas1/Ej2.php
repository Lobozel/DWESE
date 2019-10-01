<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Realiza una página PHP que permita chequear si en una caja de texto se introduce una dirección
    de correo válida. Una dirección de correo válida debe tener presentes los caracteres ‘@’ y ‘.’ Si
    la dirección es válida escribe por un lado el nombre de usuario y por otro el dominio de dicha
    dirección.
    */
    echo "<div style='margin-top:25px;margin-right:auto;margin-left:auto;text-align:center;'>";
    echo $value = '<input type="text"></input>';
    echo "</div>";

    if($value=="patata"){
        echo "Has escrito patata";
    }
    

    ?>
    </body>
</html>