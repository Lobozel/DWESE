<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Mostrar por pantalla el siguiente fragmento html con una sentencia PHP:
    <a href= "/arbol/prueba.php" class="prueba" onmouseOver="status='hola';
return trae;">pruebade\enlace</a>
    */

    echo htmlspecialchars("<a href= \"/arbol/prueba.php\" class=\"prueba\" onmouseOver=\"status='hola';
    return trae;\">pruebade\enlace</a>");
    
    ?>
    </body>
</html>