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
    Realizar una ruleta virtual en PHP, de la misma manera que con el dado.
    */
    $opciones=[
        "Si",
        "No",
        "Preguntale a tu madre",
        "No estoy seguro, recarga la página",
        "Probablemente",
        "Es mejor que lo busques en Google",
        "No cuentes con ello",
        "Jamás",
        "Seguro"
    ];

    echo $opciones[rand(0,count($opciones))].PHP_EOL;
    
    
    ?>
    </body>
</html>