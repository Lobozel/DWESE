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

    //Este script hace que aparezca una pantalla emergente pidiendole al usuario realizar una pregunta
    //Solo sirve para que el programa parezca mas complejo y luzca mejor
    echo("<script type='text/javascript'> var pregunta = prompt('¿Qué deseas saber?'); </script>").PHP_EOL;
    //Este script unicamente escribe en la pagina lo que el usuario habia introducido
    echo ("<script type='text/javascript'> document.write(pregunta); </script>").PHP_EOL;

    echo "<br>".PHP_EOL;
    echo $opciones[rand(0,count($opciones)-1)].PHP_EOL;
    
    
    ?>
    </body>
</html>