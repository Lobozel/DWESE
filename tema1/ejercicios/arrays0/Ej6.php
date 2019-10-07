<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 6</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
Crea un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array haciendo un recorrido
diciendo el valor correspondiente a cada índice, ejemplo:
La ciudad con el índice 0 tiene el nombre Madrid
    */
    $ciudades=[
        "Madrid",
        "Barcelona",
        "Londres",
        "New York",
        "Los Ángeles",
        "Chicago"
    ];

    foreach($ciudades as $indice=>$ciudad)	{
	    echo "La ciudad con el índice ".$indice." tiene el nombre ".$ciudad."<br>".PHP_EOL;
	}
    ?>
    </body>
</html>