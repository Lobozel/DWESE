<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 10</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Realizar un programa que arme la estructura HTML de una tabla con 20 filas y
10 columnas utilizando dos bucles for. Dentro de las celdas debe ponerse una
letra O.
    */
    echo "<table align='center' border=2>".PHP_EOL;

    for($i=0;$i<20;$i++){
        echo "<tr>".PHP_EOL;
        for($j=0;$j<10;$j++){
            echo "<td>O</td>".PHP_EOL;
        }
        echo "</tr>".PHP_EOL;
    }

    echo "</table>".PHP_EOL;
    
    ?>
    </body>
</html>