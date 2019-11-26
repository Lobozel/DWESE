<?php
if(!isset($_POST['id'])){    
    header('Location:plataformas.php');
    die();
}
session_start();
if(!isset($_SESSION['nombre']) || $_SESSION['perfil']!=100){
    header('Location:portal.php');
    die();
}
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
