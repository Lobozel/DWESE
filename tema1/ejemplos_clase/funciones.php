<!DOCTYPE html>
<html lang="es">
    <head>
        <title>funciones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    //funciones Recursivas (caso de inicio o caso de salida para no entrar en llamadas infinitas)
    //Caso recursivo
    $num=6;

    echo "$num!=".factorial($num).PHP_EOL;


    function factorial($n){
        //caso de salida
        if($n==0) return 1;
        return $n*factorial($n-1);
    }

    echo "<br>";

    //Funciones anonimas o clausuras //No tienen nombre
    $saludo=function($nom=" Mundo"){
        echo "<p>Hola   <b>$nom</b></p>";
    };
    $saludo("Miguel");
    $saludo();

    $suma=[
        1,
        12,
        3,
        8,
        12,
        array(2,3,array(6,7))
    ];

    function sumar($arr){   
        if(is_array(current($arr))){
            return sumar(current($arr));
        }else if(is_numeric(current($arr))){
            $valor=current($arr);
            next($arr);
            return $valor+sumar($arr);
        }else{
            return 0;
        }
    }

    echo "La suma es ".sumar($suma);
    
    ?>
    </body>
</html>



