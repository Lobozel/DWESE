<?php
if(isset($_COOKIE['user'])){
    setcookie("user","",-1);
}
if(isset($_COOKIE['pass'])){
    setcookie("pass","",-1);
}

header('Location:index.php');