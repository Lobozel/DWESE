<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="container mt-4 ml-3">
    <?php
    if(isset($_GET['dir'])){
        //hemos pasado por get el dir
        $dir=$_GET['dir'];
    }else{
        $dir=getcwd();
        //Si estamos en windows hay que tunearlo
        //quitarle letra de unidad c:, e: ... y cambiar \ por /
        //if(isset($_SERVER['WINDIR'])) true si estamos en windows
    }
    if(!$punt=opendir($dir)){
        echo "<p class='text-danger'>No se pudo abrir el directorio </p>".PHP_EOL;
        die();
    }
    if(isset($_SERVER['WINDIR'])){
        // $dir = substr($dir,2);
        $dir = str_replace("\\","/",$dir);
    }
    
    echo "<h3><b>Directorio: </b><font class='text-success'>$dir</font></h3><br>\n".PHP_EOL;
    echo "<div class='container mt-3' style='font-size:1.2em'>".PHP_EOL;
    
    while(($fichero=readdir($punt))!=false){
        if($fichero=='.') continue;
        $ficheros[]=$fichero;
    }
    sort($ficheros);
    foreach($ficheros as $k=>$v){
        if(es_Directorio($dir,$v)){
            ponEnlace($dir,$v);
        }else{
            echo "<img src='/icons/generic.gif'>$v<br>\n".PHP_EOL; 
        }
    }
    closedir($punt);
    echo "</div>".PHP_EOL;


//----------------------------------------------------------------
    function ponEnlace($dir,$nuevoDir){
        if($nuevoDir=='..'){
            ?>
            <img src='/icons/back.gif'>
            <a href='<?php echo $_SERVER['PHP_SELF']."?dir=".dirname($dir) ?>' style='text-decoration:none'>
            <p style='font-size:1.7em; text-decoration:none; display:inline;'>..</p>
            </a>
            <br>
            <?php
        }else{
            if($dir=="/"){
                ?>
                <img src='/icons/dir.gif'>
                <a href='<?php $_SERVER['PHP_SELF']."?dir=/".$nuevoDir ?>' style='text-decoration:none'>
                <?php echo $nuevoDir ?>
                </a>
                <br>
                <?php
            }else{
                ?>
                <img src='/icons/dir.gif'>
                <a href='<?php $_SERVER['PHP_SELF']."?dir=".$dir."/".$nuevoDir ?>' style='text-decoration:none'>
                <?php echo $nuevoDir ?>
                </a>
                <br>
                <?php
            }
        }
    }

    function es_Directorio($dir, $fich){
        if($dir=='/'){
            $dir1="/$fich";
            //Si estoy en el raiz añado a $fich la barra /
        }else{
            $dir1="$dir/$fich";
            //Si estoy en otro sitio añado la ruta
        }
        return is_dir($dir1);
    }

    ?>
    
    </div>
    </body>
</html>