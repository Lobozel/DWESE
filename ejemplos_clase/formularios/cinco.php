<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style='background-color:silver'>
    <?php
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado enviar, procesaremos los datos

            if(isset($_POST['deportes'])){
                if(is_array($_POST['deportes'])){
                    $array=$_POST['deportes'];
                    echo "Has seleccionado ".count($array)." deportes:<br>".PHP_EOL;
                    foreach($array as $k=>$v){
                        echo "Deporte: $k=$v<br>".PHP_EOL;
                    }
                }
            } else{
                echo "No seleccionaste ninguno.";
            }

            if(isset($_POST['afi'])){
                $array=$_POST['afi'];
                echo "Has seleccionado ".count($array)." aficiones:<br>".PHP_EOL;
                foreach($array as $k=>$v){
                    echo "Afición: $k=$v<br>".PHP_EOL;
                }
            }else{
                echo "<br>No tienes Aficiones, tipo triste!!!!";
            }

            ?>
            <p class='text-center mt-5'>
            <a href='<?php echo $_SERVER['PHP_SELF'];?>' class='btn btn-primary'>Volver</a>
            </p>
            <?php
            
        }else{
            //Pinto el formulario
    ?>
        <div class='container mt-5'>
        <!--?php echo $_SERVER['PHP_SELF'];? coge el nombre de la página tenga el nombre que tenga -->
            <form name='name' action='<?php echo $_SERVER['PHP_SELF'];?>' method='POST'>
                <table align='center' cellpadding='5' cellspacing='5'>
                <tr align='center'>
                    <td colspan='4'>Elige tu Deporte/s Favorito/s</td>
                </tr>
                    <tr>
                    <td><input type='checkbox' name='deportes[]' value='Tenis'></td>
                    <td>Tenis</td>
                    <td><input type='checkbox' name='deportes[]' value='Futbol'></td>
                    <td>Futbol</td>
                    </tr>
                    <tr>
                    <td><input type='checkbox' name='deportes[]' value='PingPong'></td>
                    <td>PingPong</td>
                    <td><input type='checkbox' name='deportes[]' value='Esgrima'></td>
                    <td>Esgrima</td>
                    </tr>
                    <tr>
                    <td><input type='checkbox' name='deportes[]' value='Padle'></td>
                    <td>Padle</td>
                    <td><input type='checkbox' name='deportes[]' value='Surf'></td>
                    <td>Surf</td>
                    </tr>
                    <tr>
                    <td><input type='checkbox' name='deportes[]' value='Alpinismo'></td>
                    <td>Alpinismo</td>
                    <td><input type='checkbox' name='deportes[]' value='Karate'></td>
                    <td>Karate</td>
                    </tr>
                    <tr>
                    <td><input type='checkbox' name='deportes[]' value='Programar'></td>
                    <td>Programar</td>
                    <td><input type='checkbox' name='deportes[]' value='Atletismo'></td>
                    <td>Atletismo</td>
                    </tr>
                    <tr>
                        <td colspan='2'>Aficiones</td>
                        <td colspan='2'>
                            
                            <select name='afi[]' multiple>
                                <option>Lectura</option>
                                <option>Cine</option>
                                <option>Deportes</option>
                                <option>Programar</option>
                                <option>Desprogramar</option>
                                <option>Deshacer</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='4' align='center'>
                        <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-warning'>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php
        } //cierre del else que pinta el formulario
        ?>
    </body>
</html>