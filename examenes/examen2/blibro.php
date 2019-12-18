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
$conector = $conexion->getConector();
$libro = new Libros($conector);

$id=$_POST['id'];
$libro->setId($id);
$libro->delete();

$conector=null;

$_SESSION['mensaje']='Libro borrado con éxito';
header('Location:index.php');
die();