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
        require('class/Coches.php');
        require('class/Marcas.php');
        $coches=[];
        $marcas=Marcas::getMarcas();

        for($i=0;$i<10;$i++){
            $marca=$marcas[rand(0,count($marcas)-1)];
            $coches[$i]=new Coches($marca,'Modelo',generarMatriculaRandom(),rand(0,1000),rand(4000,10000));

            //Si el coche está vacio (compruebo a través de la falta de matrícula) lo elimino del array
            if($coches[$i]->getMatricula()==null){
                unset($coches[$i]);
            }
        }

        for($i=0;$i<count($coches);$i++){
            echo $coches[$i].PHP_EOL;
            echo "<br>".PHP_EOL;
        }

        function generarMatriculaRandom(){
            
            $matricula="";
            for($i=0;$i<4;$i++){
                $matricula.=rand(0,9);
            }
            $matricula.='-';
            for($i=0;$i<3;$i++){
                $matricula.=substr(str_shuffle("abcdefghijklmnopqrstuvwyxz"), -1);
            }
            return $matricula;
        }
    ?>
    </body>
</html>