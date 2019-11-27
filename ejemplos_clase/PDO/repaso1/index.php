<?php
session_start();

spl_autoload_register(function($clase){
    require ("./class/$clase.php");
});
$objeto = new Conexion();
$llave=$objeto->getConector();
$coche=new Coches($llave);
$todos=$coche->read();
$llave=null;

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    </head>
    <body style='background-color:tomato'>
    <h3 class='text-center shadow-lg bg-white text-success mt-4'>Coches</h3>
    <div class='container mt-3'>
        <?php
            if(isset($_SESSION['mensaje'])){
                echo "<h2 class='text-center text-info bg-warning'>".$_SESSION['mensaje']."</h2>";
                unset($_SESSION['mensaje']);
            }
        ?>
    <a href='crear.php' class='btn btn-info mb-3'>Dar de Alta un Nuevo Vehículo</a>

    <table class="table table-dark">
  <thead>
    <tr class='text-center'>
      <th scope="col">Código</th>
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Color</th>
      <th scope="col">Kilómetros</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
      <?php
      foreach($todos as $item){
        echo "<tr class='text-center'>
        <th scope='row' class='text-warning'>{$item->id}</th>
        <td>{$item->marca}</td>
        <td>{$item->modelo}</td>
        <td>{$item->color}</td>
        <td>{$item->kmts}</td>
        <td>
        <form action='borrar.php' method='post'>
        <a href='editar.php?id={$item->id}' class='btn btn-warning'>Editar</a>
        &nbsp;
        <input type='hidden' name='id' id='id' value='{$item->id}'>
        <input class='btn btn-danger' type='submit' value='Borrar'>
        </form>        
        </td>
      </tr>";
      }
        
      ?>    
  </tbody>
</table>
</div>
    </body>
</html>