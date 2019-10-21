<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio 4</title>
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
• En la primera página se solicitan la dirección de correo electrónico y si se está interesado en
recibir correos.
• En la segunda página se muestran la respuesta del usuario o se informa de los errores
cometidos.
Notas:
• Para validar la primera dirección de correo electrónico, se puede utilizar la función filter_var()
• Cuando procesemos el formulariose mostrará un aviso si la segunda dirección de correo no
coincide con la primera.
• Se mostrará un aviso si no se indica si se quiere o no recibir correos.
    */
    ?>

    <?php
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado enviar, procesaremos los datos

            echo "<br><br>".PHP_EOL;

            $email1=$_POST['email'];
            $email2=$_POST['confirm'];

            if(filter_var($email1, FILTER_VALIDATE_EMAIL)==null || filter_var($email2, FILTER_VALIDATE_EMAIL)==null){
                echo "<h3 class='text-danger text-center'>Los correos no son válidos.</h3>".PHP_EOL; 
            }else{
                if(strcasecmp($email1,$email2)==0){
                    echo "<h4 class='text-center'>Tu correo es: ".strtolower($email1)."</h4>".PHP_EOL;
                }else{
                    echo "<h3 class='text-danger text-center'>Los correos introducidos no coinciden.</h3>".PHP_EOL; 
                }
            }

            if(isset($_POST['suscripcion'])){
                $opcion=$_POST['suscripcion'];
                if($opcion=='not_select'){
                    echo "<h3 class='text-danger text-center'>No has seleccionado si deseas suscribirte a nuestro boletín.</h3>".PHP_EOL; 
                }else{
                echo "<h4 class='text-center'>Has seleccionado que $opcion deseas unirte a nuestro boletín.</h4>".PHP_EOL;                    
                }
            }else{
                echo "<h4 class='text-center'>Has seleccionado que $opcion deseas unirte a nuestro boletín.</h4>".PHP_EOL;                    
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
                        Indique su dirección de correo
                    </td>
                    <td>
                        <input type='email' name='email' required />
                    </td>
                </tr>
                <tr>
                    <td>
                        Confirme su dirección de correo
                    </td>
                    <td>
                        <input type='email' name='confirm' required />
                    </td>
                </tr>
                <tr>
                    <td>
                        Indique si quiere recibir correos nuestros
                    </td>
                    <td>
                        <select name="suscripcion" required>
                            <option value="not_select">...</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
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