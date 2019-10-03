<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 7</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Realiza una página PHP en la que se introduzca una frase en una variable y a continuación
    muestre la misma frase repitiendo todos sus caracteres. Así:
    CadenaOriginal
    CCaaddeennaaOOrriiggiinnaall
    */
    $cadena="Cadena NO original";
    $resultado="";

    for($i=0;$i<strlen($cadena);$i++){
        $resultado=$resultado.$cadena[$i].$cadena[$i];
    }

    echo $cadena.PHP_EOL;
    echo "<br>".PHP_EOL;
    echo $resultado.PHP_EOL;
    
    ?>
    </body>
</html>