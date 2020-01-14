<?php
session_start();
require "../../src/Conexion.php";
    require "../../src/Usuarios.php";
require "../../vendor/autoload.php";
    use Src\{Conexion,Usuarios};
    $con=new Conexion();
    $llave = $con->getConector();

    function error($txt){
        if(gettype($txt)=='array'){
            $error="<ul>";
            foreach($txt as $e){
                $error.="<li>$e</li>";
            }
            $error.="</ul>";
            $_SESSION['error']=$error;
        }else{
            $_SESSION['error']=$txt;    
        }
        header('Location:crear.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body class='bg-danger'>
    <h1 class='shadow-lg p-3 bg-white rounded text-center text-info mt-3 text-weight-bold'>Crear Usuario</h1>

<?php
    if(isset($_POST['btnEnviar'])){
        //Procesamos
        $nom=trim($_POST['nom']);
        if(strlen($nom)==0){
            error("El nombre debe contener algún carácter!!!");
        }

        //verificación de Fichero con la Libreria Codegy/Upload
        $storage = new \Upload\Storage\FileSystem('../../resources/img');
        $file = new \Upload\File('imagen', $storage);

        //se le da un id único
        $fName = uniqid();
        $file->setName($fName);

        //validación del fichero
        $file->addValidations(array(
            //se valida el tipo de fichero
            new \Upload\Validation\Mimetype(
                array(
                'image/jpeg',
                'image/png',
                'image/tiff',
                'image/bmp',
                'image/gif',
                'image/x-icon',
                'image/svg+xml'
            )),
            //se valida el peso/tamaño del fichero
            //(se pueden usar las siguientes medidas: 'B', 'K', 'M' o 'G')
            new \Upload\Validation\Size('5M')
        ));

        try {
            // Subido con éxito!
            $file->upload();            

            //creamos el Usuario en la BD
            $usu = new Usuarios($llave, $nom,"../resources/img/".$file->getNameWithExtension());
            $usu->create();
            $_SESSION['mensaje']="Usuario dado de alta con éxito.";
            $llave=null;
            header('Location:../index.php');
            die();
        } catch (\Exception $e) {
            // Se han encontrado errores!
            $errors = $file->getErrors();
            error($errors);
        }


    }else{
?>

<div class="container mt-3">
<?php
    if(isset($_SESSION['error'])){
        echo "<div>".PHP_EOL;
        echo "<h4 class='text-center text-danger bg-warning'>".$_SESSION['error']."</h4>".PHP_EOL;
        echo "</div>".PHP_EOL;
        unset($_SESSION['error']);
    }
?>
<form name='a' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST' enctype='multipart/form-data'>
  <div class="form-group">
    <label for="nom"><b>Nombre:</b></label>
    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nombre Usuario">
  </div>
  <b>Imagen:</b>&nbsp;
    <input type="file" class="form-control" name="imagen">
  <button type="submit" name='btnEnviar' class="btn btn-success mt-3">Crear</button>&nbsp;
  <button type="reset" class="btn btn-warning mt-3">Limpiar</button>
  <a href='../index.php' class="btn btn-primary mt-3">Volver</a>
</form>
</div>
<?php } ?>
    </body>
</html>