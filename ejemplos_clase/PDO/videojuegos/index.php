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
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/inicio.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>



    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Iniciar Sesión</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Registrarse</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="login.php" method="POST" role="form"
                                    style="display: block;">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <img src="icons/user.png">
                                            </div>
                                            <input type="text" name="username" id="username" tabindex="1"
                                                class="form-control" placeholder="Usuario" value="<?php echo $user; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <img src="icons/key.png">
                                            </div>
                                            <input type="password" name="password" id="password" tabindex="2"
                                                class="form-control form-control-lg" placeholder="Contraseña"
                                                value="<?php echo $pass; ?>">
                                            <div class="input-group-addon">
                                                <button id="eye" style="height: 30px;" class="btn btn-sm"
                                                    type="button"><img id="eye_icon" src="icons/eye.png"></button>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Recuerdame</label>
                                        &nbsp;&nbsp;&nbsp;<a href="borrarCookies.php" type="button" class="btn btn-warning btn-sm" style="color: black;">Olvidar Usuario</a>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6
                                                    col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4"
                                                    class="form-control btn
                                                        btn-login" value="Iniciar Sesión">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="text-center">
                                                    <a href="https://phpoll.com/recover" tabindex="5"
                                                        class="forgot-password">¿Has
                                                        olvidado la
                                                        contraseña?</a>
                                                </div>                                                
                                            </div>                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <?php
                                            if(isset($_SESSION['error'])){
                                                echo "<div>".PHP_EOL;
                                                echo "<h4 class='text-center text-danger bg-warning'>".$_SESSION['error']."</h4>".PHP_EOL;
                                                echo "</div>".PHP_EOL;
                                                unset($_SESSION['error']);
                                            }
                                        ?>
                                    </div>
                                </form>
                                <form id="register-form" action="sigin.php" method="post" role="form"
                                    style="display: none;">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <img src="icons/user.png">
                                            </div>
                                            <input type="text" name="usernameR" id="usernameR" tabindex="1"
                                                class="form-control" placeholder="Usuario" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <img src="icons/email.png">
                                            </div>
                                            <input type="email" name="email" id="email" tabindex="1"
                                                class="form-control" placeholder="Correo Electrónico" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <img src="icons/key.png">
                                            </div>
                                            <input type="password" name="password_R" id="password_R" tabindex="2"
                                                class="form-control" placeholder="Contraseña">
                                            <div class="input-group-addon">
                                                <button id="eye_R" style="height: 30px;" class="btn btn-sm"
                                                    type="button"><img id="eye_icon_R" src="icons/eye.png"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <img src="icons/key.png">
                                            </div>
                                            <input type="password" name="confirm-password" id="confirm-password"
                                                tabindex="2" class="form-control" placeholder="Confirmar Contraseña">
                                            <div class="input-group-addon">
                                                <button id="confirm-eye" style="height: 30px;" class="btn btn-sm"
                                                    type="button"><img id="confirm-eye_icon"
                                                        src="icons/eye.png"></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6
                                                    col-sm-offset-3">
                                                <input type="submit" name="register-submit" id="register-submit"
                                                    tabindex="4" class="form-control btn
                                                        btn-register" value="Registrarse
                                                        Ahora">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>