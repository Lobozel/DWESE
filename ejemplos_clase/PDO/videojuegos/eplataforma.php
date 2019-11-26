<?php
if(!isset($_GET['id'])){
    header('Location:plataformas.php');
    die();
}
session_start();
if(!isset($_SESSION['nombre']) || $_SESSION['perfil']!=100){
    header('Location:portal.php');
    die();
}
ob_start(); //empieza captura de salida

$nombre=$_SESSION['nombre'];

spl_autoload_register(function($clase){
    require "./class/".$clase.".php";
});

function error($txt){
    $_SESSION['error']=$txt;    
    header('Location:eplataforma.php'."?id={$_GET['id']}");
    die();
}

$conexion=new Conexion();
$llave=$conexion->getConector();
$plataforma=new Plataformas($llave);
$miPlataforma=$plataforma->getPlataforma($_GET['id']);

    function editarPlataforma($n,$i){
        global $plataforma;

        $plataforma->setId($_GET['id']);
        $plataforma->setNombre($n);
        $plataforma->setImagen($i);

        $plataforma->update();

        $llave->null;

        $_SESSION['mensaje']='Plataforma editada con éxito';
        header('Location:plataformas.php');
        die();
    }

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:coral">


 
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Explorar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="plataformas.php">Plataformas</a>
          <a class="dropdown-item" href="videojuegos.php">Videojuegos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" tabindex="-1" aria-disabled="true"><?php echo $nombre; ?></a>
      </li>    
      <li>
      <a class="navbar-brand btn btn-info" href="plataformas.php">Volver</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      </li>  
    </ul>
    <a class="navbar-brand btn btn-warning" href="cerrarsession.php">Cerrar Sessión</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
  </div>
</nav>   

<h1 class='shadow-lg p-3 bg-white rounded text-center text-info mt-3 text-weight-bold'>Editar Plataforma</h1>

<?php
if(isset($_SESSION['error'])){
    echo "<div>".PHP_EOL;
    echo "<h4 class='text-center text-danger bg-warning'>".$_SESSION['error']."</h4>".PHP_EOL;
    echo "</div>".PHP_EOL;
    unset($_SESSION['error']);
}
    if(isset($_POST['btnEnviar'])){
        //Procesamos
        $nom=trim($_POST['nom']);
        if(strlen($nom)==0){
            error("El nombre debe contener algún carácter!!!");
        }

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
            //miramos que el tipo mime del archivo subido sea el adecuado
            if(!in_array($_FILES['imagen']['type'],$array)){
                error("Los únicos tipos permitidos son de Imágen!!!");
            }
            //he subido un archivo y el tipo mime es el adecuado
            $id=time();
            $nombreFich="./recursos/img/$id-".$_FILES['imagen']['name'];
            //borrar imagen anterior, si no es la genérica
            if($miPlataforma->imagen!='recursos/img/consola.jpeg'){
                unlink($miPlataforma->imagen);
            }
            move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreFich);
        }else{
            $nombreFich=$miPlataforma->imagen;
        }
        editarPlataforma($nom,$nombreFich);
    }else{
?>

<script>
function mostrarInput() {
  elem = document.getElementById("inputImage");

  if(elem.style.display=='none'){
    elem.style.display='block';
  }else{
    elem.style.display='none';
  }

}
</script>

<div class="container mt-3">
<?php
    if(isset($_SESSION['error'])){
        echo "<div>".PHP_EOL;
        echo "<h4 class='text-center text-danger bg-warning'>".$_SESSION['error']."</h4>".PHP_EOL;
        echo "</div>".PHP_EOL;
        unset($_SESSION['error']);
    }
?>
<form name='a' action='<?php echo $_SERVER['PHP_SELF']."?id={$_GET['id']}"; ?>' method='POST' enctype='multipart/form-data'>
  <div class="form-group">
    <label for="nom"><b>Nombre:</b></label>
    <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $miPlataforma->nombre; ?>" placeholder="Nombre Plataforma">
  </div>
  <div class="form-group">     
    <img title="<?php echo $miPlataforma->nombre; ?>" src="<?php echo $miPlataforma->imagen; ?>" width='400px' height='400px'>
  </div>
  <button id="changeImage" onclick="mostrarInput()" type="button" class="btn btn-warning">Cambiar Imágen</button>  
  <div id="inputImage" style="display:none;" class="form-group">
  <b>Imagen:</b>&nbsp;
    <input type="file" class="form-control" name="imagen">
  </div>  
    <div class="form-group mt-3 mb-3">
    <button type="submit" name='btnEnviar' class="btn btn-success">Conservar Cambios</button>&nbsp;
  <button type="reset" class="btn btn-warning">Eliminar Cambios</button>  
    </div>
  
</form>
</div>
<?php } ?>
</body>
</html>