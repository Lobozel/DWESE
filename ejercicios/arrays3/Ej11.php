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
    Rellena los siguientes tres arrays y júntalos en uno nuevo. Muéstralos por pantalla.
“Lagartija”, “Araña”, “Perro”, “Gato”, “Ratón”
“12”, “34”, “45”, “52”, “12”
“Sauce”, “Pino”, “Naranjo”, “Chopo”, “Perro”, “34”
Utiliza la función array_merge()
    */
    $especies=[
        "Lagartija",
        "Araña",
        "Perro",
        "Gato",
        "Ratón"
    ];
    $numeros=[
        "12",
        "34",
        "45",
        "52",
        "12"
    ];
    $arboles=[
        "Sauce",
        "Pino",
        "Naranjo",
        "Chopo",
        "Perro",
        "34"
    ];

    echo "<h3>Array1:</h3>".PHP_EOL;
    print_r($especies);
    echo "<br><h3>Array2:</h3>".PHP_EOL;
    print_r($numeros);
    echo "<br><h3>Array3:</h3>".PHP_EOL;
    print_r($arboles);
    echo "<br><h3>Arrays fusionados:</h3>".PHP_EOL;
    $arrays=array_merge($especies,$numeros,$arboles);
    print_r($arrays);
    
    ?>
    </body>
</html>