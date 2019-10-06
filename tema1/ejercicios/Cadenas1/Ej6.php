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
    Realiza una página PHP en la que por medio de la función printf muestre un número tanto en
    binario como en octal.
    */
    $num=rand(1,500);

    printf("El número en decimal %d es %d en binario y %o en octal.", $num, $num, $num);

    ?>
    </body>
</html>