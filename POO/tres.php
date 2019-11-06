<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style='background-color:cadetblue'>
    <div class="container mt-3">
        <?php
            require('class/Personas.php');
            $persona1 = new Personas('Juan Perez',34,'lucas@correo.es');
            $persona2=$persona1;
            $persona2 ->setNombre('Kiko Perez');
            // echo $persona1->getNombre().PHP_EOL;
            // echo "<br>".PHP_EOL;
            // echo $persona2->getNombre().PHP_EOL;
            //---------------
            $persona3= clone $persona1;
            $persona3->setNombre('Persona 3');
            echo "<br>".PHP_EOL;
            echo $persona1->getNombre().PHP_EOL;
            echo "<br>".PHP_EOL;
            echo $persona2->getNombre().PHP_EOL;
            echo "<br>".PHP_EOL;
            echo $persona3->getNombre().PHP_EOL;
            echo "<br>".PHP_EOL;
            echo "Se han intanciado ".Personas::$cant." veces Personas".PHP_EOL;
            echo "<br>".PHP_EOL;
            //------------------------------------
            echo "<hr>".PHP_EOL;
            echo $persona3->getNombre().PHP_EOL;
            echo "<br>".PHP_EOL;
            echo $persona3->edad.PHP_EOL;
            echo "<br>".PHP_EOL;
            echo $persona3->genero.PHP_EOL;
            echo "<br>".PHP_EOL;
            echo "El mail de persona3 es ".$persona3->mail;
            //-------------------------------------
            echo "<hr>".PHP_EOL;
            $persona3->edad=123;
            echo $persona3->edad.PHP_EOL;
            echo "<br>".PHP_EOL;
            echo $persona1;

        ?>
    </div>
    </body>
</html>