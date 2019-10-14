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
    Diseñaremos una función que le pasaremos un array de números y me devolverá un array con el
mayor y el menor. Controlaremos que nos llegue un array y que los valores sean numéricos.
    */
    
    $array=[
        1,
        2,
        9,
        56,
        23
    ];

    echo mayorMenor($array);

    function mayorMenor($numeros){
        if(is_array($numeros)){
            $mayor=PHP_INT_MIN;
            $menor=PHP_INT_MAX;
            do{
                $valor=current($numeros);
                if(is_numeric($valor)){
                    if($valor>$mayor){
                        $mayor=$valor;
                    }
                    if($valor<$menor){
                        $menor=$valor;
                    }
                }else{
                    return "<h2 class='text-danger'>Se ha encontrado un valor no númerico en el índice: ".key($numeros)."</h2>".PHP_EOL;
                }
            }while(next($numeros));
            return "El mayor número del array es: $mayor<br>
                    El menor número del array es: $menor".PHP_EOL;
        }else{
            return "<h2 class='text-danger'>Debes pasar un array</h2>".PHP_EOL;;
        }
    }
    
    ?>
    </body>
</html>