<?php
session_start();
$_SESSION['tab']='productos';

spl_autoload_register(function($clase){
    require "../../class/".$clase.".php";
});

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

    <h1 class='shadow-lg p-3 bg-white rounded text-center text-info mt-3 text-weight-bold'>Dar de Alta a un Producto
    </h1>

    <?php
    if(isset($_POST['btnEnviar'])){
        //Procesamos
        $nom=trim($_POST['nom']);
        if(strlen($nom)==0){
            error("El nombre debe contener algún carácter!!!");
        }
        $precio = trim($_POST['price']);
        if(strlen($precio)==0){
            error("Es necesario indicar el precio del producto!!!");
        }

        $idFabr=$_POST['fab'];
        if($idFabr=='Choose...'){
            error("Debe escoger un fabricante para el producto!!!");
        }

        $producto = new Producto($conector, $nom, $precio, $idFabr);
        $producto->create();
        $_SESSION['mensaje']="Producto dado de alta correctamente";
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
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nombre Producto">
            </div>
            <div class="form-group">
                <label for="price">Number</label>
                <input class="form-control" type="number" value="" placeholder="Precio del Producto" id="price"
                    name='price' step='0.01'>
            </div>

            <div class="form-group">
                <label for="fab">Fabricante</label>
                <select class="form-control" id="fab" name="fab">
                    <option selected>Choose...</option>
                    <?php
                        $fabricante = new Fabricante($conector);
                        $fabricantes = $fabricante->read();
                        foreach($fabricantes as $fab){
                            echo "<option value='{$fab->codigo}'>{$fab->nombre}</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" name='btnEnviar' class="btn btn-success mt-3">Crear</button>&nbsp;
            <button type="reset" class="btn btn-primary mt-3">Limpiar</button>&nbsp;
            <a href="../../index.php" class='btn btn-info mt-3'>Volver</a>

        </form>
    </div>
    <?php } ?>

</body>

</html>