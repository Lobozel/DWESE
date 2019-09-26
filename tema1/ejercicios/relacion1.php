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
        //Ejercicio1
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
        //Ejercicio2
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
        //Ejercicio3
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
        //Ejercicio4
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio5</h3>
    <?php
        //Ejercicio5
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio6</h3>
    <?php
        //Ejercicio6
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio7</h3>
    <?php
        //Ejercicio7
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio8</h3>
    <?php
        //Ejercicio8
    ?>
    </div>

    <div class='container mt-4'>
    <h3 class='text-center'>Ejercicio9</h3>
    <?php
        //Ejercicio9
    ?>
    </div>

    </body>
</html>