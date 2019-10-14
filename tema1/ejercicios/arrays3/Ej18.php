<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 18</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Crea un array llamado deportes e introduce los siguientes valores: futbol, baloncesto, natación y
tenis. Haz el recorrido de la matriz con un for para mostrar sus valores. A continuación realiza las
siguientes operaciones:
- Muestra el total de valores que contiene
- Sitúa el puntero en el primer elemento del array y muestra el valor actual, es decir, donde está el
puntero actualmente.
- Avanza una posición y muestra el valor actual.
- Coloca el puntero en la última posición y muestra su valor.
- Retrocede una posición y muestra este valor.
    */
    $deportes=[
        "futbol",
        "baloncesto",
        "natación",
        "tenis"
    ];

    $tamanio=count($deportes);
    for($i=0;$i<$tamanio;$i++){
        echo $deportes[$i]."<br>".PHP_EOL;
    }

    echo "<br>El total de valores del array es: $tamanio<br>".PHP_EOL;
    reset($deportes);
    echo "<br>El valor del array donde se encuentra el puntero es: ".current($deportes)."<br>".PHP_EOL;
    next($deportes);
    echo "<br>El valor del array donde se encuentra el puntero es: ".current($deportes)."<br>".PHP_EOL;
    end($deportes);
    echo "<br>El valor del array donde se encuentra el puntero es: ".current($deportes)."<br>".PHP_EOL;
    prev($deportes);
    echo "<br>El valor del array donde se encuentra el puntero es: ".current($deportes)."<br>".PHP_EOL;


    ?>
    </body>
</html>