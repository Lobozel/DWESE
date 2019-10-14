<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejemplos con cadenas 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style ='background-color:bisque'>
    <div class="container mt-5">
    <h4 class='text-center'>Ejemplo Funciones de Cadenas</h4>
    <?php
        $cadena="Hola Mundo";
        echo "La longitud de  \"$cadena\" es: ".strlen($cadena).PHP_EOL;
        echo "<br>".PHP_EOL;
        for($i=0;$i<strlen($cadena);$i++){
            echo $cadena[$i]." - ";
        }
        echo "<br>".PHP_EOL;
        echo "Ejemplo strstr()<br>".PHP_EOL;
        echo strstr($cadena, " ").PHP_EOL;
        //--------------------------------
        echo "<br>Ejemplo strpos()<br>".PHP_EOL;
        echo strpos($cadena, "o", 2).PHP_EOL;;
        //---------------------------------
        echo "<br>Ejemplo de strspn(cadena, máscara)<br>".PHP_EOL;
        $cadena="America fue descubierta en 1492";
        $cadena1="1942 fue el año del descubrimiento";
        $mascara="1234567890";
        echo "strspn de $cadena con mascara=$mascara<br>".PHP_EOL;
        echo strspn($cadena,$mascara).PHP_EOL;
        echo "<br>".PHP_EOL;
        echo "strspn de $cadena1 con mascara=$mascara<br>".PHP_EOL;
        echo strspn($cadena1,$mascara).PHP_EOL;
        //------------------------------
        echo "<br>".PHP_EOL;
        $cadena="Hola Mundo";
        $cadena1="Hola mundo";
        if($cadena==$cadena1){
            echo "Las cadenas son iguales".PHP_EOL;
        }else{
            echo "Las cadenas NO son iguales".PHP_EOL;
        }
        echo "<br>".PHP_EOL;
        $num1=12;
        $num2=12.00;
        if($num1==$num2){
            echo "$num1 = $num2".PHP_EOL;            
        }else{
            echo "$num != $num2".PHP_EOL;
        }
        echo "<br>".PHP_EOL;
        if($num1===$num2){
            echo "$num1 = $num2 y son del mismo tipo.".PHP_EOL;
        }else{
            echo "$num1 y $num2 no son iguales o no son del mismo tipo".PHP_EOL;
        }
        echo "<br>".PHP_EOL;
        //----------------------------
        echo "Ejemplos strcmp:<br>".PHP_EOL;
        echo "strcmp(sevilla,betis):<br>".PHP_EOL;
        echo strcmp("sevilla","betis")."<br>".PHP_EOL;
        echo "strcmp(betis,sevilla):<br>".PHP_EOL;
        echo strcmp("betis","sevilla")."<br>".PHP_EOL;
        echo "strcmp(sevilla,sevilla):<br>".PHP_EOL;
        echo strcmp("sevilla","sevilla")."<br>".PHP_EOL;
        echo "strcmp(sevilla,Sevilla):<br>".PHP_EOL;
        echo strcmp("sevilla","Sevilla")."<br>".PHP_EOL;
        echo "strcasecmp(sevilla,Sevilla):<br>".PHP_EOL;
        echo strcasecmp("sevilla","Sevilla")."<br>".PHP_EOL;

    ?>
    </div>
    </body>
</html>