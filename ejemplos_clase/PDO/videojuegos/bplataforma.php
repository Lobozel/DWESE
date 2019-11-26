<?php
if(!isset($_POST['id'])){    
    header('Location:plataformas.php');
    die();
}
session_start();
spl_autoload_register(function($clase){
    require "./class/".$clase.".php";
});
$conexion = new Conexion();
$miLLave = $conexion->getConector();
$id=$_POST['id'];
$plataforma=new Plataformas($miLLave);
$plataforma->setId($id);
$plataforma->delete();
$miLLave=null;
$_SESSION['mensaje']='Plataforma borrada correctamente.';
header('Location:plataformas.php');
