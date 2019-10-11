<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Dado el array anterior comprueba si en él
    se encuentra el color “FF88CC” y el color
    “FF0000” usando la función in_array. 
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

    if(in_array("FF88CC",$colores,true)){
          echo "El color \"FF88CC\" se encuentra en el array \$colores<br>".PHP_EOL;
    }
    if(in_array("FF0000",$colores,true)){
        echo "El color \"FF000\" se encuentra en el array \$colores<br>".PHP_EOL;
    }
    
    
    ?>
    </body>
</html>