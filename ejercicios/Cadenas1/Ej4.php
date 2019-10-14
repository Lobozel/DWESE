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
    Realiza una página PHP en la que se introduzca una frase en una variable. Muestra por pantalla
    las dos primeras palabras de esa frase.
    */
    $frase="Esto es una frase";
    $modFrase=explode(" ",trim($frase));
    if(count($modFrase)>1){
        for($i=0;$i<2;$i++){
            echo $modFrase[$i].PHP_EOL;
            echo "<br>".PHP_EOL;
        }
    }else{
        echo "<h3 class='text-danger'>No se ha introducido una frase</h3>".PHP_EOL;
    }    
    ?>
    </body>
</html>