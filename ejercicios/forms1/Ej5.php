<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio 5</title>
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
• En la primera página se solicitan los datos.
• Cuando procesemos los datos se mostrará toda la información introducida por el usuario o se
informa de los errores cometidos.
    */
    ?>

    <?php
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado enviar, procesaremos los datos

            echo "<br><br>".PHP_EOL;

            $nombre=$_POST['nombre'];

            if($nombre==""){
                echo "<h3 class='text-danger text-center'>No has introducido tu nombre.</h3>".PHP_EOL;
            }else{
                echo "<h4 class='text-center'>Nombre: $nombre</h4>".PHP_EOL;
            }

            $apellidos=$_POST['apellidos'];

            if($apellidos==""){
                echo "<h3 class='text-danger text-center'>No has introducido tus apellidos.</h3>".PHP_EOL;
            }else{
                echo "<h4 class='text-center'>Apellidos: $apellidos</h4>".PHP_EOL;
            }

            $edad=$_POST['edad'];

            if($edad=='not_select'){
                echo "<h3 class='text-danger text-center'>No has introducido tu edad.</h3>".PHP_EOL;
            }else{
                echo "<h4 class='text-center'>Edad: $edad</h4>".PHP_EOL;
            }

            $peso=$_POST['peso'];

            if($peso==""){
                echo "<h3 class='text-danger text-center'>No has introducido tu peso.</h3>".PHP_EOL;
            }else{
                echo "<h4 class='text-center'>Peso: $peso</h4>".PHP_EOL;
            }

            if(isset($_POST['sex'])){
                $genero=$_POST['sex'];
                echo "<h4 class='text-center'>Eres: $genero</h4><br>".PHP_EOL;
            } else{
                echo "<h3 class='text-danger text-center'>No seleccionaste tu genero.</h3>".PHP_EOL;
            }

            if(isset($_POST['estado_civil'])){
                $estadoCivil=$_POST['estado_civil'];
                echo "<h4 class='text-center'>Tu estado civil es: $estadoCivil</h4><br>".PHP_EOL;
            } else{
                echo "<h3 class='text-danger text-center'>No seleccionaste tu estado civil.</h3>".PHP_EOL;
            }

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
                        Escriba los datos siguientes:
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Nombre:</b>
                    </td>
                    <td colspan="2">
                        <b>Apellidos:</b>
                    </td>
                    <td colspan="3">
                        <b>Edad:</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type='text' name='nombre'>
                    </td>
                    <td colspan="2">
                        <input type='text' name='apellidos'>
                    </td>
                    <td colspan="3">
                        <select name="edad" required>
                            <option value="not_select">...</option>
                            <?php
                            for($i=5;$i<=130;$i++){
                                echo "<option value='$i'>$i</option>".PHP_EOL;
                            }
                        ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Peso:</b>
                    </td>
                    <td colspan="2">
                        <b>Sexo:</b>
                    </td>
                    <td colspan="3">
                        <b>Estado Civil:</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="number" name="peso" min="10" max="150" value='' step=".05">kg
                    </td>
                    <td>
                        <input type="radio" name="sex" value='hombre'> Hombre
                    </td>
                    <td>
                        <input type="radio" name="sex" value='mujer'> Mujer
                    </td>
                    <td>
                        <input type="radio" name="estado_civil" value='soltero'> Soltero
                    </td>
                    <td>
                        <input type="radio" name="estado_civil" value='casado'> Casado
                    </td>
                    <td>
                        <input type="radio" name="estado_civil" value='otro'> Otro
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
                        <input type="checkbox" name="aficiones[]" value='tebeos'> Tebeos
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='deporte'> Deporte
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='música'> Música
                    </td>
                    <td>
                        <input type="checkbox" name="aficiones[]" value='televisión'> Televisión
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