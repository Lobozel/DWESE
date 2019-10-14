<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Definir un array que tenga como valor diez títulos de películas. Utilizar la
función sort para ordenarlos de forma alfabética y mostrarlo por pantalla con
print_r
    */
    $pelis=[
        "Colorfun",
        "El castillo en el cielo",
        "El Viaje de Chihiro",
        "La tumba de las luciernagas",
        "Ponyo",
        "Top Secret",
        "Wolf Children",
        "Kung Fusion",
        "Hot Shots",
        "Tenacious D"
    ];

    echo "Películas sin ordenar:<br>".PHP_EOL;
    print_r($pelis);
    echo "<br><br>Películas ordenadas con sort:<br>".PHP_EOL;
    print_r($pelis);
    
    
    ?>
    </body>
</html>