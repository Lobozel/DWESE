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
    Dado el array anterior comprueba si en él
    se encuentra el color “FF88CC” y el color
    “FF0000” usando la función in_array. 
    */
    $colores=[
        "Colores fuertes"=>[
            "FF0000",
            "00FF00",
            "0000FF"
        ],
        "Colores suaves"=>[
            "FE9ABC",
            "FDF189",
            "BC8F8F"
        ]
        ];

        $needle="FF88CC";

        if (in_arrayMejorado($colores,$needle)){
            echo "El color $needle se encuentra dentro del array<br>".PHP_EOL;
        }else{
            echo "El color $needle NO se encuentra dentro del array<br>".PHP_EOL;
        }

        $needle="FF0000";

        if (in_arrayMejorado($colores,$needle)){
            echo "El color $needle se encuentra dentro del array<br>".PHP_EOL;
        }else{
            echo "El color $needle NO se encuentra dentro del array<br>".PHP_EOL;
        }

    //Usa el método in_array para buscar el valor $needle dentro de un array
    //Si el array original tiene elementos arrays, busca dentro de estos sub_arrays también
    function in_arrayMejorado($array,$needle){
        if(in_array($needle,$array)){
            return true;
        }else{
            if(is_array(current($array))){
                if(in_array($needle,current($array))){
                    return true;
                }else{
                    next($array);
                    in_arrayMejorado($array,$needle);
                }
            }else{
                return false;
            }
        }
    }
    
    
    ?>
    </body>
</html>