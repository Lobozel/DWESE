<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 9</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Crea un array llamado “lenguajes_cliente” y otro “lenguajes_servidor”, crea tu mismo los
valores, poniendo índices alfanuméricos a cada valor. Junta ambos arrays en uno solo llamado
“lenguajes” y muéstralo por pantalla en una tabla.
    */
    $lenguajes_cliente=[
        "HTML"=>"HTML",
        "JS"=>"JavaScript",
        "VBS"=>"VBScript",
        "CSS"=>"CSS",
        "DH"=>"DHTML",
        "XML"=>"XML"
    ];
    $lenguajes_servidor=[
        "CGI"=>"CGI",
        "P"=>"Perl",
        "ASP"=>"ASP.net",
        "PHP"=>"PHP",
        "JSP"=>"JSP"
    ];
    $lenguajes=array_merge($lenguajes_cliente,$lenguajes_servidor);

    echo "<h3>Lenguajes en entorno cliente:</h3>".PHP_EOL;
    print_r($lenguajes_cliente).PHP_EOL;
    echo "<br><h3>Lenguajes en entorno servidor:</h3>".PHP_EOL;
    print_r($lenguajes_servidor).PHP_EOL;
    echo "<br><h3>Lenguajes:</h3>".PHP_EOL;
    print_r($lenguajes).PHP_EOL;
    ?>
    </body>
</html>