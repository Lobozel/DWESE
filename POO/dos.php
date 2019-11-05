<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style='background-color:bisque'>
    <div class="container mt-3">
        <?php
            require('clases/Personas.php');
            $persona1=new Personas();
            $persona2=new Personas('Pedro Lopez');
            echo "Hay un total de ".$persona1->getCantidad()." personas".PHP_EOL;
            echo "<br>".PHP_EOL;
            echo "El nombre de persona2 es: ".$persona2->getNombre().PHP_EOL;
            echo "<br>".PHP_EOL;
            $persona2->setMail();
            echo "El mail de persona2 es: ".$persona2->getMail().PHP_EOL;

            $persona2->nick="Lobozel";
            $persona2->setEdad(20);

            $persona2->mostrarPersona();
        ?>
    </div>
    </body>
</html>