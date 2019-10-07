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
    Dada la frase “Bienvenidos al a aventura de aprender PHP en 30 horas” utilizar funciones de
cadena para:
    Mostrar la parte central de la frase
    Averiguar la posición de la palabra PHP
    Reemplazar la palabra “aventura” por la cadena “<’b>misión</b>”.
    */

    $frase="Bienvenidos al a aventura de aprender PHP en 30 horas";

    echo "El caracter central es: ".$frase[(int)(strlen($frase)/2)].PHP_EOL;
    echo "<br>".PHP_EOL;
    echo "La posición de la palabra PHP es: ".strpos($frase,'PHP').PHP_EOL;
    echo "<br>".PHP_EOL;
    echo substr_replace($frase,"<'b>misión&lt;/b>",strpos($frase,'aventura'),strlen('aventura'));
    echo "<br>".PHP_EOL;
    
    ?>
    </body>
</html>