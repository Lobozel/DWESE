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
    Definir un array que tenga claves de un caracter representando cada letra del
alfabeto desde la a hasta la f. En la misma definición, asignarle a cada clave un
nombre propio que comience con esa letra. Ejemplo array (‘a’=>’Amanda’);
Mostrar el resultado por pantalla con var_dump.
    */
    $array=[
        "a"=>"Amanda",
        "b"=>"Blanca",
        "c"=>"Carol",
        "d"=>"Diana",
        "e"=>"Elaine",
        "f"=>"Fumiko"
    ];

    var_dump($array);
    
    ?>
    </body>
</html>