<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Colisiones</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   -->
    <?php
    require './src/clases1/Usuarios.php';
    require './src/clases2/Usuarios.php';
    use Src\Clases1\Usuarios as Usuarios1;
    use Src\Clases2\Usuarios as Usuarios2;
    ?>
    </head>
    <body bgcolor="orange">
    <h3><center>Prueba de Namespace</center></h3>
    <?php
        $miusuario=new Usuarios1("Juan Andres");
        $usuario2=new Usuarios2();
        echo $miusuario->saludo();
        echo $usuario2->saludo();
        //------------------------
        $otrousuario = new Src\Clases1\Usuarios("Otro Más");
        echo $otrousuario->saludo();
    ?>
    </body>
</html>