<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
Tenemos el array
“nombre”=>”Juan”, “Manuel”, 1=>”Pepe”, 5=>”Dario”, “Ines”, “Manolo”, “cosa”=>”Television”
a) Guardar en un array las keys de array anterior y muestralo
b) Guardar los valores del array anterior en otro array y muestralo
    */
    $arrays=[
        "nombre"=>["Juan","Manuel"],
        "1"=>["Pepe"],
        "5"=>["Dario","Ines","Manolo"],
        "cosa"=>["Television"]
    ];

    do{
        $keys[]=key($arrays);
        $array=current($arrays);
        do{
            $values[]=current($array);
        }while(next($array));
    }while(next($arrays));


    echo "Array de keys:<br>".PHP_EOL;
    print_r($keys).PHP_EOL;;
    echo "<br>Array de valores:<br>".PHP_EOL;
    print_r($values).PHP_EOL;;
    ?>
    </body>
</html>