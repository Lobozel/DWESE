<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 7</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
     Implementaremos una función a la que pasaremos un número variable de argumentos (números),
mostraremos los números pasados y el mayor de todos, si no pasamos ningun argumento, error
    */
    
    mayorNum(5,12,4,87,3,2);

    function mayorNum(...$numeros){
        $mayor=PHP_INT_MIN;
        foreach ($numeros as $num) {
            echo "$num, ";
            if($num>$mayor){
                $mayor=$num;
            }
        }
        echo "<br>El mayor de los números es $mayor".PHP_EOL;
    }
    
    ?>
    </body>
</html>