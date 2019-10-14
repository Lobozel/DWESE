<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 6</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Crea un array con los países de la Unión Europea y sus capitales.
    Muestra por cada uno de ellos la frase: “La capital de <<país>> es <<capital>>”.
    Luego ordena la lista por el nombre del país y luego por el nombre de la capital. 
    */
    $capitalesEU=[
        "Albania"=>"Tirana",
        "Alemania"=>"Berlín",
        "Andorra"=>"Andorra la Vieja",
        "Armenia"=>"Ereván",
        "Austria"=>"Viena",
        "Azerbaiyán"=>"Bakú",
        "Belgica"=>"Bruselas",
        "Bielorrusia"=>"Minsk",
        "Bosnia-Herzegovina"=>"Saravejo",
        "Bulgaria"=>"Sofía",
        "Chipre"=>"Nicosia",
        "Ciudad del Vaticano"=>"Ciudad del Vaticano",
        "Croacia"=>"Zagreb",
        "Dinamarca"=>"Copenhague",
        "Eslovaquia"=>"Bratislava",
        "España"=>"Madrid",
        "Estonia"=>"Tallin",
        "Federación Rusa"=>"Moscú",
        "Finlandia"=>"Helsinki",
        "Francia"=>"París",
        "Georgia"=>"Tiflis",
        "Grecia"=>"Atenas",
        "Hungría"=>"Budapest",
        "Irlanda"=>"Dublín",
        "Islandia"=>"Reikiavik",
        "Italia"=>"Roma",
        "Kazajistán"=>"Astana",
        "Letonia"=>"Riga",
        "Liechtenstein"=>"Vaduz",
        "Lituania"=>"Vilna",
        "Luxemburgo"=>"Luxemburgo",
        "Macedonia del Norte"=>"Skopie",
        "Malta"=>"La Valeta",
        "Moldova"=>"Chisináu",
        "Mónaco"=>"Mónaco",
        "Montenegro"=>"Podgorica",
        "Noruega"=>"Oslo",
        "Países Bajos"=>"Ámsterdam",
        "Polonia"=>"Varsovia",
        "Portugal"=>"Lisboa",
        "Reino Unido"=>"Londres",
        "República Checa"=>"Praga",
        "Rumania"=>"Bucarest",
        "San Marino"=>"San Marino",
        "Serbia"=>"Belgrado",
        "Suecia"=>"Estocolmo",
        "Suiza"=>"Berna",
        "Ucrania"=>"Kiev"
    ];

    foreach($capitalesEU as $pais=>$capital)	{
	    echo "La capital de ".$pais." es ".$capital."<br>".PHP_EOL;
    }

    asort($capitalesEU);
    echo "<h1><br>Ordenadas por capitales:<br></h1>".PHP_EOL;
    foreach($capitalesEU as $pais=>$capital)	{
	    echo "La capital de ".$pais." es ".$capital."<br>".PHP_EOL;
    }
    
    ksort($capitalesEU);
    echo "<h1><br>Ordenadas por paises:<br></h1>".PHP_EOL;
    foreach($capitalesEU as $pais=>$capital)	{
	    echo "La capital de ".$pais." es ".$capital."<br>".PHP_EOL;
    }

    
    
    ?>
    </body>
</html>