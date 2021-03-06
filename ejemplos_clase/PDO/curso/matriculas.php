<!DOCTYPE html>
<?php
    session_start();
    //hacemos el autoload de las clases
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });
    $conexion = new Conexion();
    $miLLave = $conexion->getConector();
    $matricula = new Matriculas($miLLave);
    $totalReg=$matricula->getTotal();
    $paginacion=4;
    $totalPag=intdiv($totalReg, $paginacion);
    if($totalReg%$paginacion!=0){
        $totalPag+=1;
    }
    if(!isset($_GET['pag'])){
        $inicio=0;
    }else{
        $inicio=$paginacion*($_GET['pag']-1);
    }
    $filas=$matricula->read($inicio,$paginacion);
    
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matriculas</title>
</head>

<body style="background-color:salmon">
    <h3 class="text-center mt-4">Crud Matriculas</h3>
    <div class="container mt-3">
        <a href="cmatricula.php" class="btn btn-success mb-3">Nueva Matricula</a>
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
                    <th scope="col">Apellidos</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Modulo</th>
                    <th scope="col">Nota Final</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($filas as $fila){
                    echo "<tr style='text-align:center;'>
                    <th scope='row'>{$fila->apeAl}</th>
                    <td>{$fila->nomAl}</td>
                    <td>{$fila->nomMod}</td>
                    <td>{$fila->notaFinal}</td>
                    <td>
                    <form name='as' action='bmatricula.php' method='POST' style='display:inline'>
                            <input type='hidden' name='al' value='{$fila->al}'>
                            <input type='hidden' name='mod' value='{$fila->modulo}'>
                            <a href='ematricula.php?al={$fila->al}&mod={$fila->modulo}' class='btn btn-info'>Editar</a>&nbsp;
                            <input type='submit' value='Borrar' class='btn btn-danger'>
                            </form>
                    </td>
                    </tr>";
            }
            $miLLave=null;
            ?>
            </tbody>
        </table>
        <div class="container mt-4">
        
        <!-- <b>Página:</b> -->
        <?php
            echo "|<a href='matriculas.php?pag=1' style='text-decoration:none'>&nbsp;&nbsp;|<</a>&nbsp;&nbsp;|";
            if(isset($_GET['pag']) && $_GET['pag']!=1){
                $anterior=$_GET['pag']-1;
            }else{
                $anterior=1;
            }
            echo "<a href='matriculas.php?pag=".$anterior."' style='text-decoration:none'>&nbsp;&nbsp;<</a>&nbsp;&nbsp;|";
            for($i=1;$i<=$totalPag;$i++){
                echo "<a href='matriculas.php?pag=$i' style='text-decoration:none'>&nbsp;&nbsp;$i</a>&nbsp;&nbsp;|";
            }
            if(isset($_GET['pag'])){
                if($_GET['pag']!=$totalPag){
                    $siguiente=$_GET['pag']+1;
                }else{
                    $siguiente=$totalPag;
                }
            }else{
                $siguiente=2;
            }
            echo "<a href='matriculas.php?pag=".$siguiente."' style='text-decoration:none'>&nbsp;&nbsp;></a>&nbsp;&nbsp;|";
            echo "<a href='matriculas.php?pag=".$totalPag."' style='text-decoration:none'>&nbsp;&nbsp;>|</a>&nbsp;&nbsp;|";
        ?>
        
        </div>
    </div>
</body>

</html>