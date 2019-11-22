<?php
    session_start();

    spl_autoload_register(function($clase){
        require "./class/".$clase.".php";
    });

    function error($txt){
        $_SESSION['error']=$txt;
        header('Location:index.php');
        die();
    }

        $nomUsu=strtolower(trim($_POST['username']));
        $passUsu=trim($_POST['password']);

        if($nomUsu=="usuario" && $passUsu=="usuario"){
            if(isset($_POST['remember'])){
                        setcookie('user',$nomUsu,time()+365*24*60*60);
                        setcookie('pass',$passUsu,time()+365*24*60*60);
                    }
            $_SESSION['user']=$nomUsu;

            echo "Has iniciado con éxito";
            
        }else{
            error("El nombre de usuario o la contraseña son Incorrectos!!");
        }

    