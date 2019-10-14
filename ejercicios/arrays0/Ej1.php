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
    Almacena en un array los 10 primeros números pares. Imprímelos cada uno en una línea
    */
    for($i=2,$cont=0;$cont<10;$i=$i+2,$cont++){
        $array[$cont]=$i;
    }
    
    do{        
        echo current($array)."<br>".PHP_EOL;
    }while(next($array));
    
    ?>
    </body>
</html>