<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style='background-color:silver'>
    <?php
    /*
    Escriba un formulario de recogida de datos personales que conste de dos páginas.
• En la primera página se solicitan el sexo y las aficiones.
• En la segunda página se muestran el sexo y las aficiones indicados por el usuario o se informa
de los errores cometidos.
Notas:
• Cuando se procese el formulario se mostrará un aviso si no se selecciona uno de los sexos.
• Se mostrará un aviso si en los controles se reciben valores no vacíos distintos de los que
establece el formulario.
• Si no se indica ninguna afición, el programa debe indicarlo.
    */
    ?>
    
    <?php
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado enviar, procesaremos los datos

            

            

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
                <table align='center' cellpadding='5' cellspacing='5'>
                <tr>
                </tr>
                    <tr>
                        <td colspan='4' align='center'>
                        <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-warning'>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <?php } ?>
    </body>
</html>