<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 3</title>
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

            echo "<br><br>".PHP_EOL;

            if(isset($_POST['aficiones'])){
                    $array=$_POST['aficiones'];
                    echo "<h4 class='text-center'>Tienes las siguientes aficiones:</h4><br>".PHP_EOL;
                    echo "<p class='text-center'>";
                    //devuelve un array numerico así que puedo usar el for
                    for($i=0;$i<count($array);$i++){
                        echo $array[$i];
                        //formato de la salida
                        if($i==count($array)-1){
                            echo ".";
                        }else if($i==count($array)-2){
                            echo " y ";
                        }else{
                            echo ", ";
                        }
                    }
                    echo "</p>".PHP_EOL;
                    echo "<br>".PHP_EOL;
            } else{
                echo "<h3 class='text-danger text-center'>No seleccionaste ninguna afición.</h3>".PHP_EOL;
            }

            if(isset($_POST['sex'])){
                $genero=$_POST['sex'];
                echo "<h4 class='text-center'>Eres: $genero</h4><br>".PHP_EOL;
            } else{
                echo "<h3 class='text-danger text-center'>No seleccionaste tu genero.</h3>".PHP_EOL;
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
                        Indique su sexo y aficiones
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Sexo:</b>
                    </td>
                    <td>
                        <input type="radio" name="sex" value='hombre'> Hombre
                    </td>
                    <td>
                        <input type="radio" name="sex" value='mujer'> Mujer
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Aficiones:</b>
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='cine'> Cine
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='literatura'> Literatura
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='musica'> Música
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