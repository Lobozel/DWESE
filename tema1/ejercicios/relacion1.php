<!--
    https://github.com/Lobozel/DWESE/blob/master/tema1/ejercicios/relacion1.php
-->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Relacion de Ejercicios 1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body style="background-color:#90caf9">
    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio1</h3>
    <?php
        /*Ejercicio1
        Hacer un ejercicio php que me muestre centrada la siguiente tabla: $num=3
        */
        $numero=3;
        echo "<table align='center' border='3' cellpadding='2' cellspacing='4'".PHP_EOL;

        echo "< align='center'>".PHP_EOL;
        echo "<td colspan='5'>Tabla de Multiplicar de $numero</td>".PHP_EOL;
        echo "</tr>".PHP_EOL;
        for($i=0;$i<10;$i++){
            $color;
            //Filas pares Blancas e impares Verdes
            if($i%2==0){
                $color="white";
            }else{
                $color="#519657";
            }
            $factor=$i+1;
            echo "<tr align='center' bgcolor=$color>".PHP_EOL;
            echo "<td>$numero</td>".PHP_EOL;
            echo "<td>X</td>".PHP_EOL;
            echo "<td>$factor</td>".PHP_EOL;
            echo "<td>=</td>".PHP_EOL;
            echo "<td>".($numero*$factor)."</td>".PHP_EOL;
            echo "</tr>".PHP_EOL;
        }     

        echo "</table>".PHP_EOL;
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio2</h3>
    <?php
        /*Ejercicio2
        Hacer un ejercicio en php (primo.php) que dado un número pasado por url “primo.php?num=xx”
        me diga si es primo o no. Controlaremos si no pasamos el número
        */
        if(isset($_GET['primo'])){
            //nos ha llegado primo por get
            if(is_nan($_GET['primo'])){
                echo "<p class='text-center, text-danger'>
            El parametro de GET no es un número.
            </p>".PHP_EOL;
            }else{
                $numero=(int)$_GET['primo'];
                if($numero<=0){
                    echo "<p class='text-center, text-danger'>
                    El número no debe ser negativo ni 0.
                    </p>".PHP_EOL;
                }else{
                    if($numero==1){
                        echo "$numero No es primo.".PHP_EOL;
                    }else{
                        $contDiv=0;
                        for($i=2;$i<$numero && $contDiv==0;$i++){
                            if($numero%$i==0){
                                $contDiv++;
                            }                        
                        }
                        if($contDiv>0){
                            echo "$numero No es primo.".PHP_EOL;
                        }else{
                            echo "$numero ES primo.".PHP_EOL;
                        }
                    }                    
                }
            }
        }else{
            echo "<p class='text-center, text-danger'>
            No has pasado por GET el número a comprobar.
            </p>".PHP_EOL;
        }
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio3</h3>
    <?php
        /*Ejercicio3
        Hacer un ejercicio que dado un número menor que 500 me de esa cantidad de números primos,
        por ejemplo si paso el numero 10 doy los 10 primero primos: 1, 2, 3, 5, 7, 9, 11, 13, 17, 19
        */
        $cantidad=123;
        $contDiv=0;
        $contPrimo=0;
        for($cont=2;$contPrimo<$cantidad;$cont++){
            for($x=2;$x<$cont && $contDiv==0;$x++){
                if($cont%$x==0){
                    $contDiv++;
                }
            }
            if($contDiv==0){
                echo "$cont, ";
                $contPrimo++;
            }
            $contDiv=0;
        }        
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio4</h3>
    <?php
        /*Ejercicio4
        Hacer un ejercicio que dado un número mayor que 1000 me de todos los números primos menores que él dado.
        */
        echo "<br>".PHP_EOL;
        $cantidad=1023;
        $contDiv=0;
        for($cont=2;$cont<$cantidad;$cont++){
            for($i=2;$i<$cont && $contDiv==0;$i++){
                if($cont%$i==0){
                    $contDiv++;
                }
            }
            if($contDiv==0){
                echo "$cont, ";
            }else{
                $contDiv=0;
            }
        }
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio5</h3>
    <?php
        /*Ejercicio5
        Hacer un ejercicio que dado un número entero mayor que 1000 me de su descomposición en base 10.
        Ejemplo si num=4567 daremos => 4*10³+5*10²+6*10+7
        */
        echo "<br>".PHP_EOL;
        $num=4567;

        echo "Descomposición del número $num en base 10:<br>".PHP_EOL;
        
        for($i=strlen($num);$i>0;$i--){
            echo (int)($num%pow(10,$i)/pow(10,$i-1));
            //Este if es solo para formatear el resultado y que se vea bonito
            if($i>1){
                echo "*10";
                if($i>2){
                    echo "^".($i-1);
                }
                echo " + ";
            }
        }        
        
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio6</h3>
    <?php
        /*Ejercicio6
        Hacer un ejercicio que dados dos números separados por mas de 100 unidades me de todos
        los múltiplos de 3 que hay entre el primero y el segundo, ambos incluidos y además me los cuente
        */
        echo "<br>".PHP_EOL;

        $num1=99;
        $num2=266;
        
        $cantMultiDe3=0;

        for($cont=min($num1,$num2);$cont<=max($num1,$num2);$cont++){
            if($cont%3==0){
                echo $cont.", ";
                $cantMultiDe3++;
            }
        }

        echo "<br><br>".PHP_EOL;
        echo "Entre el ".min($num1,$num2)." y el ".max($num1,$num2)." existen $cantMultiDe3 múltiplos de 3".PHP_EOL;
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio7</h3>
    <?php
        /*Ejercicio7
        Hacer un ejercicio que dado un número me cuente todos sus divisores,
        Ejemplo si el número es 4me mostrará 1, 2 y 4. 4 tiene 3 divisores
        */
        echo "<br>".PHP_EOL;

        $num=56;

        $contMulti=0;

        for($i=$num;$i>0;$i--){
            if($num%$i==0){
                echo $i.", ";
                $contMulti++;
            }
        }

        echo "<br><br>".PHP_EOL;
        echo "El número $num tiene $contMulti múltiplos.".PHP_EOL;

    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio8</h3>
    <?php
        /*Ejercicio8
        Hacer un programa que me muestre una tabla html de 10 filas y 10 columnas y
        cada celda de un color diferente. Pista si ponemos el color en hexadecimal bgcolor=’#123456’
        cambiando los números obtenemos colores diferentes.
        */
    echo "<br>".PHP_EOL;

    echo "<table align='center' border=2>".PHP_EOL;
            for($i=0;$i<10;$i++){
                echo "<tr align='center'>".PHP_EOL;
                for($j=0;$j<10;$j++){
                    $color=sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                    
                    echo "<td bgcolor=$color align='center'>Celda [$i,$j]</td>".PHP_EOL;  
                }
                echo "</tr>".PHP_EOL;
            }
            echo "</table>";

    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio9</h3>
    <?php
        /*Ejercicio9
        La solución de una ecuación lineal de tipo ax+b=c con a, b, c números reales con
        a!=0 esx=c−baSiempre tiene solución. Hacer un programa que dados los coeficientes
        a, b, c me calcule la solución de la ecuación.
        */
        echo "<br>".PHP_EOL;

        $a=rand(0,200);
        $b=rand(0,200);
        $c=rand(0,200);

        if($a==0){
            echo "El coeficiente a debe ser distinto de 0.".PHP_EOL;
        }else{
            echo "La solución de la ecuación ".$a."x+".$b."=".$c." es:".PHP_EOL;
            echo "<br>".PHP_EOL;
            echo (($c-$b)/$a).PHP_EOL;
        }
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio10</h3>
    <?php
        /*Ejercicio10
        Una ecuación de segundo grado es de la forma aX² + bX + c = 0 donde a, b, c son números reales y a!=0.
        Una ecuación de este tipo puede tener 2, 1, o 0 soluciones.
        La formula que me da la/s solucione/s es : [Imagen en el PDF]

        b²-4ac Es el discriminante, lógicamente si es menor que cero la ecuación no tiene solución
        (NO existe la raíz cuadrada real de un número negativo) y si es cero la ecuación tendrá una única solución.

        Haremos un programa en php donde daremos a, b, c y en función de estos valores.
        Calcularemos la/s soluciones/s de la ecuación de segundo grado resultanteLa función que
        calcula la raíz cuadrada en php es sqrt()
        La salida será como:
            La soluciones son 4 y 3 ó
            La solución es 2 ó
            No tiene solución
        Dependiendo del caso
        */
        echo "<br>".PHP_EOL;

        $a=rand(0,200);
        $b=rand(0,200);
        $c=rand(0,200);

        $discriminante=(($b*$b)-(4*($a*$c)));

        if($a==0){
            echo "La ecuación no es cuadrática porque a = 0.".PHP_EOL;
        }else if($discriminante<0){
            echo "La ecuación no tiene soluciones reales.".PHP_EOL;
        }else if($discriminante==0){
            echo "La ecuación solo tiene una solución real:".PHP_EOL;
            echo "<br>".PHP_EOL;
            echo ((-$b)/(2*$a)).PHP_EOL;
        }else{
            echo "La ecuación tiene dos soluciones reales:".PHP_EOL;
            echo "<br>".PHP_EOL;
            echo "PRIMERA SOLUCIÓN: ".((+$b)+sqrt($discriminante)/(2*$a)).PHP_EOL;
            echo "<br>".PHP_EOL;
            echo "SEGUNDA SOLUCIÓN: ".((-$b)-sqrt($discriminante)/(2*$a)).PHP_EOL;
        }

        echo "<br><br><br>".PHP_EOL;
    ?>
    </div>

    </body>
</html>