<?php
session_start();
if(!(isset($_POST['token']) && isset($_SESSION['token'])) || $_POST['token']!=$_SESSION['token']){
    die("ATAQUE CSRF DETECTADO");
}
session_destroy();
header('Location:index.php');
die();