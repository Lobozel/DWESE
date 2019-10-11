<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 13</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Hacer un programa que calcule todos los números primos entre 1 y 50 y los
muestre por pantalla. Un número primo es un número entero que sólo es
divisible por 1 y por sí mismo.
    */
    
    $contDiv=0;
        for($cont=2;$cont<=50;$cont++){
            for($i=2;$i<$cont && $contDiv==0;$i++){
                if($cont%$i==0){
                    $contDiv++;
                }
            }
            if($contDiv==0){
                echo "$cont, ";
            }else{
                $contDiv=0;
            }
        }
    
    ?>
    </body>
</html>