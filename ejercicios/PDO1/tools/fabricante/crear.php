<?php
session_start();
spl_autoload_register(function($clase){
    require "../../class/".$clase.".php";
});
$_SESSION['tab']='fabricantes';
function error($txt){
    $_SESSION['error']=$txt;    
    header('Location:crear.php');
    die();
}

$conexion = new Conexion();
$conector=$conexion->getConector();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:MediumAquamarine;">
    
    <h1 class='shadow-lg p-3 bg-white rounded text-center text-info mt-3 text-weight-bold'>Dar de Alta a un Fabricante</h1>

<?php
    if(isset($_POST['btnEnviar'])){
        //Procesamos
        $nom=trim($_POST['nom']);
        if(strlen($nom)==0){
            error("El nombre debe contener algún carácter!!!");
        }

        $fabricante = new Fabricante($conector, $nom);
        $fabricante->create();
        $_SESSION['mensaje']="Fabricante dado de alta correctamente";
        $llave=null;
        header('Location:../../index.php');
        die();

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
<form name='a' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
  <div class="form-group">
    <label for="nom"><b>Nombre:</b></label>
    <input type="text" class="form-control" name="nom" id="nom" placeholder="Nombre Fabricante">
  </div>
  <button type="submit" name='btnEnviar' class="btn btn-success mt-3">Crear</button>&nbsp;
  <button type="reset" class="btn btn-primary mt-3">Limpiar</button>&nbsp;
  <a href="../../index.php" class='btn btn-info mt-3'>Volver</a>
  
</form>
</div>
<?php } ?>

    </body>
</html>