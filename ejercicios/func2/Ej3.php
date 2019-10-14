<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
    /*
    Crearemos una función que pasado un número entre 1 y 12 me de el mes correspondiente y si le
paso ademas un numero entre 1 y 7 el día de la semana. La función guardará un array con los meses
y otro con los días de la semana. Ejemplo funcion(1,2) devuelve Enero y Martes, función(12,5)
devuelve Diciembre y Viernes. Error si no ajusto los índices entre 1 y 12 y entre 1 y 7
    */
    
    echo fecha(rand(1,12),rand(1,7));

    function fecha($mes,$diaSemana=null){
        if($mes>0 && $mes<13){
            $salida="";
            $meses=[
                "Enero",
                "Febrero",
                "Marzo",
                "Abril",
                "Mayo",
                "Junio",
                "Julio",
                "Agosto",
                "Septiembre",
                "Octubre",
                "Noviembre",
                "Diciembre"
            ];
            $salida.="Mes: ".$meses[$mes-1];

            if($diaSemana>0 && $diaSemana<8){
                $semana=[
                    "Lunes",
                    "Martes",
                    "Miércoles",
                    "Jueves",
                    "Viernes",
                    "Sábado",
                    "Domingo"
                ];

                $salida.="<br>Semana: ".$semana[$diaSemana-1];
            }
            return $salida;
        }
        
        return "<h2 class='text-danger'>Argumento/s invalido/s</h2>".PHP_EOL;
        
    }
    
    ?>
    </body>
</html>