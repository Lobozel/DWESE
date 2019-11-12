<!DOCTYPE html>
<?php
    session_start();
    //hacemos el autoload de las clases
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });
    $conexion = new Conexion();
    $miLLave = $conexion->getConector();
    $alumnos = new Alumnos($miLLave);
    $todosLosAlumnos=$alumnos->read();
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alumnos</title>
</head>

<body style="background-color:salmon">
    <h3 class="text-center mt-4">Crud Alumnos</h3>
    <div class="container mt-3">
        <?php
        if(isset($_SESSION['mensaje'])){
            echo "<h3 class='mt-3 mb-3 text-info'>".PHP_EOL;
            echo $_SESSION['mensaje'].PHP_EOL;
            echo "</h3>".PHP_EOL;
            unset($_SESSION['mensaje']);
        }
    ?>
        <a href="calumno.php" class="btn btn-success mb-3">Nuevo Alumno</a>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Creado</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($todosLosAlumnos as $alumno){
                    echo "    
                        <tr>
                            <th scope='row'>{$alumno->idAl}</th>
                            <td>{$alumno->apeAl}</td>
                            <td>{$alumno->nomAl}</td>
                            <td>{$alumno->mail}</td>
                            <td>{$alumno->created_at}</td>
                            <td>
                            <form name='as' action='balumno.php' method='POST' style='display:inline'>
                            <input type='hidden' name='id' value='{$alumno->idAl}'>
                            <a href='ealumnos.php?id={$alumno->idAl}' class='btn btn-info'>Editar</a>&nbsp;
                            <input type='submit' value='Borrar' class='btn btn-danger'>
                            </form>
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>