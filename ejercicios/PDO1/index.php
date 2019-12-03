<?php
session_start();

spl_autoload_register(function($clase){
    require "./class/".$clase.".php";
});
$conexion = new Conexion();
$conector = $conexion->getConector();
$producto = new Producto($conector);
$productos=$producto->read();
$fabricante = new Fabricante($conector);
$fabricantes=$fabricante->read();
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
    <div class="container">
        <h2>Tienda Online</h2>
        <ul class="nav nav-tabs">
            <?php
                if(!isset($_SESSION['tab']) || $_SESSION['tab']=='productos'){
                    ?><li class="active"><a data-toggle="tab" href="#productos">Productos</a></li>
            <li><a data-toggle="tab" href="#fabricantes">Fabricantes</a></li><?php
                }else{
                    ?><li><a data-toggle="tab" href="#productos">Productos</a></li>
            <li class="active"><a data-toggle="tab" href="#fabricantes">Fabricantes</a></li><?php
                }
            ?>

        </ul>

        <div class="tab-content">
            <?php
            if(!isset($_SESSION['tab']) || $_SESSION['tab']=='productos'){
                echo "<div id='productos' class='tab-pane fade in active'>";
                showMessage();
            }else{
                echo "<div id='productos' class='tab-pane fade'>";
            }
            $ruta="./tools/producto/"
            ?>
            <br>
            <div class="container mt-3 mb-3 text-center">
                <a href=<?php echo $ruta.'crear.php'; ?> class='btn btn-lg btn-success'>Nuevo Producto</a>
            </div>
            <br>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope='col' class='text-center'>Código</th>
                        <th scope='col' class='text-center'>Nombre</th>
                        <th scope='col' class='text-center'>Precio</th>
                        <th scope='col' class='text-center'>Fabricante</th>
                        <th scope='col' class='text-center'>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                foreach($productos as $prod){
                    $fabricante->setId($prod->codigo_fabricante);
                    $fabr=$fabricante->getFabricante();
                    echo "<tr style='text-align:center;'>
                    <th scope='row' class='text-center'>{$prod->codigo}</th>
                    <td>{$prod->nombre}</td>
                    <td>{$prod->precio}</td>
                    <td>{$fabr->nombre}</td>
                    <td>
                    <form name='as' action='".$ruta."borrar.php' method='POST' style='display:inline'>
                            <input type='hidden' name='id' value='{$prod->codigo}'>
                            <a href='".$ruta."editar.php?id={$prod->codigo}' class='btn btn-warning'>Editar</a>&nbsp;
                            <input type='submit' value='Borrar' class='btn btn-danger'>
                            </form>
                    </td>
                    </tr>";
            }
            ?>
                </tbody>
            </table>
        </div>
        <?php
            if(!isset($_SESSION['tab']) || $_SESSION['tab']=='productos'){
                echo "<div id='fabricantes' class='tab-pane fade'>";
            }else{
                echo "<div id='fabricantes' class='tab-pane fade in active'>";
                showMessage();
            }
        $ruta="./tools/fabricante/";
    ?>
        <br>
        <div class="container mt-3 mb-3 text-center">
            <a href=<?php echo $ruta.'crear.php'; ?> class='btn btn-lg btn-success'>Nuevo Fabricante</a>
        </div>
        <br>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope='col' class='text-center'>Código</th>
                    <th scope='col' class='text-center'>Nombre</th>
                    <th scope='col' class='text-center'>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($fabricantes as $fab){
                    echo "<tr style='text-align:center;'>
                    <th scope='row' class='text-center'>{$fab->codigo}</th>
                    <td>{$fab->nombre}</td>
                    <td>
                    <form name='as' action='".$ruta."borrar.php' method='POST' style='display:inline'>
                            <input type='hidden' name='id' value='{$fab->codigo}'>
                            <a href='".$ruta."editar.php?id={$fab->codigo}' class='btn btn-warning'>Editar</a>&nbsp;
                            <input type='submit' value='Borrar' class='btn btn-danger'>
                            </form>
                    </td>
                    </tr>";
            }
            ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    <?php
    function showMessage(){
if(isset($_SESSION['mensaje'])){
    echo "<div>".PHP_EOL;
    echo "<h4 class='text-center text-primary bg-light'>".$_SESSION['mensaje']."</h4>".PHP_EOL;
    echo "</div>".PHP_EOL;
    unset($_SESSION['mensaje']);
  }
  }
$conector=null;
?>
</body>

</html>