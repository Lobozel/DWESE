<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Bucles PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php
            //bucles for while do while
            for($i=0;$i<10;$i++){
                echo $i ."<br>";
            }

            echo "<table align='center' border=2>".PHP_EOL;
            for($i=0;$i<8;$i++){
                echo "<tr align='center'>".PHP_EOL;
                for($j=0;$j<8;$j++){
                    $color;
                    if(($i+$j)%2==0){
                        $color='gray';
                    }else{
                        $color='white';
                    }
                    echo "<td bgcolor=$color align='center'>Celda [$i,$j]</td>".PHP_EOL;  
                }
                echo "</tr>".PHP_EOL;
            }
            echo "</table>";
        ?>
    </body>
</html>