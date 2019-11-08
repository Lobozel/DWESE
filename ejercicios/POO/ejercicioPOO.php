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
        require('class/CochesVendidos.php');
        require('class/Marcas.php');
        $coches=[];
        $marcas=Marcas::getMarcas();
        $matriculas=[];

        for($i=0;$i<10;$i++){
            $marca=$marcas[rand(0,count($marcas)-1)];
            $coches[$i]=new Coches($marca,'Modelo',generarMatriculaRandom($matriculas),rand(0,1000),rand(4000,10000));

            //Si el coche está vacio (compruebo a través de la falta de matrícula) lo elimino del array
            if($coches[$i]->getMatricula()==null){
                unset($coches[$i]);
            }
        }

        for($i=0;$i<count($coches);$i++){
            echo $coches[$i].PHP_EOL;
            echo "<br>".PHP_EOL;
        }

        echo "<h1>Antes de Vender:</h1>";
        echo "Nº Coches: ".Coches::$cant;
        echo "<br>";
        echo "Nº Coches Vendidos: ".CochesVendidos::$cant;

        if(count($matriculas)>0){
            $cocheVendido1 = venderCoche($matriculas[rand(0,count($matriculas))],$matriculas,$coches);
            if($cocheVendido1!=null){
                echo "<h3 class='text-center'>Coche Vendido:</h3>";
                echo $cocheVendido1;

                echo "<h1>Después de Vender:</h1>";
                echo "Nº Coches: ".Coches::$cant;
                echo "<br>";
                echo "Nº Coches Vendidos: ".CochesVendidos::$cant;
            }
        }


        function venderCoche($matricula,&$matriculas,&$coches){
            if(in_array($matricula,$matriculas)){
                $i=array_search($matricula,$matriculas);
                $cocheVendido = new CochesVendidos($coches[$i]->getMarca(),$coches[$i]->getModelo(),$coches[$i]->getMatricula(),$coches[$i]->getKms(),$coches[$i]->getPrecio(),date("d/m/Y"));

                unset($matriculas[$i]);
                unset($coches[$i]);
                Coches::$cant--;
                
                return $cocheVendido;
            }else{
                echo "<h1 class='text-danger text-center'>La matrícula no es válida</h1>".PHP_EOL;
                return null;
            }
        }

        function generarMatriculaRandom(&$matriculas){
            
            do{
                $matricula="";
                for($i=0;$i<4;$i++){
                    $matricula.=rand(0,9);
                }
                $matricula.='-';
                for($i=0;$i<3;$i++){
                    $matricula.=substr(str_shuffle("abcdefghijklmnopqrstuvwyxz"), -1);
                }
                //Mientras la matricula generada exista en el array de matriculas, genera una nueva
            }while(in_array($matricula,$matriculas));

            //Una vez que genere una nueva, la añade al array
            $matriculas[]=$matricula;
            
            return $matricula;
        }
    ?>
    </body>
</html>