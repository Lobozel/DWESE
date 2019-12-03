<?php
session_start();
$_SESSION['tab']='productos';

if(!isset($_POST['id'])){
    header('Location:../../index.php');
    die();
}

spl_autoload_register(function($clase){
    require "../../class/".$clase.".php";
});

$conexion = new Conexion();
$conector=$conexion->getConector();
$id=$_POST['id'];
$producto=new Producto($conector);
$producto->setId($id);
$producto->delete();
$conector=null;
$_SESSION['mensaje']="Producto borrado correctamente.";
header('Location:../../index.php');

