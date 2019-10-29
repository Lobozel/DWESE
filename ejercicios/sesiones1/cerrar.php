<?php
session_start();
session_destroy(); //me cargo toda la variable de session
header('Location:index.php');

//si la página solo tiene php se recomienda no cerrar etiqueta