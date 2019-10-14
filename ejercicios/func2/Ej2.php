<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Sabemos que la división entera de un número m, por otro n en realidad es calcular la cantidad de
veces que a m le podemos restar n, es decir es un resta sucesiva. Implementaremos una función que
me devuelva el resultado de la división entera de un dividendo m por un divisor n usando las restas
sucesivas. Comprobaremos que los números son enteros
    */

    $num1=50;
    $num2=5;

    $result=restaSucesiva($num1,$num2);
    echo "$num1/$num2=$result";

    function restaSucesiva(int $num1, int $num2,$cont=1){
        if(is_int($num1) && is_int($num2)){
            //Si numero2 es más grande que numero1, invierto los valores para evitar problemas
            if($num1<$num2){
                $aux=$num1;
                $num1=$num2;
                $num2=$aux;
            }
            $result=$num1-$num2;
            $cont++;
            if(($result-$num2)>0){
                return restaSucesiva($result,$num2,$cont);
            }

        }else{
            return 0;
        }
        return $cont;
    }
    
    ?>
    </body>
</html>