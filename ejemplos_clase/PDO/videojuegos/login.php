<?php
    session_start();

    spl_autoload_register(function($clase){
        require "./class/".$clase.".php";
    });

    $conexion=new Conexion();
    $llave=$conexion->getConector();


    function error($txt){
        $_SESSION['error']=$txt;
        header('Location:index.php');
        die();
    }

        $nomUsu=strtolower(trim($_POST['username']));
        $passUsu=trim($_POST['password']);

        $pass1=hash('SHA256',$passUsu);
        $usuario=new Usuarios($llave,$nomUsu,$pass1);
        if($usuario->isOk()!=-1){

            if(isset($_POST['remember'])){
                setcookie('user',$nomUsu,time()+365*24*60*60);
                setcookie('pass',$passUsu,time()+365*24*60*60);
            }

            $_SESSION['nombre']=$nomUsu;
            $_SESSION['perfil']=$usuario->isOk();

            header('Location:portal.php');
            die();

        }else{
            error("El nombre de usuario o la contraseña son Incorrectos!!");
        }

    //Lobozel -> lobo