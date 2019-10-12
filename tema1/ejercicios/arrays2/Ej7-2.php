<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 7-2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Definir un array de 5 elementos y asignar a cada uno de ellos un número.
Mediante una estructura condicional, determinar si el promedio de los números
son mayores o menores que 6. Mostrar un mensaje por pantalla informando el
resultado.
    */
    
    $array=[];
    $tamanio=5;
    $countMayores=0;
    $countMenores=0;

    for($i=0;$i<$tamanio;$i++){
        $array[$i]=rand(1,10);
    }
    
    print_r($array).PHP_EOL;

    do{
        $valor=(current($array));
        if($valor>6){
            $countMayores++;
        }else if($valor<6){
            $countMenores++;
        }
    }while(next($array));
    
    if($countMayores>$countMenores){
        echo "<br>La mayoría de los números del array son mayores que 6".PHP_EOL;
    }else if($countMayores<$countMenores){
        echo "<br>La mayoría de los números del array son menores que 6".PHP_EOL;
    }else{
        echo "<br>Existe la misma cantidad de números mayores que 6 que de números menores que 6".PHP_EOL;
    }

    ?>
    </body>
</html>