<?php
    session_start();
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

<body style='background-color:#99CCFF'>
    <?php
        if(isset($_POST['sigin'])){

            $nomUsu = strtolower(trim($_POST['nombre']));
            $mail = trim($_POST['email']);
            $pass = trim($_POST['password']);
                      
            $file = fopen("usuarios/usuarios.txt", "a+");

            while(!feof($file)) {

            $contenido = explode('::',fgets($file));
                if($contenido[0]==$nomUsu){
                    $_SESSION['error']="Ese nombre esta cogido!!";
                    header('Location:sigin.php');
                    die();
                }
    
                if(trim($contenido[1])==$mail){
                    $_SESSION['error']="Ya existe una cuenta registrada con ese email.";
                    header('Location:sigin.php');
                    die();                    
                }
            }

            $pass = hash('sha256', $pass);

            $contenido = [$nomUsu,$mail,$pass];
            $linea = implode('::',$contenido);

            fwrite($file, $linea.PHP_EOL);
            
            fclose($file);

            header('Location:index.php');
            die();
        }else{

        
    ?>
    <div class="container mt-5">
        <form name='login' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
            <table border='3' bordercolor='white' cellspacing='5' align='center'>
                <tr>
                    <td>
                        <table cellspacing='5' cellpadding='5' align='center'>
                            <tr>
                                <td colspan='2' bgcolor='silver' align='center'>
                                    SigIn
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Nombre: </b><font color='red'>*</font>
                                </td>
                                <td>
                                    <input type='text' name='nombre' class='form-control'
                                        required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Correo electrónico: </b><font color='red'>*</font>
                                </td>
                                <td>
                                    <input type='email' name='email' class='form-control'
                                        required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Password: </b><font color='red'>*</font>
                                </td>
                                <td>
                                    <input type='password' name='password'
                                        class='form-control' required />
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2' align='center'>
                                    <input type='submit' value='Registrarse' class='btn btn-info' name='sigin'/>                                
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