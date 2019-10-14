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
            $cont=0;
            $num=1000;

            if(!isset($_GET['num'])){
                echo "<h3 class='text-danger'>No pasaste parametros</h3>";
            }else{                   
                $num=(int)$_GET['num'];

                for($i=7;$i<=$num;$i++){
                    if($i%7==0){
                        echo "$i, ";
                        $cont++;
                    }
                }

                echo "<br><br>Existen $cont múltiplos de 7 en los primeros $num números.";
            
            }          

        ?>
    </body>
</html>