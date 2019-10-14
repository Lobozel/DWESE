<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Realiza una función que calcula el IVA y que recibe dos parámetros. Uno el valor sobre el que se
calcula y otro el porcentaje a aplicar. Si no se indica el porcentaje se entenderá que es del 18%.
    */
    
    $precio=45.99;
    $IVA=21;
    echo "Precio sin IVA: $precio<br>".PHP_EOL;
    echo "Precio con IVA: ".calcularIVA($precio,$IVA)."<br>".PHP_EOL;

    function calcularIVA($precio,$IVA=18){
        return $precio+=($IVA*$precio/100);
    }
    
    ?>
    </body>
</html>