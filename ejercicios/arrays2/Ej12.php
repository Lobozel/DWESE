<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 12</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Idem anterior pero encontrar el mínimo.
    */
    //Lo inicializo al número más grande representable para estar seguro de que empieza
    //con el valor más alto de los que se van a comparar
    $menor=PHP_INT_MAX; 
    $array=[];

    for($i=0;$i<10;$i++){
        $array[$i]=rand(0,100);
    }
    
    for($i=0;$i<count($array);$i++){
        if($menor>$array[$i]){
            $menor=$array[$i];
        }
    }

    echo "El array contiene los siguientes números:<br>".PHP_EOL;
    print_r($array);
    echo "<br><br>".PHP_EOL;

    echo "El número menor del array es $menor".PHP_EOL;
    
    ?>
    </body>
</html>