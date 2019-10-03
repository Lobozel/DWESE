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
    En algunas ocasiones tenemos que comprobar la validez de una cadena de caracteres para ver
    si contiene solamente aquellos que consideramos como válidos. Por ejemplo, si tuviéramos que
    validar el nombre de usuario anterior, podríamos permitir números, letras y ocasionalmente
    caracteres ‘-‘ o ‘_’, pero no otro tipo de caracteres como ‘+’, ‘@’, ‘&’, etc. Además, siendo un
    nombre de usuario, podemos tener fijados un máximo y mínimo número de caracteres. Realiza
    una comprobación para el nombre de usuario con dos partes, la primera para ver si la longitud
    de la cadena está permitida (entre 3 y 20 caracteres) y la segunda para asegurar que los
    caracteres utilizados están entre los permitidos (letras, números, guión alto, guión bajo).
    */
    $nombre="Usuario";
        
    if(ValidarPalabra($nombre)){
        echo "<h3 class='text-info'>El nombre de Usuario \"$nombre\" cumple con los requisitos</h3>".PHP_EOL;
    }

    //Comprueba si la palabra cumple con los criterios pre-establecidos
    function ValidarPalabra($palabra){
        $longName=strlen($palabra);

        if($longName<3 || $longName>20){
            echo "<h3 class='text-danger'>Debe tener entre 3 y 20 caracteres.</h3>".PHP_EOL;
            return false;
        }

        //Guarda los caracteres permitidos en una variable y comprueba que la palabra solo contenga caracteres de esa cadena
        $charAccepted=' ';
        for($n='0';$n<='9';$n++){
            $charAccepted=$charAccepted.$n;
        }
        for($c='a', $C='A';$c<'z';$c++,$C++){
            $charAccepted=$charAccepted.$c.$C;
        }
        $charAccepted=$charAccepted.'zZ-_';

        //Si lo que devuelve es el tamaño de la cadena, entonces todos los caracteres encontrados son válidos
        if(strspn($palabra,$charAccepted)==$longName){
            return true;
        }

        echo "<h3 class='text-danger'>Los caracteres permitidos son números, letras, guión alto y guión bajo.</h3>".PHP_EOL;
        return false;
    }

    ?>
    </body>
</html>