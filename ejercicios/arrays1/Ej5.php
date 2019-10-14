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
    Crea un array llamado pila como éste: 
$pila = array(“cinco” => 5, “uno”=>1, “cuatro”=>4, “dos”=>2, “tres”=>3); 
Muestra el array ordenado por asort, arsort, ksort, sort, rsort. 
    */
    $pila = array(
        "cinco"=>5,
        "uno"=>1,
        "cuatro"=>4,
        "dos"=>2,
        "tres"=>3
    );

    echo "Antes de aplicar los distintos métodos de ordenación<br>".PHP_EOL;
    print_r($pila);

    echo "<br>------------------------<br>".PHP_EOL;
    echo "Después de aplicar asort()<br>".PHP_EOL;
    $aux=$pila;
    asort($aux);
    print_r($aux);

    echo "<br>------------------------<br>".PHP_EOL;
    echo "Después de aplicar arsort()<br>".PHP_EOL;
    $aux=$pila;
    arsort($aux);
    print_r($aux);

    echo "<br>------------------------<br>".PHP_EOL;
    echo "Después de aplicar ksort()<br>".PHP_EOL;
    $aux=$pila;
    ksort($aux);
    print_r($aux);
    
    echo "<br>------------------------<br>".PHP_EOL;
    echo "Después de aplicar sort()<br>".PHP_EOL;
    $aux=$pila;
    sort($aux);
    print_r($aux);
    
    echo "<br>------------------------<br>".PHP_EOL;
    echo "Después de aplicar rsort()<br>".PHP_EOL;
    $aux=$pila;
    rsort($aux);
    print_r($aux);
    
    
    ?>
    </body>
</html>