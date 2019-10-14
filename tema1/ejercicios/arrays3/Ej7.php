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
    Repite el ejercicio anterior pero ahora sí se ha de crear índices, ejemplo:
El índice del array que contiene como valor Madrid es MD
    */
    $ciudades=[
        "MD"=>"Madrid",
        "BC"=>"Barcelona",
        "LD"=>"Londres",
        "NY"=>"New York",
        "LA"=>"Los Ángeles",
        "C"=>"Chicago"
    ];

    foreach($ciudades as $indice=>$ciudad)	{
	    echo "El índice del array que contiene como valor ".$ciudad." es ".$indice."<br>".PHP_EOL;
	}
    
    ?>
    </body>
</html>