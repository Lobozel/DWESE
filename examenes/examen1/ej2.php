<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
        $cad1='Esto es una cadena de texto';
        $cad2='un poco más larga';
        
        $frase=$cad1." ".$cad2;

        echo "La longitud de la cadena resultante es: ".PHP_EOL;
        echo strlen($frase)."<br>".PHP_EOL;
        
        echo "<br>".PHP_EOL;

        echo "La posición de la primera 's' es: ".PHP_EOL;
        echo strpos($frase,'s')."<br>".PHP_EOL;
        echo "La posición de la última 's' es: ".PHP_EOL;
        echo strrpos($frase,'s')."<br>".PHP_EOL;
        
        echo "<br>".PHP_EOL;

        echo "La posición de la palabra poco es: ".PHP_EOL;
        echo stripos($frase,'poco')."<br>".PHP_EOL;

        echo "<br>".PHP_EOL;

        echo "La cantidad de palabras que contiene \$frase es: ".PHP_EOL;
        echo count(explode(" ",$frase));
    ?>
    </body>
</html>