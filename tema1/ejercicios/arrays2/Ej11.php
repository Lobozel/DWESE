<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Dado un array enumerativo de 10 elementos de números enteros (sin coma
decimal), encontrar el máximo de todos esos números usando una estructura
iterativa y mostrarlo por pantalla.
    */
    $mayor=-1; //Lo inicializo negativo para estar seguro de que empieza con el valor más bajo de los que se van a comparar
    $array=[];

    for($i=0;$i<10;$i++){
        $array[$i]=rand(0,100);
    }
    
    for($i=0;$i<count($array);$i++){
        if($mayor<$array[$i]){
            $mayor=$array[$i];
        }
    }

    echo "El array contiene los siguientes números:<br>".PHP_EOL;
    print_r($array);
    echo "<br><br>".PHP_EOL;

    echo "El número mayor del array es $mayor".PHP_EOL;

    ?>
    </body>
</html>