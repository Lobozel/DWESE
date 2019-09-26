<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejemplo 1 PHP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <h1 class="text-center">HOLA MUNDO</h1>
        <!--CÓDIGO PHP-->
        <?php
            //.PHP_EOL significa FIN DE LÍNEA. Es igual que un \n
            echo "Hola PHPWORLD<br>" .PHP_EOL;
            echo "otra línea" .PHP_EOL;
            echo "<br> y otra más" .PHP_EOL;
            //" /"Entrecomillado/" " ---- ' /'Entrecomillado simple'/ '
            echo '<br> Una nueva "Linea"';
            //Variables
            $nombre="Miguel";
            $edad=23;
            $programador=true;
            //Comillas simples no reconocen el valor de una variable. Lo toma como literal
            echo "<br>Mi nombre es $nombre";
            echo '<br>Mi nombre es $nombre';
            echo "<br>\$nombre=$nombre";
            //Para concatear cadenas en PHP se utiliza '.'
            echo '<br>$nombre='.$nombre;
            echo "<br>Nombre=$nombre, edad=$edad";
            echo '<br>Nombre='.$nombre.', edad='.$edad.'<br>';
            echo $nombre .' '. $edad;
            echo "<hr>";

            echo <<<END
                Aqui escribo todo lo
                que quiera: por cierto tu nombre es $nombre
                <br>
                "hola", 'hola' "go'hola0"
                <table border=2>
                    <tr>
                        <td>celda1</td>
                        <td>celda2</td>                        
                    </tr>
                    <tr>
                        <td>celda3</td>
                        <td>celda4</td>                        
                    </tr>
                </table>
                END;
            //-----------------------------------------------------
            //Sentencias lógicas y bucles
            $valor=0;
            if($valor){
                echo "Valor debe ser true";
            }
            else{
                echo "Valor debe ser false";
            }
            echo "<br>";
            //AND OR && ||
            //pasar dato por get
            //link?num1='?'&num2='?'
            /*
            if(!isset($_GET['num1']) || !isset($_GET['num2'])){
                echo "<h3 class='text-danger'>No pasaste parametros</h3>";
            }else{                   
            $num1=(int)$_GET['num1'];
            $num2=(int)$_GET['num2'];
            if($num1<$num2){
                echo "$num1<$num2";
            }else if($num1>$num2){
                echo "$num1>$num2";
            }else{
                echo "$num1=$num2";
            }
        }
        */
        if(!isset($_GET['name'])){
            echo "<h3 class='text-danger'>Falta valor de Nombre.</h3>";
        }else{
            //El $_GET se debe concatenar incluso en comillas dobles
            echo "<h1 class='text-info'>Buenos días ".$_GET['name']."</h1>";
        }
        ?>
    </body>
</html>