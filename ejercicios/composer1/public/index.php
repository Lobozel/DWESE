<?php
session_start();
require "../src/Conexion.php";
    require "../src/Usuarios.php";
    use Src\Conexion;
    use Src\Usuarios;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style type="text/css">
        .img{
          height:50px;
        }
        </style>
    </head>
    <body class='bg-warning'>
    <?php
    $con=new Conexion();
    $llave = $con->getConector();
    $usu=new Usuarios($llave);
    $usuarios=$usu->read();
    ?>
    </body>
    <h3 class='shadow-lg p-3 bg-white rounded text-center text-info mt-3 text-weight-bold'>Usuarios</h3>
    <div class="container">
    <a href="Usuario/crear.php" class='btn btn-primary mt-3 mb-3'>Crear Usuario</a>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Foto</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
                foreach($usuarios as $usuario){
                    echo "    
                        <tr>
                            <th scope='row'>{$usuario->id}</th>
                            <td>{$usuario->nombre}</td>
                            <td><img class='img' src='{$usuario->foto}' title='{$usuario->nombre}'></td>
                            <td>
                            <form name='as' action='Usuario/borrar.php' method='POST' style='display:inline'>
                            <input type='hidden' name='id' value='{$usuario->id}'>
                            <a href='Usuario/Editar.php?id={$usuario->id}' class='btn btn-info'>Editar</a>&nbsp;
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
</html>