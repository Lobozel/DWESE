<?php
session_start();

spl_autoload_register(function($clase){
    require ("./class/$clase.php");
});
$objeto = new Conexion();
$llave=$objeto->getConector();

function error($txt){
    $_SESSION['error']=$txt;
    header('Location:'.$_SERVER['PHP_EOL']);
    die();
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    </head>
    <body style='background-color:tomato'>
    <?php
        if(isset($_POST['btnEnviar'])){

            $marca=trim($_POST['marca']);
            $modelo=trim($_POST['modelo']);
            $color=trim($_POST['color']);
            $kmts=trim($_POST['kmts']);

            if(strlen($marca)==0 || strlen($modelo)==0 || strlen($color)==0){
                error("Marca, Modelo y Color son campos obligatorios.");
            }
            if(strlen($kmts)==0){
                $kmts=1500;
            }

            $coche=new Coches($llave,$marca,$modelo,$color,$kmts);
            $coche->create();
            $llave=null;

            $_SESSION['mensaje']='Coche creado con éxito';
            header('Location:index.php');
            die();
            
        }else{
    ?>
    <h3 class='text-center shadow-lg bg-white text-success mt-4'>Dar de Alta un Nuevo Vehículo</h3>
    <div class='container mt-3'>
        <?php
            if(isset($_SESSION['error'])){
                echo "<h2 class='text-center text-warning bg-danger'>".$_SESSION['error']."</h2>";
                unset($_SESSION['error']);
            }
        ?>
    
    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
        <div class="form-group">
    <label for="marca">Marca:</label>
    <input type="test" class="form-control" id="marca" name="marca" placeholder="Marca:">
  </div>
  <div class="form-group">
    <label for="modelo">Modelo:</label>
    <input type="test" class="form-control" id="modelo" name="modelo" placeholder="Modelo:">
  </div>
  <div class="form-group">
    <label for="color">Color:</label>
    <input type="test" class="form-control" id="color" name="color" placeholder="Color:">
  </div>
  <div class="form-group">
    <label for="kmts">Kilómetros</label>
    <input type="number" value=1500 class="form-control" id="kmts" name="kmts" placeholder="Kilómetros:">
  </div>

  <button type="submit" name='btnEnviar' class="btn btn-primary">Dar de Alta</button>
  <button type="reset" class="btn btn-info">Limpiar</button>
    </form>

</div>
        <?php } ?>
    </body>
</html>