<?php
if(!isset($_POST['id'])){    
    header('Location:../index.php');
    die();
}
session_start();
require "../../src/Conexion.php";
    require "../../src/Usuarios.php";
require "../../vendor/autoload.php";
    use Src\{Conexion,Usuarios};
$con = new Conexion();
$llave = $con->getConector();
$id=$_POST['id'];
$usuario=new Usuarios($llave);
$usuario->setId($id);
//--Borro la foto del storage local
$usu=$usuario->getUsuario($id);
unlink("../".$usu->foto);
//--Borro el usuario de la BD
$usuario->delete();
$llave=null;
$_SESSION['mensaje']='Usuario borrado correctamente.';
header('Location:../index.php');
