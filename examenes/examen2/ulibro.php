<?php
if(!isset($_GET['id'])){
    header('Location:index.php');
    die();
}
session_start();
spl_autoload_register(function($clase){
    require "./class/$clase.php";
});

$conexion = new Conexion();
$conector = $conexion->getConector();
$libro = new Libros($conector);
$autor = new Autores($conector);
$autores = $autor->read();

$id=$_GET['id'];
$libro->setId($id);
$miLibro=$libro->getLibro();

function error($txt){
    $_SESSION['error']="Introduzca correctamente los datos.<br>".$txt;
    header('Location:'.$_SERVER['PHP_SELF']."?id=$id");
    die();
    }

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
                if($miLibro->portada!="./img/portada.jpg"){
                    unlink($miLibro->portada);
                }
                move_uploaded_file($_FILES['portada']['tmp_name'],$portada);
            }else{
                error("El archivo no es de tipo imagen.");
            }
        }else{
            $portada=$miLibro->portada;
        }

        $libro->setTitulo($titulo);
        $libro->setDescripcion($descripcion);
        $libro->setPrecio($precio);
        $libro->setAutor($autor);
        $libro->setPortada($portada);

        $libro->update();

        $conector=null;
        $_SESSION['mensaje']='Libro editado con éxito';
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
<form name='a' action='<?php echo $_SERVER['PHP_SELF']."?id=$id"; ?>' method='POST' enctype='multipart/form-data' class='mt-3'>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Título" required name='titulo' value='<?php echo $miLibro->titulo; ?>' />
    </div>
    <div class="col">
      <select name='autor' class='form-control'>
      <?php
        foreach($autores as $a){
            if($a->id == $miLibro->autor){
                echo "<option selected value='{$a->id}'>{$a->apellidos}, {$a->nombre}</option>";    
            }else{
                echo "<option value='{$a->id}'>{$a->apellidos}, {$a->nombre}</option>";
            }
        }
      ?>
      </select>
    </div>
  </div>
  <div class="row mt-3">
    <div class="col">
        <div class='form-group'>
          <label for='descr' class='fuenten'>Descripción/Sinópsis</label>
          <textarea class='from-control' id='descr' rows='5' cols='80' required name='descr'><?php echo $miLibro->descripcion; ?></textarea>
        </div>
    </div>
    <div class="col">
       <div class='form-group'>
        <label for='precio' class='fuenten'>Precio (€)</label><br>
        <input type='number' class='from-control' id='precio' max='999.95' min='0' name ='precio' step='0.05' required value='<?php echo $miLibro->precio; ?>'>

        </div>
    </div>
  </div>
  <div class='row mt-3'>
  <div class='col'>
  <p class='fuenten'>Portada:
  <img src='<?php echo $miLibro->portada; ?>'>
  <?php
    if(isset($_GET['im'])){
        echo "<br><br><span class='fuenten0 font-weight-bold mr-4 mt-3'>Portada</span><input type='file' name='portada'>  </p>";    
    }else{
        echo "<a href='ulibro.php?id=$id&im=1' class='btn btn-info fuenten0'>Cambiar Portada</a>  </p>";
    }
  ?>
  <!-- <input type='file' name='portada'> -->
  </div>
  </div>
  <div class='row mt-4'>
  <input type='submit' value='Modificar' name='Enviar' class='btn btn-info mr-3 ml-3 fuenten'>
  <a href='index.php' class='btn btn-success pequenia fuenten'>Volver</a>
  </div>
</form>
</div>
<br>
    <?php } ?>
  </body>
</html>