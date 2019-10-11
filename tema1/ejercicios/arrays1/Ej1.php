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
    Crea un array $dias con los días de la semana y muestra todas sus parejas
    índices/valores mediante un bucle foreach y for
    */
    $dias=[
        "Lunes",
        "Martes",
        "Miércoles",
        "Jueves",
        "Viernes",
        "Sábado",
        "Domingo"
    ];

    echo "Días de la semana en foreach:<br>".PHP_EOL;
    foreach($dias as $indice=>$dia)	{
	    echo "El índice del array que contiene como valor ".$dia." es ".$indice."<br>".PHP_EOL;
    }
    
    echo "<br>Días de la semana en un for:<br>".PHP_EOL;
    for($i=0;count($dias);$i++){
	    echo "El índice del array que contiene como valor ".$i." es ".$dias[$i]."<br>".PHP_EOL;        
    }
    
    ?>
    </body>
</html>