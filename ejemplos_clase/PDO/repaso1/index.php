<?php
session_start();

spl_autoload_register(function($clase){
    require ("./class/$clase.php");
});

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    </head>
    <body style='background-color:crimson'>
    <h3 class='text-center mt-4'>Coches</h3>
    <div class='container mt-3'>
    <table class="table table-dark">
  <thead>
    <tr>
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
        echo "<tr>
        <th scope='row'></th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>BOTONES</td>
      </tr>";
      ?>    
  </tbody>
</table>
</div>
    </body>
</html>