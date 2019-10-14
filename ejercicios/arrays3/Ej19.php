<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 19</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Crea una matriz para guardar a los amigos clasificados por diferentes ciudades. Los valores
serán los siguientes:
En Madrid: nombre Paco, edad 32, telefono 91-9999999
En Barcelona: nombre Susana, edad 34, telefono 93-0000000
En Toledo: nombre Sonia, edad 42, telefono 925-090909
Haz un recorrido del array multidimensional mostrando los valores de tal manera que nos muestre
en cada ciudad qué amigos tiene
    */
    $amigos=[ //Aqui guardaría mis amigos.. ¡SI TUVIESE ALGUNO!
        "Madrid"=>[
            "nombre"=>"Paco",
            "edad"=>32,
            "telefono"=>"91-9999999"
        ],
        "Barcelona"=>[
            "nombre"=>"Susana",
            "edad"=>34,
            "telefono"=>"93-0000000"
        ],
        "Toledo"=>[
            "nombre"=>"Sonia",
            "edad"=>42,
            "telefono"=>"925-090909"
        ]
    ];

    mostrarArray($amigos);
    

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