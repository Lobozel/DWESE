<?php
if(!isset($_POST['id'])){
    header('Location:modulos.php');
    die();
}
session_start();
//hacemos el autoload de las clases
spl_autoload_register(function($nombre){
    require "./class/".$nombre.".php";
});
$conexion = new Conexion();
$miLLave = $conexion->getConector();
$id=$_POST['id'];
$modulo=new Modulos($miLLave);
$modulo->setIdMod($id);
$modulo->delete();
$miLLave=null;
$_SESSION['mensaje']='Módulo borrado correctamente.';
header('Location:modulos.php');