<?php
session_start();
spl_autoload_register(function($clase){
    require "./class/$clase.php";
});
if(isset($_COOKIE['visita'])){
    $mensaje="Estuvo por quí por última vez: ".$_COOKIE['visita'];
}else{
    $mensaje="Bienvenido, es la primera vez que visita nuestro Portal";
}
setcookie('visita',date('d M y - h:m:s'),time()+360000);
$conexion = new Conexion();
$conector = $conexion->getConector();
$libro = new Libros($conector);
$autor = new Autores($conector);
$paginacion=4;
$totalReg=$libro->getTotal();
$totalPag=intdiv($totalReg,$paginacion);
if($totalReg%$paginacion!=0){
    $totalPag+=1;
}
if(!isset($_GET['pag'])){
    $inicio=0;
}else{
    $inicio=$paginacion*($_GET['pag']-1);
}
$libros = $libro->read($inicio,$paginacion);

$conector=null;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/uno.css">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <title>Libreria</title>
</head>

<body class="gra">
    <div class='ml-1 row font-weight-bold fuentep mt-2'>
        <div class='col float-right'><?php echo $mensaje; ?><a href='eliminarc.php'
                class='btn btn-secondary ml-3'>Borrar Cookies</a></div>
    </div>
    <h3 class='text-center mt-3 fuenteg'>Librería Al-Ándalus</h3>
    <div class="container mt-5">
    <?php
    if(isset($_SESSION['mensaje'])){
        echo "<h2 class='text-success bg-white'>".$_SESSION['mensaje']."</h2>";
        unset($_SESSION['mensaje']);
    }
?>
        <a href='clibro.php' class='btn btn-info mt-3 mr-3 fuenten'>Nuevo Libro</a>
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th scope="col" class="text-center fuenten">Acciones</th>
                    <th scope="col" class='text-center fuenten'>Código</th>
                    <th scope="col" class='text-center fuenten'>Título</th>
                    <th scope="col" class='text-center fuenten'>Portada</th>
                    <th scope="col" class='text-center fuenten'>Información</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($libros as $l){
                    $autor->setId($l->autor);
                    $miAutor=$autor->getAutor();
                    echo "<tr>
                    <th scope='row'>
                    <form name='a' action='blibro.php' method='POST' style='display:inline'>
                    <a href='ulibro.php?id={$l->id}' style='text-decoration:none' class='mr-2'><img
                    src='./img/iconos/editar.png' alt='Borrar Libro' class='pequenia'></a>
                    <input type='hidden' name='id' value='{$l->id}'>";
                    ?>
                    <!-- He sacado el boton de php para que el script de js funcione -->
                            <button type='submit' style='padding:0' onclick="return confirm('¿Borrar Libro?')"><img
                                    src='./img/iconos/borrar.jpg' class='pequenia'></button>
                    <?php
                    echo "</form>
                    </th>
                    <th class='text-center'>{$l->id}</th>
                    <td class='text-center'>{$l->titulo}<br>[{$miAutor->nombre} {$miAutor->apellidos}]</td>
                    <td class='text-center'><img src='{$l->portada}' alt='portada' class='normal'></td>
                    <td class='text-center'>
                        <a href='librosd.php?id={$l->id}' class='btn btn-success fuenten'>Detalles</a>
                    </td>
                    </tr>";
                }
            ?>        
            </tbody>
        </table>
    </div>
    <div class='container mt-3'>
        <b>Páginas :</b>
        <?php
            for($i=1;$i<$totalPag+1;$i++){
                echo "<font class='text-primary'>|</font>
                <a href='index.php?pag=".($i)."' style='text-decoration:none' class='text-primary'>&nbsp;&nbsp;$i&nbsp;&nbsp;</a>";
            }
        ?>
        <font class='text-primary'>|</font>
    </div>
</body>

</html>