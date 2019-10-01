<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Realiza una página PHP en la que introduzca dos palabras en dos variables y diga si riman o no.
    Si coinciden las tres últimas letras tiene que decir que riman. Si coinciden sólo las dos últimas
    tiene que decir que riman un poco y si no, que no riman. Recuerda que las palabras rimarán
    independientemente de que se escriban con mayúsculas o minúsculas.
    */

    $cadena1="patata";
    $cadena2="plata";

    if(strcasecmp(substr($cadena1,strlen($cadena1)-3),substr($cadena2,strlen($cadena2)-3))==0){
        echo "\"$cadena1\" y \"$cadena2\" riman.".PHP_EOL;
    }else if(strcasecmp(substr($cadena1,strlen($cadena1)-2),substr($cadena2,strlen($cadena2)-2))==0){
        echo "\"$cadena1\" y \"$cadena2\" riman un poco.".PHP_EOL;
    }else{
        echo "\"$cadena1\" y \"$cadena2\" NO riman.".PHP_EOL;
    }

    ?>
    </body>
</html>