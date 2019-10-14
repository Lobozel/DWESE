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
    Pedimos un número por GET entre 25 y 50 (ámbos válidos)
    Si no hemos pasado el número o no esta entre esos límites mostrarmos ERROR
    Pintamos la tabla de multiplicar del número.
    */

    if(!isset($_GET['num'])){
        echo "<h3 class='text-danger'>No pasaste parametros</h3>".PHP_EOL;
    }else{                   
        $num=(int)$_GET['num'];

        if($num<25 || $num>50){
            echo "<h3 class='text-danger'>El número está fuera de los límites válidos.
            <br>Debe estar entre 25 y 50, extremos incluidos.</h3>".PHP_EOL;
        }else{

            echo "<br><table align='center' border=2>".PHP_EOL;

            for($i=1;$i<=10;$i++){
                $color;
                if($i%2!=0){
                    $color='gray';
                }else{
                    $color='white';
                }
                echo "<tr bgcolor=$color align='center'>".PHP_EOL;                                        
                echo "<td align='center'>$num</td>".PHP_EOL;
                echo "<td align='center'>X</td>".PHP_EOL;
                echo "<td align='center'>$i</td>".PHP_EOL;
                echo "<td align='center'>=</td>".PHP_EOL;
                echo "<td align='center'>".$num*$i."</td>".PHP_EOL;
                echo "</tr>".PHP_EOL;
            }

            echo "</table>";

        }

    }

    ?>
    </body>
</html>