<?php
session_start();
spl_autoload_register(function($clase){
    require "./class/$clase.php";
});

function error($txt){
$_SESSION['error']="Introduzca correctamente los datos.<br>".$txt;
header('Location:'.$_SERVER['PHP_SELF']);
die();
}

$conexion = new Conexion();
$conector = $conexion->getConector();
$autor = new Autores($conector);
$autores = $autor->read();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet"  type="text/css" href="./styles/uno.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>Libreria</title>
</head>
<body class="gra">
<h3 class='text-center mt-3 fuenteg'>Librería Al-Ándalus</h3>
<?php
    if(isset($_POST['Enviar'])){
        //Procesamos el formulario
        $titulo = trim($_POST['titulo']);
        $autor = $_POST['autor'];
        $descripcion = trim($_POST['descr']);
        $precio = $_POST['precio'];

        if(strlen($titulo)==0 || strlen($descripcion)==0){
            error("Titulo y descripción no pueden ser cadenas vacías.");
        }
        // $portada
        if(is_uploaded_file($_FILES['portada']['tmp_name'])){
            $array=[
                'image/jpeg',
                'image/png',
                'image/tiff',
                'image/bmp',
                'image/gif',
                'image/x-icon',
                'image/svg+xml'
            ];
            if(in_array($_FILES['portada']['type'],$array)){
                $id=time();
                $portada ="./img/$id-".$_FILES['portada']['name'];
                move_uploaded_file($_FILES['portada']['tmp_name'],$portada);
            }else{
                error("El archivo no es de tipo imagen.");
            }
        }else{
            $portada="./img/portada.jpg";
        }

        $libro = new Libros($conector,$titulo,$descripcion,$precio,$autor,$portada);
        $libro->create();
        $conector=null;
        $_SESSION['mensaje']='Libro creado con éxito';
        header('Location:index.php');
        die();

    }else{
        
?>
<div class="container mt-3">
<?php
    if(isset($_SESSION['error'])){
        echo "<h2 class='text-danger bg-dark'>".$_SESSION['error']."</h2>";
        unset($_SESSION['error']);
    }
?>
<form name='a' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST' enctype='multipart/form-data' class='mt-3'>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Título" required name='titulo' />
    </div>
    <div class="col">
      <select name='autor' class='form-control'>
      <?php
        foreach($autores as $a){
            echo "<option value='{$a->id}'>{$a->apellidos}, {$a->nombre}</option>";
        }
      ?>
      </select>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
        <div class='form-group'>
          <label for='descr' class='fuenten'>Descripción/Sinópsis</label>
          <textarea class='from-control' id='descr' rows='5' cols='80' required name='descr'>
          </textarea>
        </div>
    </div>
    <div class="col">
       <div class='form-group'>
        <label for='precio' class='fuenten'>Precio (€)</label><br>
        <input type='number' class='from-control' id='precio' max='999.95' min='0' name ='precio' step='0.05' required>

        </div>
    </div>
  </div>
  <div class='row mt-3'>
  <div class='col'>
  <p class='fuenten'>Portada: </p>
  <input type='file' name='portada'>
  </div>
  </div>
  <div class='row mt-4'>
  <input type='submit' value='Crear' name='Enviar' class='btn btn-info mr-3 ml-3 fuenten'>
  <input type='reset' value='Limpiar' class='btn btn-primary mr-3 fuenten'>
  <a href='index.php' class='btn btn-success pequenia fuenten'>Volver</a>
  </div>
</form>
</div>
    <?php } ?>
  </body>
</html>