<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Definir un array con valores numéricos. Realizar la suma de todos los valores y
guardarlo en una variable. Mostrar la suma por pantalla.
    */
    
    $array=[
        rand(0,100),
        rand(0,100),
        rand(0,100),
        rand(0,100),
        rand(0,100)
    ];

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

    echo "La suma es ".sumar($array);
    
    ?>
    </body>
</html>