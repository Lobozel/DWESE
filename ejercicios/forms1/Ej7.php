<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style='background-color:silver'>
    <?php
    /*
    Hacer un formulario con dos inputs de tipo file, uno para subir un archivo pdf de un tamaño máximo
de 5Mb, mostraremos el error si el tipo mime no es pdf o el tamaño excede lo permitido. El archivo lo
guardaremos un una carpeta “documentos” dentro del raíz de nuestro sitio de publicación. Ojo con los
permisos de nuestra carpeta. El otro para subir una imágen del mismo tamaño máximo, la imagen la
guardaremos con un nombre único en la carpeta imagen, esta imagen la mostraremos en la página
donde procesemos el formulario.
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