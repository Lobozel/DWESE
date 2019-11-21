<?php
    session_start();

    // function buscarUsuario($user, $pass){
    //     $file = fopen("usuarios/usuarios.txt",'r');

    //     while(!feof($file)) {

    //         $contenido = explode('::',fgets($file));
    //             if($contenido[0]==$user){
    //                 $password = hash('sha256',$pass);
    //                 if(trim($contenido[2])==trim($password)){
    //                     fclose($file);
    //                     return true;
    //                 }
    //             }
    //         }

    //     fclose($file);
    //     return false;
    // }



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
            $_SESSION['error']="El nombre de usuario o la contraseña son Incorrectos!!";
            header('Location:index.php');
        }

    