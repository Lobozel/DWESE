<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 9</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
Crea un array asociatico que tenga la estructura siguiente:
‘articulo1’=>(‘nombre’ = >’Bombilla’,
‘pvp’ =>23.4,
‘tipo’=>’Electricidad’,
‘stock’=>45
),
‘articulo2’=>(‘nombre’ = >’Brasero’,
‘pvp’ =>123.4,
Crea un array asociatico que tenga la estructura siguiente:
‘articulo1’=>(‘nombre’ = >’Bombilla’,
‘pvp’ =>23.4,
‘tipo’=>’Electricidad’,
‘stock’=>45
),
‘articulo2’=>(‘nombre’ = >’Brasero’,
‘pvp’ =>123.4,
a) Muestra los datos en una salida del tipo:
           | NOMBRE | PVP (€) | TIPO | STOCK
articulo 1 |
articulo 2 |
articulo 3 |
articulo 4 |
El total de stock es de : 99 (obviamente sumamos el stock)
b) Misma salida pero solo nos mostrará los árticulos de tipo Informática.
    */
    $articulos=[
        "articulo1"=>[
            "nombre"=>"Bombilla",
            "pvp"=>23.4,
            "tipo"=>"Electricidad",
            "stock"=>45
        ],
        "articulo2"=>[
            "nombre"=>"Brasero",
            "pvp"=>123.4,
            "tipo"=>"Electricidad",
            "stock"=>4
        ],
        "articulo3"=>[
            "nombre"=>"Monitor led 19",
            "pvp"=>203.4,
            "tipo"=>"Informatica",
            "stock"=>5
        ],
        "articulo4"=>[
            "nombre"=>"tablet 10",
            "pvp"=>123.4,
            "tipo"=>"Informatica",
            "stock"=>45
        ]
        ];
        

        $countStock=0;
        echo "<br><table align='center' border=2>".PHP_EOL;
        echo "<tr>".PHP_EOL.
        "<td></td>".PHP_EOL.
        "<td>Nombre</td>".PHP_EOL.
        "<td>PVP (€)</td>".PHP_EOL.
        "<td>Tipo</td>".PHP_EOL.
        "<td>Stock</td>".PHP_EOL.
        "</tr>".PHP_EOL;
        for($i=0;$i<count($articulos);$i++){
            echo "<tr>".PHP_EOL;
            echo "<td>".key($articulos)."</td>".PHP_EOL;
            $aux=current($articulos);
            $countStock=$countStock+$aux["stock"];
            for($j=0;$j<count($aux);$j++){
                echo "<td>".current($aux)."</td>".PHP_EOL;
                next($aux);
            }
            next($articulos);
            echo "</tr>".PHP_EOL;
        }
        
        echo "</table>".PHP_EOL;

        echo "<br>El total de stock es de : $countStock<br><br>".PHP_EOL;


        reset($articulos);
        $countStock=0;
        echo "<br><table align='center' border=2>".PHP_EOL;
        echo "<tr>".PHP_EOL.
        "<td></td>".PHP_EOL.
        "<td>Nombre</td>".PHP_EOL.
        "<td>PVP (€)</td>".PHP_EOL.
        "<td>Tipo</td>".PHP_EOL.
        "<td>Stock</td>".PHP_EOL.
        "</tr>".PHP_EOL;
        for($i=0;$i<count($articulos);$i++){
            $aux=current($articulos);
            if($aux["tipo"]=="Informatica"){
                echo "<tr>".PHP_EOL;
            echo "<td>".key($articulos)."</td>".PHP_EOL;            
            $countStock=$countStock+$aux["stock"];
            for($j=0;$j<count($aux);$j++){
                echo "<td>".current($aux)."</td>".PHP_EOL;
                next($aux);
            }            
            echo "</tr>".PHP_EOL;
            }            
            next($articulos);
        }
        
        echo "</table>".PHP_EOL;

        echo "<br>El total de stock es de : $countStock<br><br>".PHP_EOL;
    ?>
    </body>
</html>