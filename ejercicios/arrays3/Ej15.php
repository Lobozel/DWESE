<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 15</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Implementa un array asociativo con los siguientes valores y ordénalo de menor a mayor.
Muestra los valores en una tabla.
$numeros = array(3, 2, 8, 123, 5, 1);
    */
    
    $numeros = [
        "tres"=>3,
        "dos"=>2,
        "ocho"=>8,
        "ciento veintitrés"=>123,
        "cinco"=>5,
        "uno"=>1
    ];

    asort($numeros);

    echo "<br><br>".PHP_EOL;

    echo "<table align='center' border=2>".PHP_EOL;
        do{
            echo "<tr>".PHP_EOL;
            echo "<td>".key($numeros)."</td>".PHP_EOL;
            echo "<td>".current($numeros)."</td>".PHP_EOL;
            echo "</tr>".PHP_EOL;
        }while(next($numeros));
        echo "</table>".PHP_EOL;
    
    ?>
    </body>
</html>