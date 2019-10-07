<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Imprime los valores del array asociativo siguiente usando la estructura de control foreach:
        $v[1]=90;
$v[30]=7;
$v['e']=99;
$v['hola']=43;
    */
    $v[1]=90;
    $v[30]=7;
    $v['e']=99;
    $v['hola']=43;

    foreach($v as $key=>$value)	{
	    echo $key." = ".$value."<br>".PHP_EOL;
	}
    ?>
    </body>
</html>