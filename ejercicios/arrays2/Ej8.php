<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 8</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Dado un array de 20 elementos que consiste en números reales (con coma
decimal) y que cada elemento representa la venta del día de un comercio.
Calcular el promedio de venta por día utilizando alguna estructura iterativa.
Mostrar el resultado por pantalla.
    */
    $array=[];
    $tamanio=20;

    for($i=0;$i<$tamanio;$i++){
        $array[$i]=rand(10,1000)/10;
    }
    print_r($array);
    
    $suma=sumar($array);
    $promedio=$suma/$tamanio;

    echo "<br><br>El promedio del array es $promedio".PHP_EOL;

    function sumar($arr){   
        if(is_array(current($arr))){
            return sumar(current($arr));
        }else if(is_numeric(current($arr))){
            $valor=current($arr);
            next($arr);
            return $valor+sumar($arr);
        }else{
            return 0;
        }
    }

    ?>
    </body>
</html>