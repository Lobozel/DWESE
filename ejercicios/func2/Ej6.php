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
    Mostrar la salida del código siguiente: (La idea es que lo hagas sin escribir el código)
    [ver el pdf]
    */

 echo "La salida sería:<br>1<br>2<br>3<br>4<br>1<br>1<br>1<br>1<br>".PHP_EOL;

 echo "<br>La razón es que la variable estatica puede ser llamada desde cualquier parte del código, por lo que se puede modificar su valor dentro de la función.<br>".PHP_EOL;
 echo "Sin embargo, la otra variable se declara de nuevo cada vez que se llama a la función, por lo que su valor se reestablece cada vez.".PHP_EOL;

    ?>
    </body>
</html>