<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Realiza una página PHP que permita chequear si en una caja de texto se introduce una dirección
    de correo válida. Una dirección de correo válida debe tener presentes los caracteres ‘@’ y ‘.’ Si
    la dirección es válida escribe por un lado el nombre de usuario y por otro el dominio de dicha
    dirección.
    */
    echo "<form action='Ej2.php' method='post' style='margin-top:25px;margin-right:auto;margin-left:auto;text-align:center;'>".PHP_EOL;
    echo "<input name='correo' type='text'></input>".PHP_EOL;
    echo "<input type ='submit' value='Validar' style='margin-left:25px;'></input>".PHP_EOL;
    echo "</form>".PHP_EOL;

    if(isset($_POST["correo"])) {
        $mail = $_POST["correo"];
        
        echo "\"$mail\"".PHP_EOL;
        echo "<br>".PHP_EOL;
        
        if(validarEmail($mail)){
            echo "El correo introducido es válido.".PHP_EOL;
        }else{
            echo "El correo introducido NO es válido.".PHP_EOL;
        }
    }

    function validarEmail($email){
        $position=strrpos($email, '@');
        if($position!=-1){
            $position=strrpos($email,'.');
            if($position!=-1){
                $dominio=substr($email,$position+1);
                if($dominio=="com" || $dominio=="es" || $dominio=="net"){
                    return true;
                }
            }
        }
        return false;
    }
    ?>
    </body>
</html>