<?php
    session_start();

    if(isset($_COOKIE['user'])){
        $user=$_COOKIE['user'];
    }else{
        $user="";
    }

    if(isset($_COOKIE['pass'])){
        $pass=$_COOKIE['pass'];
    }else{
        $pass="";
    }

    function buscarUsuario($user, $pass){
        $file = fopen("usuarios/usuarios.txt",'r');

        while(!feof($file)) {

            $contenido = explode('::',fgets($file));
                if($contenido[0]==$user){
                    $password = hash('sha256',$pass);
                    if(trim($contenido[2])==trim($password)){
                        fclose($file);
                        return true;
                    }
                }
            }

        fclose($file);
        return false;
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body style='background-color:aqua'>
    <?php
        if(isset($_POST['login'])){

            $nomUsu=strtolower(trim($_POST['nombre']));
            $passUsu=trim($_POST['password']);

            if(buscarUsuario($nomUsu,$passUsu)){
                
                if(isset($_POST['recordar'])){
                    setcookie('user',$nomUsu,time()+365*24*60*60);
                    setcookie('pass',$passUsu,time()+365*24*60*60);
                }

                $_SESSION['user']=$nomUsu;

                header('Location:portal.php');
                die();
            }else{
                $_SESSION['error']="El nombre de usuario o la contraseña son Incorrectos!!";
                header('Location:index.php');
            }
        }else{
        
    ?>
    <div class="container mt-5">
        <form name='login' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
            <table border='3' bordercolor='red' cellspacing='5' align='center'>
                <tr>
                    <td>
                        <table cellspacing='5' cellpadding='5' align='center'>
                            <tr>
                                <td colspan='2' bgcolor='silver' align='center'>
                                    Login
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Nombre:</b>
                                </td>
                                <td>
                                    <input type='text' name='nombre' value='<?php echo $user ?>' class='form-control'
                                        required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Password:</b>
                                </td>
                                <td>
                                    <input type='password' name='password' value='<?php echo $pass ?>'
                                        class='form-control' required />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <input type='checkbox' name='recordar'>Recuerdame
                                    <a href='borrarCookies.php' style='text-decoration:none'>
                                        <input type='button' value='Olvidar Usuario' class='btn btn-danger'>&nbsp;&nbsp;</a>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2' align='center'>
                                    <input type='submit' value='Iniciar Sesión' class='btn btn-success' name='login' />
                                    <input type='reset' value='Limpiar' class='btn btn-warning' />
                                    <a href='sigin.php' style='text-decoration:none'>
                                        <input type='button' value='Registrarse' class='btn btn-info'>&nbsp;&nbsp;</a>                               
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </form>
        <?php
            if(isset($_SESSION['error'])){
        
                echo "<div class='container mt-5'>".PHP_EOL;
                echo "<h4 class='text-center text-danger bg-warning'>".$_SESSION['error']."</h4>".PHP_EOL;
                echo "</div>".PHP_EOL;
                unset($_SESSION['error']);
            }
        ?>
    </div>
    <?php } ?>
</body>

</html>