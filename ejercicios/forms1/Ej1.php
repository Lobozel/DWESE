<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio 1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
    body {
        background-color: silver
    }

    table {
        margin: 0 auto;
        padding: 0 auto;
    }

    #btns {
        float: none;
        text-align: center;
    }
    </style>
</head>

<body>
    <?php
    /*
    Escriba un formulario de recogida de datos personales que conste de dos páginas.
• En la primera página se solicitan el nombre y los apellidos.
• En la segunda página se muestran los dos textos introducidos por el usuario o se informa de los
errores cometidos.
Nota:
• Cuando procesemos los datos se mostrarán avisos si los campos nombre o apellidos se dejan
vacíos.
    */
    ?>

    <?php
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado enviar, procesaremos los datos

            echo "<br><br>".PHP_EOL;

            $nombre=$_POST['nombre'];

            if($nombre==""){
                echo "<h2 class='text-danger text-center'>No has introducido tu nombre.</h2>".PHP_EOL;
            }else{
                echo "<h3 class='text-center'>Nombre: $nombre</h3>".PHP_EOL;
            }

            $apellidos=$_POST['apellidos'];

            if($apellidos==""){
                echo "<h2 class='text-danger text-center'>No has introducido tus apellidos.</h2>".PHP_EOL;
            }else{
                echo "<h3 class='text-center'>Apellidos: $apellidos</h3>".PHP_EOL;
            }

            

            ?>
    <!--Botón Volver-->
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
            <table cellpadding='5' cellspacing='5'>
                <tr>
                    <td>
                        Escriba su nombre:
                    </td>
                    <td>
                        <input type="text" name="nombre">
                    </td>
                </tr>
                <tr>
                    <td>
                        Escriba sus apellidos:
                    </td>
                    <td>
                        <input type="text" name="apellidos">
                    </td>
                </tr>
                <tr>
                    <td id='btns' colspan='4'>
                        <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-warning'>
                        <input type='reset' value='Borrar' class='btn btn-primary'>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php } ?>
</body>

</html>