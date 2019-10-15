<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style='background-color:bisque'>
    <?php
if(isset($_POST['btnEnviar'])){
    //hemos pulsado enviar, procesaremos los datos

    // var_dump($_FILES['foto']);
    // Paso 1 compruebo que efectivamente se ha subido el archivo (en principio en temp)
    if(is_uploaded_file($_FILES['foto']['tmp_name'])){
        //El archivo se subio correctamente
        $nombreActual=$_FILES['foto']['name'];
        $id=time(); //marca de tiempo es un entero secuencial y único
        $nombre=$id.$nombreActual; //le meto el id delante como nombre de archivo
        move_uploaded_file($_FILES['foto']['tmp_name'], $nombre);
    }else{
        echo "<br>Error, NO se subió el Archivo!!!!!!";
    }

    ?>
    <p class='text-center mt-5'>
    <a href='<?php echo $_SERVER['PHP_SELF'];?>' class='btn btn-primary'>Volver</a>
    </p>
    <?php
    
}else{
    //Pinto el formulario
    ?>
    <div class="container mt-5">
        <h3 class='text-center bg-primary'>Subir Archivos</h3>
        <!--ENCTYPE necesario para subida de ficheros-->
        <form name='sf' action='<?php echo $_SERVER['PHP_SELF']; ?>' ENCTYPE='multipart/form-data' method='POST'>
            <input type='text' name='nombre' placeholder='Tú Nombre' /><br>
            <b>Tu Foto</b>&nbsp;<input type='file' name='foto'/>
            <p class='text-center mt-5'>
                <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-success'/>
            </p>
            <!--Si quiero imponer un tamaño máximo al fichero-->
            <input type='hidden' name='MAX_FILE_SIZE' value='20000'/>
        </form>
    </div>
<?php
        } //cierre del else que pinta el formulario
        ?>
    </body>
</html>