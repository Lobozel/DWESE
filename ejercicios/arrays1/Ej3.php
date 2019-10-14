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
    Crea un array de dos dimensiones, de manera que
    en una dimensión contenga el tipo de colores
    (fuerte o suave) y en la otra 3 colores de cada tipo.
    Muestra una tabla como la siguiente recorriendo el array: 
    */
    $colores=[
        "Colores fuertes"=>[
            "Rojo:FF0000",
            "Verde:00FF00",
            "Azul:0000FF"
        ],
        "Colores suaves"=>[
            "Rosa:FE9ABC",
            "Amarillo:FDF189",
            "Malva:BC8F8F"
        ]
        ];
        $aux=[];

        echo "<table align='center' border=2>".PHP_EOL;
        do{
            $aux=current($colores);
            echo "<tr>".PHP_EOL;
            echo "<td>".key($colores)."</td>".PHP_EOL;
            do{
                echo "<td bgcolor=".substr(current($aux),-6).">".current($aux)."</td>".PHP_EOL;
            }while(next($aux));
            echo "</tr>".PHP_EOL;
        }while(next($colores));
    
        echo "</table>".PHP_EOL;
    ?>
    </body>
</html>