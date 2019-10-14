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
    Rellena un array de 10 enteros con los 10 primeros números naturales. Calcula la media de los
que están en posiciones pares y muestra los impares por pantalla.
    */
    $array=[];
    $countPares=0;
    $sumaPares=0;

    for($i=0;$i<10;$i++){
        $array[$i]=$i+1;
    }
    

    echo "<h3>Números en posición impar en el array:</h3>".PHP_EOL;
    do{
        $indice=key($array);
        $valor=current($array);
        if($indice%2==0){
            $countPares++;
            $sumaPares+=$valor;
        }else{
            echo "$valor, ";
        }
    }while(next($array));
    

    echo "<h3>Media de los números en posición par:</h3>".PHP_EOL;
    echo $sumaPares/$countPares.PHP_EOL;

    ?>
    </body>
</html>