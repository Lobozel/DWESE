<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio 6</title>
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
    Hacer un formulario con al menos 10 controles checkbox y un <option> de multiselección, controlar
ambos utilizando arrays y mostrar la información enviada.
    */
    ?>

    <?php
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado enviar, procesaremos los datos

            echo "<br><br>".PHP_EOL;

            if(isset($_POST['lenguajes'])){
                $lenguajes=$_POST['lenguajes'];
                echo "<h4 class='text-center'>Manejas los siguientes lenguajes:</h4><br>".PHP_EOL;
                echo "<p class='text-center'>";
                //devuelve un array numerico así que puedo usar el for
                for($i=0;$i<count($lenguajes);$i++){
                    echo $lenguajes[$i];
                    //formato de la salida
                    if($i==count($lenguajes)-1){
                        echo ".";
                    }else if($i==count($lenguajes)-2){
                        echo " y ";
                    }else{
                        echo ", ";
                    }
                }
                echo "</p>".PHP_EOL;
                echo "<br>".PHP_EOL;
        } else{
            echo "<h3 class='text-danger text-center'>No seleccionaste ningun lenguaje.</h3>".PHP_EOL;
        }

        if(isset($_POST['fav'])){
            $fav=$_POST['fav'];
            echo "<h4 class='text-center'>Tu preferencia/s es:</h4><br>".PHP_EOL;
            echo "<p class='text-center'>";
            //devuelve un array numerico así que puedo usar el for
            for($i=0;$i<count($fav);$i++){
                echo $fav[$i];
                //formato de la salida
                if($i==count($fav)-1){
                    echo ".";
                }else if($i==count($fav)-2){
                    echo " y ";
                }else{
                    echo ", ";
                }
            }
            echo "</p>".PHP_EOL;
            echo "<br>".PHP_EOL;
    } else{
        echo "<h3 class='text-danger text-center'>No seleccionado tu preferencia.</h3>".PHP_EOL;
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
                    <td colspan='10'>
                        Selecciona que lenguajes manejas:
                    </td>
                </tr>
                <tr>
                    <?php
                    $lenguajes=["JAVA","PYTHON","JAVASCRIPT","C++","C#","PERL","SWIFT","R","RUST","OTRO/S"];

                    for($i=0;$i<count($lenguajes);$i++){
                        echo "<td>".PHP_EOL;
                        echo "<input type='checkbox' name='lenguajes[]' value='".$lenguajes[$i]."'>".$lenguajes[$i].PHP_EOL;
                        echo "</td>".PHP_EOL;
                    }
                ?>
                </tr>
                <tr>
                    <td colspan='10'>
                        Selecciona tu preferencia/s:
                    </td>
                </tr>
                <tr>
                    <td>
                        <select name="fav[]" multiple>
                            <option value="backend">Backend</option>
                            <option value="frontend">Frontend</option>
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