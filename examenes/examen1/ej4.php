<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <?php
        $curso=[
            'alumno1'=>[1,8.78,4.5,6.9],
            'alumno2'=>[5,8,9,10],
            'alumno3'=>[5.6,7.75,8,4.25]
        ];

        $curso['alumno4']=[1,6.7,8,6];
        $curso['alumno0']=[5,5,6,4];

        ksort($curso);
        print_r($curso);

        echo "<br><br>".PHP_EOL;

        $media=[];

        do{

            $media[key($curso)]=media(current($curso));

        }while(next($curso));

        foreach($media as $k=>$v){
            echo "El alumno $k tiene una nota media: $v<br>".PHP_EOL;
        }

        echo "<br><br>".PHP_EOL;

        asort($media);

        foreach($media as $k=>$v){
            echo "El alumno $k tiene una nota media: $v<br>".PHP_EOL;
        }


        function media($array){
            $suma=0;
            do{
                $suma+=current($array);
            }while(next($array));
            return $suma/count($array);
        }

    ?>
    </body>
</html>