<?php
if(isset($_COOKIE['visita'])){
    setcookie('visita','',-1);
}
header('Location:index.php');
die();