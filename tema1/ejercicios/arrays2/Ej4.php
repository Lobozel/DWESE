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
    Definir tres arrays: uno puramente asociativo, otro puramente enumerativo y
otro mixto. Luego, guardar en una variable la suma de los elementos de los tres
arrays y mostrarla por pantalla.
    */
    $suma=0;
    $asociativo=[
        "Uno"=>1,
        "Dos"=>2,
        "Tres"=>3
    ];
    $enumerativo=[
        9,6,12
    ];
    $mixto=[
        "Cuatro"=>4,
        5,
        "Ocho"=>8
    ];

    $suma+=sumar($asociativo);
    $suma+=sumar($enumerativo);
    $suma+=sumar($mixto);


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
    
    echo "La suma de los 3 arrays es $suma".PHP_EOL;

    ?>
    </body>
</html>