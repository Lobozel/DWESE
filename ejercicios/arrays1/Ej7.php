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
    Obtén el número de valores iguales al valor 2 contenidos
    en un array de 10 valores generados aleatoriamente con valores de 1 a 10. 
    */
    $array=[];
    $valorABuscar=2;

    for($i=0;$i<10;$i++){
        $array[$i]=rand(1,10);
    }

    echo "El array generado de forma random es el siguiente:<br>".PHP_EOL;
    print_r($array);

    echo "<br><br>BUSQUEDAD DEL VALOR 2 DENTRO DEL ARRAY:<br>".PHP_EOL;
    
    $contValor2=0;
    foreach($array as $indice=>$valor)	{
	    if($valor==$valorABuscar){
            echo "El valor contenido en el indice $indice del array es $valor"; //$valor deberia ser siempre 2 en este caso
            $contValor2++;
        }
    }
    
    if($contValor2==0){
        echo "No se ha encontrado el valor $valorABuscar en ningún índice del array";
    }

    ?>
    </body>
</html>