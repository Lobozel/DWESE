<!DOCTYPE html>

<?php
if(isset($_POST['btn_env'])){
    if(!isset($_COOKIE['personas'])){
        setcookie("personas[0]",$_POST['nombre'],time()+24*3600);
    }else{
        $num = count($_COOKIE['personas']);
        //importante poner el primer parametro con comillas dobles para que coga el valor de variables como $num
        setcookie("personas[$num]",$_POST['nombre'],time()+24*3600);
    }
    unset($_POST['btn_env']);
    header('location:librovisitas.php');
}
?>

<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <center>Mi sitio</center>
    <fieldset style='background-color: silver; width: 690px;'>
        <form name='re' method='POST' action='librovisitas.php' style='display:inline;'>
            <label for='nom'>Nombre</label>
            <input type='text' name='nombre' id='nom' placeholder='Escribe tu nombre' required />
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a href='reset.php' style='text-decoration:none'>
                <input type='button' value='Reset' style=' '>&nbsp;&nbsp;</a>
            <input type='submit' value='Firmar' name='btn_env'>
        </form>
    </fieldset>

    <?php
        if(isset($_COOKIE['personas'])){
            if(count($_COOKIE['personas'])>0){
                echo "<textarea cols='60' rows='20' disabled>".PHP_EOL;
                for ($i=0;$i<count($_COOKIE['personas']);$i++){
                    echo ($i + 1).".- ".$_COOKIE['personas'][$i]."\n".PHP_EOL;
                }
                echo "</textarea>".PHP_EOL;
            }
        }
    ?>
</body>

</html>