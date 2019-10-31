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
        if(isset($_POST['btnEnviar'])){
            $usuarios=[
                "admin"=> [
                    "tipo" => "administrador",
                    "pass" => "admin"
                ],
                "usuario"=>[
                    "tipo" => "usuario normal",
                    "pass" => "usuario"
                ],
                "miguel"=>[
                    "tipo" => "usuario avanzado",
                    "pass" => "miguel"
                ]
            ];
            $nomUsu=strtolower(trim($_POST['nombre']));
            $passUsu=trim($_POST['password']);

            if(isset($usuarios[$nomUsu]) && $usuarios[$nomUsu]["pass"]==$passUsu){
                
                //NO RECORDARA LA CONTRASEÑA SI NO RECUERDA AL USUARIO

                if(isset($_POST['rUser'])){
                    //Si se selecciona recordar Usuario
                    setcookie('user',$nomUsu,time()+365*24*60*60);
                    if(isset($_POST['rPass'])){
                        //Si, estando seleccionado recordar Usuario, se selecciona ademas recordar contraseña
                        setcookie('pass',$passUsu,time()+365*24*60*60);
                    }else{
                        //Si se ha recordado a un usuario y no se ha seleccionado recordar contraseña
                        if(isset($_COOKIE['pass'])){
                            //Si recuerda una contraseña, deja de recordarla
                            setcookie('pass',"",-1);
                        }
                    }
                }

                if(isset($_COOKIE['user']) && isset($_POST['rPass'])){
                    //Si se recuerda el usuario y se selecciona recordar contraseña
                    setcookie('pass',$passUsu,time()+365*24*60*60);
                }

                $_SESSION['user']=[
                    "name" => $nomUsu,
                    "tipe" => $usuarios[$nomUsu]["tipo"]
                ];
                header('Location:menu.php');
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
                                    <input type='checkbox' name='rUser'>Recordar Usuario
                                    <input type='checkbox' name='rPass'>Recordar Contraseña
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2' align='center'>
                                    <input type='submit' value='Login' class='btn btn-info' name='btnEnviar' />
                                    <input type='reset' value='Limpiar' class='btn btn-warning' />
                                    <a href='borrarCookies.php' style='text-decoration:none'>
                                        <input type='button' value='Borrar Cokkies' class='btn btn-danger'>&nbsp;&nbsp;</a>
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