<?php
if(isset($_COOKIE['personas'])){
    for($i=0;$i<count($_COOKIE['personas']);$i++){
        setcookie("personas[$i]","",-1);
    }
}

header('Location:librovisitas.php');