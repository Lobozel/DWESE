<?php
session_start();
if(!isset($_SESSION['nombre'])){
    header('Location:index.php');
    die();
}
$nombre=$_SESSION['nombre'];
$perfil=$_SESSION['perfil'];

spl_autoload_register(function($clase){
    require "./class/".$clase.".php";
});

$conexion=new Conexion();
$llave=$conexion->getConector();
$plataforma=new Plataformas($llave);
$todas=$plataforma->read();

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>
    <body style="background-color:coral">


 
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Explorar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="plataformas.php">Plataformas</a>
          <a class="dropdown-item" href="videojuegos.php">Videojuegos</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" tabindex="-1" aria-disabled="true"><?php echo $nombre; ?></a>
      </li>    
      <li>
      <a class="navbar-brand btn btn-info" href="portal.php">Volver</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      </li>  
      <?php
if($perfil==100){
    echo '<li>
    <a class="navbar-brand btn btn-success" href="cplataforma.php">Crear Plataforma</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    </li>';
}
      ?>
    </ul>
    <a class="navbar-brand btn btn-warning" href="cerrarsession.php">Cerrar Sessión</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
  </div>
</nav>   

<h1 class='shadow-lg p-3 bg-white rounded text-center text-info mt-3 text-weight-bold'>PLATAFORMAS</h1>

<div class="container mt-3">
<?php
if(isset($_SESSION['mensaje'])){
  echo "<div>".PHP_EOL;
  echo "<h4 class='text-center text-primary bg-light'>".$_SESSION['mensaje']."</h4>".PHP_EOL;
  echo "</div>".PHP_EOL;
  unset($_SESSION['mensaje']);
}
?>
<table class="table table-striped table-dark">
  <thead>
    <tr class="text-center text-warning text-weight-bold">
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Imagen</th>
      <?php
      if($perfil==100){
        echo "<th scope='col'>Accones</th>";
      }
      ?>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach($todas as $item){
       echo "<tr style='text-align:center;'>
        <th scope='row'>{$item->id}</th>
        <td>{$item->nombre}</td>
        <td><img src='{$item->imagen}' width='80px' height='80px'></td>
        <td>";
        if($perfil==100){
          echo "<form name='as' action='bplataforma.php' method='POST' style='display:inline'>
          <input type='hidden' name='id' value='{$item->id}'>
          <a href='eplataforma.php?id={$item->id}' class='btn btn-info'>Editar</a>&nbsp;
          <input type='submit' value='Borrar' class='btn btn-danger'>
          </form>";
        }         
        echo "</td>
      </tr>";
    }
  ?>
  </tbody>
</table>
</div>

    </body>
</html>