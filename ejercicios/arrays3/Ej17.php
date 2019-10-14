<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 17</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Crea un array multidimensional para poder guardar los componentes de dos familias: “Los
Simpson” y “Los Griffin” dentro de cada familia ha de constar el padre, la madre y los hijos, donde
padre, madre e hijos serán los índices y los nombres serán los valores.
Familia “Los Simpson”: padre Homer, madre Marge, hijos Bart, Lisa y Maggie.
Familia “Los Griffin”: padre Peter, madre Lois, hijos Chris, Meg y Stewie
Muestra los valores de las dos familias en una lista no numerada.
    */
    $familias=[
        "Los Simpson"=>[
            "padre"=>"Homer",
            "madre"=>"Marge",
            "hijos"=>[
                "Bart",
                "Lisa",
                "Maggie"
            ]
        ],
        "Los Griffin"=>[
            "padre"=>"Peter",
            "madre"=>"Lois",
            "hijos"=>[
                "Chris",
                "Meg",
                "Stewie"
            ]
        ]
    ];


    mostrarArray($familias);
    

    function mostrarArray($array){
        echo "<ul>";
        do{
            $indice=key($array);
            if(!is_numeric($indice)){//En este caso uso esto para que no me salgan los indices númericos
                echo "<li>$indice</li>";
            }
            $valor=current($array);
            if(is_array($valor)){
                mostrarArray($valor);
            }else{
                echo "<li>$valor</li>";
            }
        }while(next($array));
        echo "</ul>";
    }

    ?>
    </body>
</html>