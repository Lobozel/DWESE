<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 16</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Crea un array con los siguientes valores: 5 => 1, 12 => 2, 13 => 56, x => 42. Muestra el
contenido. Cuenta el número de elementos que tiene y muéstralo por pantalla. A continuación borra
el elemento de la posición 5. Vuelve a mostrar el contenido y por último elimina el array.
    */
    
    $array=[
        5=>1,
        12=>12,
        13=>56,
        "x"=>42
    ];

    echo "<h3>Array sin modificar</h3>".PHP_EOL;
    print_r($array);
    echo "<h5>El array tiene ".count($array)." elementos</h5>".PHP_EOL;
    unset($array[5]);
    echo "<h3>Array después de borrar el elemento en la posición 5</h3>".PHP_EOL;
    print_r($array);
    echo "<h3>Array vacio</h3>".PHP_EOL;
    $array=[];
    print_r($array);
    ?>
    </body>
</html>