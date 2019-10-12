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
    Crea un array con una lista de 5 alumnos de la clase.
    Muestra primero la lista de los 3 primeros alumnos del array
    y luego los dos últimos de la lista usando las funciones array_slice y array_splice. 
    */
    $alumnos=[
        "Miguel Ángel",
        "Eduardo",
        "Sandra",
        "Jose Manuel",
        "Quique"
    ];
    echo "Los 3 primeros alumnos con array_slice<br>".PHP_EOL;
    $aux=array_slice($alumnos,0,3);
    print_r($aux);
    echo "<br>Los dos últimos alumnos con array_slice<br>".PHP_EOL;
    $aux=array_slice($alumnos,3);
    print_r($aux);
    echo "<br>Los 3 primeros alumnos con array_splice<br>".PHP_EOL;
    $aux=$alumnos;
    array_splice($aux,3,2);
    print_r($aux);
    echo "<br>Los dos últimos alumnos con array_splice<br>".PHP_EOL;
    $aux=$alumnos;
    array_splice($aux,0,3);
    print_r($aux);
    
    ?>
    </body>
</html>