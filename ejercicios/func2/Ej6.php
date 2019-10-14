<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 6</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Mostrar la salida del código siguiente: (La idea es que lo hagas sin escribir el código)
    [ver el pdf]
    */

    //He buscado una manera de realizar lo mismo que en el pdf con un código un poco más óptimo
        for($i=0;$i<2;$i++){
            for($j=0;$j<3;$j++){
                echo contar($j);
            }
        }
        
        function contar($contar){
            $contar++;
            return "<p>El valor actual de la variable \$contar es: $contar </p>";
        }

    
    ?>
    </body>
</html>