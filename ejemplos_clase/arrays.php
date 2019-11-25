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
    $vector1=[
        "Barcelona",
        "Madrid",
        "Almeria",
        "Pamplona"
    ];
    //podemos recorrerlos como en java
    //count me da los elementos de un array
    for($i=0;$i<count($vector1);$i++){
        echo "\$vector1[$i]=".$vector1[$i]."<br>".PHP_EOL;
    }
    //Más de una dimensión
    $capitales=[
        ["Madrid","Barcelona","Sevilla","Tarragona","Almeria"],
        ["Badajoz","Caceres","Almeria","Valencia"],
        ["Granada","Cadiz","Jaen","Murcia"]
    ];
    echo "<br>La dimensión de \$capitales=".count($capitales).PHP_EOL;
    echo "<br>La dimension de la primera fila es ".count($capitales[0]).PHP_EOL;
    //Mostramos $capitales
    echo "<br>".PHP_EOL;
    for($i=0;$i<count($capitales);$i++){
        for($j=0;$j<count($capitales[$i]);$j++){
            echo "\$capitales[$i][$j]=".$capitales[$i][$j].", ";
        }
        echo "<br>".PHP_EOL;
    }
    //A partir de aqui empieza la fiesta
    echo "<h3 class:'text-center'><i>Cosas chulas:</i></h3>".PHP_EOL;
    $vector=[
        "uno",
        "dos"
    ];
    $vector[]="hola";
    $vector[23]="Adios";
    $vector[]="Saludo";
    echo "<br>El número de elementos de vector será: ".count($vector).PHP_EOL;
    //Esto YA no nos sirve
    // for($i=0;$i<count($vector);$i++){
    //     echo "\$vector1[$i]=".$vector[$i]."<br>".PHP_EOL;
    // }
    $vector[3]="Nuevo Valor";
    $vector[]="Otro más";
    echo "<br> Resultado de var_dump<br>".PHP_EOL;
    var_dump($vector);
    echo "<br> Resultado de print_r<br>".PHP_EOL;
    print_r($vector);
    //algunos metodos utiles
    //current, key, reset, next, prev, end;
    echo "<br>".PHP_EOL;
    echo "current(\$vector)=".current($vector).PHP_EOL;
    echo "<br>".PHP_EOL;
    echo "key(\$vector)=".key($vector).PHP_EOL;
    echo "<br>".PHP_EOL;
    /*
    next avanza el puntero al siguiente elemento del vector
    prev retrocede el puntero al anterior elemento del vector
    reset devuelve el puntero al primer indice (0) del vector
    end avanza el puntero hasta el último elemento del vector
    */
    echo "Next-><br>".PHP_EOL;
    next($vector);
    echo "Key: ".key($vector).", current: ".current($vector)."<br>".PHP_EOL;
    echo "End-><br>".PHP_EOL;
    end($vector);
    echo "Key: ".key($vector).", current: ".current($vector)."<br>".PHP_EOL;
    echo "Prev-><br>".PHP_EOL;
    prev($vector);
    echo "Key: ".key($vector).", current: ".current($vector)."<br>".PHP_EOL;
    echo "Reset-><br>".PHP_EOL;
    reset($vector);
    echo "Key: ".key($vector).", current: ".current($vector)."<br>".PHP_EOL;
    //-------------------------------------
    echo "<br><br>".PHP_EOL;
    do{
        // echo "El indice es ".key($vector)." el valor es ".current($vector)."<br>".PHP_EOL;
        echo "\$vector[".key($vector)."]=".current($vector)."<br>".PHP_EOL;
    }while(next($vector));
    reset($vector);
    echo "<br>".PHP_EOL;
    //recorrer el vector al reves
    end($vector);
    do{
        echo "\$vector[".key($vector)."]=".$vector[key($vector)]."<br>".PHP_EOL;
    }while(prev($vector));
    //---------------------
    echo "<br>".PHP_EOL;
    //Arrays asociativos clave=>valor
    $misCapitales=[
        "Extremadura"=>"dos",
        "Andalucia"=>"Siete",
        "Valencia"=>"tres",
        "Aragon"=>"No me acuerdo, o quizas si"
    ];
    print_r($misCapitales);
    echo "<br>".PHP_EOL;
    echo $misCapitales["Andalucia"]."<br>".PHP_EOL;
    echo $misCapitales["Aragon"]."<br>".PHP_EOL;
    $misCapitales[]="Esta no tiene ni nombre";
    print_r($misCapitales).PHP_EOL;
    echo "<br>".PHP_EOL;
    echo $misCapitales[0]."<br>".PHP_EOL;
    $misCapitales[]="Ni esta";
    print_r($misCapitales).PHP_EOL;
    echo "<br>".PHP_EOL;
    $misCapitales["0"]="Esta va entre comillas";
    print_r($misCapitales).PHP_EOL;
    echo "<br>".PHP_EOL;

    $comunidades=[
        "Andalucia" =>["Almeria","Cadiz","Cordoba","Granada","huelva"],
        "Extremadura" =>["Badajoz","Caceres"],
        "Aragon" =>["Zaragoza","Huesca","Teruel"],
        "Valencia" =>["Alicante","Castellon","Valencia"]
    ];
    $datos=[
        "uno" =>"El primer dato",
        "dos" =>"El segundo",
        "tres" =>"otro dato mas"
    ];
    echo "<p class='text-center'>array_keys y array_values</p>";
    echo "El array \$datos<br>";
    print_r($datos);
    echo "<br>Usando array_keys<br>";
    print_r(array_keys($datos));
    echo "<br>Usando array_values<br>";
    print_r(array_values($datos));
    //----------------
    echo "<br>------------------------------<br>";
    echo "El array \$comunidades<br>";
    print_r($comunidades);
    echo "<br>Usando array_keys<br>";
    print_r(array_keys($comunidades));
    echo "<br>Usando array_values<br>";
    print_r(array_values($comunidades));
    //Ordenacion de arrays
    $aux=$datos;
    echo "<br>-----Ordenación SORT------<br>";
    echo "<br>Antes de sort<br>";
    print_r($aux);
    echo "<br>Despues de sort<br>";
    sort($aux);
    print_r($aux);
    echo "<br><br>".PHP_EOL;

    //---------------------------------
    //Como cortar arrays array_slice
    $array=["uno","dos","tres","cuatro","cinco","seis"];
    $res=array_slice($array,3); //solo un parametro
    echo "<br>".PHP_EOL;
    print_r($res); //mostrara cuatro, cinco, seis
    echo "<br>".PHP_EOL;
    $res=array_slice($array,2,3); //dos parametros
    print_r($res); //mostrara tr, cua, cin
    echo "<br>".PHP_EOL;
    $res=array_slice($array,-5,2);
    print_r($res);
    echo "<br>".PHP_EOL;
    //array chunk dividir arrays en varios
    $res=array_chunk($array,4);
    print_r($res);
    echo "<br>".PHP_EOL;
    $res=array_chunk($array,4,true); //preserva las keys originales
    print_r($res);
    echo "<br>".PHP_EOL;

    //explode e implode----------------------------
    //convierten string a array o array a string
    $cad="El cielo esta enladrillado";
    echo "<br>$cad<br>";
    $array=explode(" ",$cad);
    print_r($array);
    echo "<br>".PHP_EOL;
    $cad="felipe::perez::felipe@correo.es::http://felipe.es";
    $array=explode("::",$cad);
    print_r($array);
    echo "<br>".PHP_EOL;    
    list($nom,$apellidos,$mail,$url)=explode("::",$cad);
    echo "nom=$nom, ape=$apellidos, mail=$mail, url=$url<br>";
    //implode array a String
    $array=["portero","delanteros","centrales","defensas","suplentes"];
    $string=implode("::",$array);
    echo "<br>$string<br>";
    //añadir o quitar elementos de un array
    //Al final del mismo------------------
    $array=["portero","delanteros","suplentes"];
    array_push($array,"Entrenadores"); //añade entrenadores al final
    print_r($array);
    echo "<br>".PHP_EOL;
    array_pop($array);
    print_r($array);
    echo "<br>".PHP_EOL;
    //al principio
    array_unshift($array, "Entrenadores")    ;
    print_r($array);
    echo "<br>";
    array_shift($array);
    print_r($array);
    echo "<br>".PHP_EOL;
    //Juntar dos arrays array_merge------------------
    $array1=array(1,"dos",3,4,"cinco",9);
    $array2=array(1,"hola",3,"adios",5,6);
    $union=array_merge($array1, $array2);
    print_r($union);
    echo "<br>".PHP_EOL;
    //si unimos array asociativos
    $mat1=[
        "uno"=>"valor 1 array 1",
        "dos"=>"valor 2 array 1"
    ];
    $mat2=[
        "key1"=>"valor 1 array 2",
        "key2"=>"valor 2 array 2"
    ];
    $union=array_merge($mat1, $mat2);
    print_r($union);
    echo "<br>".PHP_EOL;

    $mat1=[
        1=>"'valor de mat1'",
        "dos",
        5=>"'valor 5'"
    ];
    $mat2=[
        1=>"'valor1 de array2'",
        "'valor 2 array 2'",
        5=>"'valor 5 array2'"
    ];
    echo "<br>Mat1<br>";
    print_r();

    echo "<br><br>".PHP_EOL;
    ?>
    </body>
</html>