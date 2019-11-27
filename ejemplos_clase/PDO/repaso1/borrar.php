<?php
if(!isset($_POST['id'])){
    header('Location:index.php');
    die();
}
session_start();
spl_autoload_register(function($clase){
    require "./class/$clase.php";
});
$conexion = new Conexion();
$llave = $conexion->getConector();
$id=$_POST['id'];
$coche = new Coches($llave);
$coche->setId($id);
$coche->delete();
$llave=null;
$_SESSION['mensaje']="Coche borrado con éxito";
header('Location:index.php');
die();
