<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 10</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
Tenemos el array siguiente:
“Luis”, “Ana”, “Lucas”, “Zacarias”, “Tomas”, “Juan”, “Ginesa”, “Oscar”
Mustra el array resultante al aplicarle al anterior sort(), rsort(), asort(), arsort()
    */
    $nombres=[
        "Luis",
        "Ana",
        "Lucas",
        "Zacarias",
        "Tomas",
        "Juan",
        "Ginesa",
        "Oscar"
    ];

    echo "Antes de aplicar los distintos métodos de ordenación<br>".PHP_EOL;
    print_r($nombres);
    
    echo "<br>------------------------<br>".PHP_EOL;
    echo "Después de aplicar sort()<br>".PHP_EOL;
    $sortNombres=$nombres;
    sort($sortNombres);
    print_r($sortNombres);
    
    echo "<br>------------------------<br>".PHP_EOL;
    echo "Después de aplicar rsort()<br>".PHP_EOL;
    $rsortNombres=$nombres;
    rsort($rsortNombres);
    print_r($rsortNombres);
    

    echo "<br>------------------------<br>".PHP_EOL;
    echo "Después de aplicar asort()<br>".PHP_EOL;
    $asortNombres=$nombres;
    asort($asortNombres);
    print_r($asortNombres);
    

    echo "<br>------------------------<br>".PHP_EOL;
    echo "Después de aplicar arsort()<br>".PHP_EOL;
    $arsortNombres=$nombres;
    arsort($arsortNombres);
    print_r($sortNombres);
    
    ?>
    </body>
</html>