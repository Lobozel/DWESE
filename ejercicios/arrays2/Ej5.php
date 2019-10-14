<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Dado el siguiente array:
$paises = array (
 'alemania',
 'brasil',
 'italia',
 'chile',
 'uruguay',
 'australia'
);
Se pide lo siguiente
1.Eliminar los elementos ‘alemania’, ‘italia’ y ‘australia’
2.Insertar los elementos ‘argentina’ y ‘bolivia’
3.Ordenar por orden alfabético el array
4.Mostrar el resultado por pantalla con print_r
Este es muy fácil si tenemos presentes las funciones de la clase teórica. Primero
se hace la definición que está ya hecha en el enunciado. Luego se eliminan con
la función unset aquellos elementos que se piden. A continuación, se agregan
los dos que se piden, se ordenan con sort y finalmente se muestra por pantalla
con print_r.
    */
    $paises = array (
        'alemania',
        'brasil',
        'italia',
        'chile',
        'uruguay',
        'australia'
       );   
    

    echo "Array antes de tratarlo:<br>".PHP_EOL;
    print_r($paises).PHP_EOL;
    $aBorrar=array('alemania','italia','australia');
    for($i=0;$i<count($aBorrar);$i++){
        do{
            if($paises[key($paises)]==$aBorrar[$i]){
                unset($paises[key($paises)]);
            }
        }while(next($paises));
        reset($paises);
    }
    echo "<br><br>Array después de borrar los elementos ‘alemania’, ‘italia’ y ‘australia’:<br>".PHP_EOL;
    print_r($paises).PHP_EOL;
    $paises[]="argentina";
    $paises[]="bolivia";
    echo "<br><br>Array después de insertar los ementos ‘argentina’ y ‘bolivia’:<br>";
    print_r($paises).PHP_EOL;
    sort($paises);
    echo "<br><br>Array después de ordenar alfabéticamente:<br>".PHP_EOL;
    print_r($paises).PHP_EOL;
    ?>
    </body>
</html>