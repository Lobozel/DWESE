<?php
session_start();
$_SESSION['tab']='fabricantes';

if(!isset($_POST['id'])){
    header('Location:../../index.php');
    die();
}

spl_autoload_register(function($clase){
    require "../../class/".$clase.".php";
});
function error($txt){
    $_SESSION['error']=$txt;    
    header('Location:borrar.php');
    die();
}

$conexion = new Conexion();
$conector=$conexion->getConector();
$id=$_POST['id'];

$fabricante=new Fabricante($conector);
$producto = new Producto($conector);
$productos= $producto->ofFabricante($id);
$fabricante->setId($id);

function delete(){
    global $fabricante;
    global $conector;

    $fabricante->delete();
    $conector=null;
    $_SESSION['mensaje']="fabricante borrado correctamente.";
    header('Location:../../index.php');
}

function deleteAll(){
    global $productos;
    global $conector;

    foreach($productos as $prod){
        $p=new Producto($conector,$prod->nombre,$prod->precio,$prod->codigo_fabricante);
        $p->setId($prod->codigo);
        $p->delete();
    }
    delete();
}

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

    <?php
            if(isset($_POST['confBorrar'])){
                deleteAll();
            }else{
                if(isset($_POST['borrarTodo'])){
                    ?>
                    <div class='text-center'>
                    <h3 class='text-danger'>¿Estás seguro? No podrás deshacer este cambio</h3>
                    <form name='a' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
                        <input type='hidden' name='id' value='<?php echo $_POST['id']; ?>'>
                        <button type="submit" name='confBorrar' class="btn btn-danger mt-3">Si</button>&nbsp;
                        <a href="../../index.php" class='btn btn-info mt-3'>Volver</a>  
                    </form>
                    </div>
                    <?php
                }else{
                    if(count($productos)==0){
                        delete();
                    }else{
                        ?>
                        <div class='text-center'>
                        <h3 class='text-danger'>Por seguridad, no se borrará el Fabricante mientras tenga productos asociados:</h3>
                        <ul>
                        <?php
                        foreach($productos as $prod){
                            echo "<li'><h4>{$prod->nombre}</h4></li>".PHP_EOL;
                        }
                        ?>
                        </ul>
                        <form name='a' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
                            <input type='hidden' name='id' value='<?php echo $_POST['id']; ?>'>
                            <button type="submit" name='borrarTodo' class="btn btn-danger mt-3">Borrar Todo</button>&nbsp;
                            <a href="../../index.php" class='btn btn-info mt-3'>Volver</a>  
                        </form>
                        </div>
                        <?php
                    }
                }
            }
            ?>
            
</body>

</html>