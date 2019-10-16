<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

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
            echo "<p class='text-danger text-weight-bold'>$msj</p>";
            btnVolver();
            echo "</div>";
            die();
        }
    ?>

    <body style='background-color:bisque'>
<?php
    //funcion ver ficha
    function verFicha($n,$e,$f){

        ?>

        <div class='container mt-5 border border-dark text-center'>
            <table border='0' cellpadding='3' cellspacing='3'>
                <tr align='center'>
                    <td colspan='2' align='center'><b>FICHA</b></td>
                </tr>
                <tr>
                    <td colspan='2'><img src='<?php echo $f ?>' width='200px' height='200px' class='rounded-circle'></td>
                </tr>
                <tr>
                    <td><b>Nombre:</b></td>
                </tr>
                <tr>
                    <td><?php echo $n?></td>
                </tr>
                <tr>
                    <td><b>E-mail:</b></td>
                </tr>
                <tr>
                    <td><?php echo $e?></td>
                </tr>
            </table>
        </div>

        <?php

    }
?>

    <?php
if(isset($_POST['btnEnviar'])){
    //hemos pulsado enviar, procesaremos los datos

    if($_FILES['foto']['error']==2){
        mierror("El archivo excede el tamaño permitido!!!");
    }

    // var_dump($_FILES['foto']);
    // Paso 1 compruebo que efectivamente se ha subido el archivo (en principio en temp)
    if(is_uploaded_file($_FILES['foto']['tmp_name'])){

        $array=[
            'image/jpeg',
            'image/png',
            'image/tiff',
            'image/bmp',
            'image/gif',
            'image/x-icon',
            'image/svg+xml'
        ];
        if(!in_array($_FILES['foto']['type'],$array)){
            mierror("No es un archivo de imágen!!!!");
        }

        //El archivo se subio correctamente
        //Cogemos nombre y correo
        $n=$_POST['nombre'];
        $e=$_POST['email'];
        $nombreActual=$_FILES['foto']['name'];
        $id=time(); //marca de tiempo es un entero secuencial y único
        $nombre='./perfiles/'.$id.$nombreActual; //le meto el id delante como nombre de archivo
        move_uploaded_file($_FILES['foto']['tmp_name'], $nombre);

        verFicha($n,$e,$nombre);

    }else{
        mierror("No se subió ningún archivo");
    }
    btnVolver();

    
    
}else{
    //Pinto el formulario
    ?>
    <div class="container mt-5">
        <h3 class='text-center bg-primary'>Subir Archivos</h3>
        <!--ENCTYPE necesario para subida de ficheros-->
        <form name='sf' action='<?php echo $_SERVER['PHP_SELF']; ?>' ENCTYPE='multipart/form-data' method='POST'>
            <input type='text' name='nombre' placeholder='Tú Nombre' required /><br>
            <input type='email' name='email' placeholder='Tú Nombre' required /><br>
            <b>Tu Foto</b>&nbsp;<input type='file' name='foto'/>
            <p class='text-center mt-5'>
                <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-success'/>
            </p>
            <!--Si quiero imponer un tamaño máximo al fichero-->
            <input type='hidden' name='MAX_FILE_SIZE' value='2000'/>
        </form>
    </div>
<?php
        } //cierre del else que pinta el formulario
        ?>
    </body>
</html>