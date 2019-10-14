<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Realizar una página PHP en la que introduzca una frase en una variable y a continuación
    muestre el número de letras ‘a’ en esa cadena de la siguiente forma:
    ‘La bala mata la vaca’ → muestra: 8
    ‘El oso osó asir a la osa’ → muestra: 4
    A continuación muestra un array cuyas claves sean todas las letras contenidas en la frase y valor
    el número de veces que aparece esa letra.
    */

    $frase="Las palabras matan más que las balas";
    $fraseFormtt=normaliza($frase);
    $lengFrase=strlen($fraseFormtt);    
    $countA=substr_count($fraseFormtt,'a')
        +substr_count($fraseFormtt,'A');
    $countLetras=[];

    echo "'$frase' → muestra: $countA".PHP_EOL;
    echo "<br><br>".PHP_EOL;
    
    for($i=0;$i<$lengFrase;$i++){
        $char=$fraseFormtt[$i];
        if($char!=" "){         
            $countLetras[$char]=substr_count($fraseFormtt,$char);
        }        
    }

    do{
        echo "['".key($countLetras)."']=".current($countLetras)."<br>".PHP_EOL;
    }while(next($countLetras));


    //Elimina las tildes y las eñes para trabajar mejor
    function normaliza ($cadena){
        $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞ
    ßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
        $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuy
    bsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
        $cadena = utf8_decode($cadena);
        $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
        $cadena = strtolower($cadena);
        return utf8_encode($cadena);
    }
    ?>
    </body>
</html>