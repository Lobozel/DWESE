<!DOCTYPE html>
<?php
    session_start();
    //hacemos el autoload de las clases
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });
    $conexion = new Conexion();
    $miLLave = $conexion->getConector();
    $modulo = new Modulos($miLLave);
    $misModulos=$modulo->read();
    
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modulos</title>
</head>

<body style="background-color:salmon">
    <h3 class="text-center mt-4">Crud Modulos</h3>
    <div class="container mt-3">
        <a href="cmodulo.php" class="btn btn-success mb-3">Nuevo Modulo</a>
        <?php
            if(isset($_SESSION['mensaje'])){
                echo "<h3 class='mt-3 mb-3 text-info'>
                {$_SESSION['mensaje']}
                </h3>";
                unset($_SESSION['mensaje']);
            }
        ?>
        <table class="table table-dark">
            <thead>
                <tr style='text-align:center;'>
                    <th scope="col">Código</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Horas</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($misModulos as $mod){
                    echo "<tr style='text-align:center;'>
                    <th scope='row'>{$mod->idMod}</th>
                    <td>{$mod->nomMod}</td>
                    <td>{$mod->horasSem}</td>
                    <td>
                    <form name='as' action='bmodulo.php' method='POST' style='display:inline'>
                            <input type='hidden' name='id' value='{$mod->idMod}'>
                            <a href='emodulo.php?id={$mod->idMod}' class='btn btn-info'>Editar</a>&nbsp;
                            <input type='submit' value='Borrar' class='btn btn-danger'>
                            </form>
                    </td>
                    </tr>";
            }
            $miLLave=null;
            ?>
            </tbody>
        </table>
    </div>
</body>

</html>