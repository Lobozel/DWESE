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
            require('clases/Coches.php');
            //instanciamos un coche
            $miCoche=new Coches();
            $miCoche1=new Coches();
            echo "Hemos instanciado: ".Coches::$cont." coches<br>".PHP_EOL;
            // echo "Hemos instanciado: ".$miCoche::$cont." coches<br>".PHP_EOL;
            // echo "Hemos instanciado: ".$miCoche1::$cont." coches<br>".PHP_EOL;

            //Usando el Get
            echo "ID de micoche: ".$miCoche->getId()."<br>".PHP_EOL;
            echo "ID de micoche1: ".$miCoche1->getId()."<br>".PHP_EOL;
            //resto de atributos de coche
            //los publicos directamente
            $miCoche->matricula='1234-JJB';
            $miCoche->color='Rojo';
            //los privados deben ser con el Set
            $miCoche->setModelo('Ibiza');
            $miCoche->setMarca('Seat');

            //metodo mostrarCoche (toString en Java)
            $miCoche->mostrarCoche();
            //--------------------------------------
            $miCoche2=new Coches('1234-KKB');
            echo "El id de micoche2 es: ".$miCoche2->getId()."<br>".PHP_EOL;
            echo $miCoche2->matricula;
            echo "<br>".PHP_EOL;
            echo "Hay un total de: ".Coches::$cont." coches".PHP_EOL;
        ?>
    </div>
    </body>
</html>