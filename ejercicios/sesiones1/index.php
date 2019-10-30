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
                // $_SESSION['usuario']=$nomUsu;
                // $_SESSION['tipo']=$usuarios[$nomUsu]["tipo"];
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
        <form name='login' action='index.php' method='POST'>
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
                                    <input type='text' name='nombre' placeholder='Nombre' required />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <b>Password:</b>
                                </td>
                                <td>
                                    <input type='password' name='password' class='form-control' required />
                                </td>
                            </tr>
                            <tr>
                            <td></td>
                            <td>
                            <input type='checkbox' name='recordar'>Recuerdame
                            </td>
                            </tr>
                            <tr>
                                <td colspan='2' align='center'>
                                    <input type='submit' value='Login' class='btn btn-info' name='btnEnviar' />
                                    <input type='reset' value='Limpiar' class='btn btn-warning' />
                                    <input type='submit' value='Borrar Cokkies' class='btn btn-danger' name='deleteCookies'/>
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
                echo "<h2 class='text-center text-danger'>".$_SESSION['error']."</h2>".PHP_EOL;
                echo "</div>".PHP_EOL;
                unset($_SESSION['error']);
            }
        ?>
            </div>
        <?php } ?>
    </body>

</html>