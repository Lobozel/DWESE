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
                </table>
            </form>
        </div>
        <?php
        }
    ?>
    </body>
</html>