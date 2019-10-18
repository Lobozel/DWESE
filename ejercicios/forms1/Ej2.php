<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style type="text/css">
            body {
                background-color:silver
            }
            table {
                margin: 0 auto;
                padding: 0 auto;
            }
            #btns {
                float:none;
	            text-align:center;
            }
        </style>
    </head>
    <body>
    <?php
    /*
    Escriba un formulario de recogida de datos personales que conste de dos páginas.
• En la primera página se solicitan la edad y el peso.
• En la segunda página se muestran la edad y el peso indicados por el usuario o se informa de los
errores cometidos.
Notas:
• Cuando procesemos los datos se mostrará un aviso si la edad se deja vacía, si no se escribe un
número, si no se escribe un número entero positivo o si se escribe un número que no esté
comprendido entre 5 y 130.
• Se mostrará un aviso si el peso se deja vacía, si no se escribe un número o si se escribe un
número que no esté comprendido entre 10 y 150.
• La edad debe ser un número entero, pero el peso puede tener decimales
    */
    ?>
    
    <?php
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado enviar, procesaremos los datos

            echo "<br><br>".PHP_EOL;

            $edad=$_POST['edad'];

            if($edad==""){
                echo "<h2 class='text-danger text-center'>No has introducido tu edad.</h2>".PHP_EOL;
            }else{
                echo "<h2 class='text-center'>Edad: $edad</h2>".PHP_EOL;
            }

            $peso=$_POST['peso'];

            if($peso==""){
                echo "<h5 class='text-danger text-center'>No has introducido tu peso.</h5>".PHP_EOL;
            }else{
                echo "<h3 class='text-center'>Peso: $peso</h3>".PHP_EOL;
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
                Escriba su edad:
                </td>
                <td>
                <input type="number" name="edad" min="5" max="130" value='6'>
                </td>
                </tr>
                <tr>
                <td>
                Escriba su peso:
                </td>
                <td>
                <input type="number" name="peso" min="10" max="150" value='10' step=".05">
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