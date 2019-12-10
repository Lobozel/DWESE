<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
        $prueba = "Prueba 1 ff";

        $encontrado=false;

        for($i=0;$i<strlen($prueba) && !$encontrado;$i++){
            if(strspn($prueba[$i],'0123456789')!=0){
                $encontrado=true;
            }
        }

        if($encontrado){
            echo "Contiene algún número".PHP_EOL;
        }else{
            echo "No contiene ningún número".PHP_EOL;
        }

    ?>
    </body>
</html>