<?php
    session_start();

    spl_autoload_register(function($clase){
        require "./class/".$clase.".php";
    });

    $conexion=new Conexion();
    $llave=$conexion->getConector();


    function error($txt){
        $_SESSION['error']="Error al registrar.<br>".$txt;
        header('Location:index.php');
        die();
    }

        $nomUsu=strtolower(trim($_POST['usernameR']));
        $passUsu=trim($_POST['password_R']);
        $confpass=trim($_POST['confirm-password']);

        if($passUsu!=$confpass){
            error("Las contraseñas no coinciden.");
        }

        $pass1=hash('SHA256',$passUsu);
        $usuario=new Usuarios($llave);
        if($usuario->existeUser($nomUsu)){
            error("Ya existe un usuario con ese Nombre!!");
        }

        $usuario->setNombre($nomUsu);
        $usuario->setPass($pass1);
        $usuario->create();
        $_SESSION['mensaje']="Usuario creado correctamente.";
        header('Location:index.php');


    