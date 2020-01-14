<?php
if(!isset($_GET['id'])){
    header('Location:../index.php');
    die();
}
session_start();
require "../../src/Conexion.php";
    require "../../src/Usuarios.php";
    use Src\Conexion;
    use Src\Usuarios;
    $con=new Conexion();
    $llave = $con->getConector();
    $usu=new Usuarios($llave);
    $miUsuario=$usu->getUsuario($_GET['id']);
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
    <h1 class='shadow-lg p-3 bg-white rounded text-center text-info mt-3 text-weight-bold'>Editar Usuario</h1>

<?php
    if(isset($_POST['btnEnviar'])){
        //Procesamos
        

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
    <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $miUsuario->nombre; ?>">
  </div>
  <b>Imagen:</b>&nbsp;
  <br>
  <img style='height:50px' src="<?php echo "../".$miUsuario->foto; ?>" title="<?php echo $miUsuario->nombre; ?>">
    <input type="file" class="form-control" name="imagen">
  <button type="submit" name='btnEnviar' class="btn btn-success mt-3">Editar</button>&nbsp;
  <button type="reset" class="btn btn-warning mt-3">Limpiar</button>
  <a href='../index.php' class="btn btn-primary mt-3">Volver</a>
</form>
</div>
<?php } ?>
    </body>
</html>