<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <?php
    // spl_autoload_register(function($n){
    //     require "../$n.php";
    // });
    require "../src/Conexion.php";
    require "../src/Usuarios.php";
    // use Src\Conexion as Con;
    // use Src\Usuarios as Users;
    use Src\{Conexion, Usuarios};
    $con=new Conexion();
    $llave = $con->getConector();
    $usu=new Usuarios($llave);
    $usuarios=$usu->read();
    ?>
    </body>
    <h3 class='text-center mt-3'>usuarios</h3>
    <div class="container mt-3">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Dirección</th>
      <th scope="col">Mail</th>
      <th scope="col">Web</th>
      <th scope="col">Descripción</th>
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
                            <td>{$usuario->direction}</td>
                            <td>{$usuario->mail}</td>
                            <td>{$usuario->web}</td>
                            <td>{$usuario->description}</td>
                            <td>
                            <form name='as' action='busuario.php' method='POST' style='display:inline'>
                            <input type='hidden' name='id' value='{$usuario->id}'>
                            <a href='eusuario.php?id={$usuario->id}' class='btn btn-info'>Editar</a>&nbsp;
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