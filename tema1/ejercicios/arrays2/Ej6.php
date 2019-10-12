<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 6</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Realizar un dado virtual en PHP mediante el uso de arrays. Cada vez que se
refresque la pantalla, deberá verse un número distinto al azar entre 1 y 6
    */
    $caras=[
        1,2,3,4,5,6
    ];

    echo "Resultado de la tirada [D6]:<br>".PHP_EOL;
    echo $caras[rand(0,count($caras)-1)].PHP_EOL;
    
    ?>
    </body>
</html>