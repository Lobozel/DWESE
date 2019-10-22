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
    Hacer un formulario con dos inputs de tipo file, uno para subir un archivo pdf de un tamaño máximo
de 5Mb, mostraremos el error si el tipo mime no es pdf o el tamaño excede lo permitido. El archivo lo
guardaremos un una carpeta “documentos” dentro del raíz de nuestro sitio de publicación. Ojo con los
permisos de nuestra carpeta. El otro para subir una imágen del mismo tamaño máximo, la imagen la
guardaremos con un nombre único en la carpeta imagen, esta imagen la mostraremos en la página
donde procesemos el formulario.
    */
    ?>

    <?php

        function btnVolver(){
            ?>
    <p class='text-center mt-5'>
        <a href='<?php echo $_SERVER['PHP_SELF'];?>' class='btn btn-primary'>Volver</a>
    </p>
    <?php
        }

        function mierror($msj){
            echo "<div class='cointainer text-center mt-5'>";
            echo "<h3 class='text-danger text-weight-bold'>$msj</h3>";
            echo "</div>";
        }
    ?>

    <?php
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado enviar, procesaremos los datos

            echo "<br><br>".PHP_EOL;

            if($_FILES['pdf']['error']==2){
                mierror("El pdf excede el tamaño permitido!!!");
            }else{
                if(is_uploaded_file($_FILES['pdf']['tmp_name'])){

                    if(!in_array($_FILES['pdf']['type'],['application/pdf'])){
                        mierror("No es un archivo de pdf!!!!");
                    }else{
                        echo "<h2 class='text-center'>Se ha subido el pdf</h2>".PHP_EOL;
                        $nombreActual=$_FILES['pdf']['name'];
                        $id=time();
                        $nombre='./documentos/'.$id.$nombreActual;
                        move_uploaded_file($_FILES['pdf']['tmp_name'], $nombre);
                    }
                }else{
                    mierror("No se subió el archivo PDF");
                }
            }

        echo "<br>";

        if($_FILES['imagen']['error']==2){
            mierror("La imagen excede el tamaño permitido!!!");            
        }else{
            if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
            
                $array=[
                    'image/jpeg',
                    'image/png',
                    'image/tiff',
                    'image/bmp',
                    'image/gif',
                    'image/x-icon',
                    'image/svg+xml'
                ];
                if(!in_array($_FILES['imagen']['type'],$array)){
                    mierror("No es un archivo de imágen!!!!");
                }else{
                    echo "<h2 class='text-center'>Se ha subido la imagen</h2>".PHP_EOL;
                    $nombreActual=$_FILES['imagen']['name'];
                    $id=time();
                    $nombre='./imagen/'.$id.$nombreActual;
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $nombre);
    
                    echo "<p class='text-center'><img src='$nombre' width='200px' height='200px'></p>".PHP_EOL;
                }
            }else{
                mierror("No se subió la foto");
            }
        }

            btnVolver();
            
        }else{
            //Pinto el formulario
    ?>

    <div class='container mt-5'>
        <!--?php echo $_SERVER['PHP_SELF'];? coge el nombre de la página tenga el nombre que tenga -->
        <form name='name' action='<?php echo $_SERVER['PHP_SELF'];?>' ENCTYPE='multipart/form-data' method='POST'>
            <table cellpadding='5' cellspacing='5'>
                <tr>
                    <td>
                    <input type='hidden' name='MAX_FILE_SIZE' value='5242880' /> <!--5242880 son 5MB-->
                        <b>PDF:</b>&nbsp;<input type='file' name='pdf' />
                    </td>
                </tr>
                <tr>
                    <td>
                    <input type='hidden' name='MAX_FILE_SIZE' value='5242880' />
                        <b>Imagen:</b>&nbsp;<input type='file' name='imagen' />
                    </td>
                </tr>
                <tr>
                    <td id='btns' colspan='4'>
                        <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-success'>

                        <input type='reset' value='Borrar' class='btn btn-primary'>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php } ?>
</body>

</html>