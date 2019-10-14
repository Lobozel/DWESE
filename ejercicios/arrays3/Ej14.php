<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 14</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Implementa un array asociativo con los siguientes valores:
$estadios_futbol = array(“Barcelona” => “Camp Nou”, “Real Madrid” => “Santiago Bernabeu”,
“Valencia” => “Mestalla”, “Real Sociedad” => “Anoeta”);
Muestra los valores del array en una tabla, has de mostrar el índice y el valor asociado.
Elimina el estadio asociado al Real Madrid.
Vuelve a mostrar los valores para comprobar que el valor ha sido eliminado, esta vez en una lista
numerada.
    */
    $estadios_futbol =
    array(
        "Barcelona" => "Camp Nou",
        "Real Madrid" => "Santiago Bernabeu",
        "Valencia" => "Mestalla",
        "Real Sociedad" => "Anoeta"
    );

    echo "<br><br>".PHP_EOL;

    echo "<table align='center' border=2>".PHP_EOL;
        do{
            echo "<tr>".PHP_EOL;
            echo "<td>".key($estadios_futbol)."</td>".PHP_EOL;
            echo "<td>".current($estadios_futbol)."</td>".PHP_EOL;
            echo "</tr>".PHP_EOL;
        }while(next($estadios_futbol));
        reset($estadios_futbol);
        echo "</table>".PHP_EOL;
    
        unset($estadios_futbol["Real Madrid"]);

        echo "<ol>".PHP_EOL;
        do{
            echo "<li>".key($estadios_futbol)." -> ".current($estadios_futbol)."</li>".PHP_EOL;
        }while(next($estadios_futbol));
        echo "</ol>".PHP_EOL;

    ?>
    </body>
</html>