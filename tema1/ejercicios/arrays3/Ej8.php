<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 8</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
     Crea un array con los nombres Pedro, Ismael, Sonia, Clara, Susana, Alfonso y Teresa. Muestra el
número de elementos que contiene y cada elemento en una lista no numerada.
    */
    $nombres=[
        "Pedro",
        "Ismael",
        "Sonia",
        "Clara",
        "Susana",
        "Alfonso",
        "Teresa"
    ];

    echo "El array de nombres contiene ".count($nombres)." elementos:<br>".PHP_EOL;
    echo "<ul>".PHP_EOL;
    foreach($nombres as $indice=>$nombre)	{
	    echo "<li>".$nombre."</li>".PHP_EOL;
	}
    echo "</ul>".PHP_EOL;
    
    ?>
    </body>
</html>