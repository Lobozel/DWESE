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
    Dada la frase “Esta cadena tiene muchas letras” muestra:
    La posición de la primera ocurrencia de la letra ‘a’.
    La posición de la primera ocurrencia de la letra ‘m’.
    La posición de la primera ocurrencia de la palabra “tiene”
    La primera ocurrencia desde el final de la letra ‘a’.
    La frase desde la aparición de la palabra “cadena” hasta el final
    La cadena desde el carácter 12 hasta el final.
    La cadena devolviendo 6 caracteres desde el carácter 18.
    La cadena devolviendo los 6 últimos caracteres.
    La cadena desde la posición 26, contando desde atrás, 6 caracteres.
    La cadena empezando en el carácter 4 y terminando en el 7 desde atrás.
    */

    $frase="Esta cadena tiene muchas letras";

    echo "La primera ocurrencia de 'a' es ".strpos($frase,'a').PHP_EOL;
    echo "<br>".PHP_EOL;
    echo "La primera ocurrencia de 'm' es ".strpos($frase,'m').PHP_EOL;
    echo "<br>".PHP_EOL;
    echo "La primera ocurrencia de 'tiene' es ".strpos($frase,'tiene').PHP_EOL;
    echo "<br>".PHP_EOL;
    echo "La primera ocurrencia desde el final de 'a' es ".strrpos($frase,'a').PHP_EOL;
    echo "<br>".PHP_EOL;
    echo "La frase desde la aparición de la palabra \"cadena\" hasta el final es: ".substr($frase,strpos($frase,'cadena')).PHP_EOL;
    
    echo "<br><br>".PHP_EOL;
    echo "Partes de la cadena";
    echo "<br><br>".PHP_EOL;

    echo substr($frase,12).PHP_EOL;
    echo "<br>".PHP_EOL;
    echo substr($frase,18,6).PHP_EOL;
    echo "<br>".PHP_EOL;
    echo substr($frase,-6).PHP_EOL;
    echo "<br>".PHP_EOL;
    //Esta mal
    echo substr($frase,-26,6).PHP_EOL;
    echo "<br>".PHP_EOL;
    echo substr($frase,4,-7).PHP_EOL;
    

    ?>
    </body>
</html>