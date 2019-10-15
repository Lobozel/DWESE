<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    La función potencia de dos números m^n enteros es igual a: atención con caso base y recursivo
[mirar pdf]
 Implementar una función recursiva para calcular la potencia de dos enteros positivos pasados como
parámetros.
    */
    
    $m=2;
    $n=4;

    echo potencia($m,$n);

    function potencia(int $m,int $n){
        if($n==0){
            return 1;
        }else if($n==1) {
            return $m;
        }else if($n%2==0){
            return potencia($m,$n/2)*potencia($m,$n/2);
        }else{
            return potencia($m,($n-1)/2)*potencia($m,($n-1)/2)*$m;
        }
    }
    
    ?>
    </body>
</html>