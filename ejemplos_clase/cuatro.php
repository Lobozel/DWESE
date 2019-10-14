<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <?php
            define("PI",3.141592654);
        ?>
    </head>
    <body>
    
        <div class='container, mt-4'>
            <h4 class='text-center'>Más ejemplos</h4>
        </div>
        <?php
            echo PI;
            $radio=45;
            echo "<br>";
            echo "El perimetro de una circunferencia de radio: $radio es ".PI*$radio;
            echo "<br>El valor de PI es ".PI;
            //Variables de variables
            $nombre="contador";
            $$nombre=0;
            echo "<br>$contador";
            //Comando muy util
            echo "<br>";
            var_dump(PI);
        ?>

    </body>
</html>