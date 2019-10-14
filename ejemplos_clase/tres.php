<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Bucles PHP 2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <?php        
            $contDiv=0;

            if(!isset($_GET['num'])){
                echo "<h3 class='text-danger'>No pasaste parametros</h3>";
            }else{                   
            $num=(int)$_GET['num'];
                if($num<=100){
                    echo "<h3 class='text-danger'>El número es demasiado pequeño.
                    <br>Porfavor introduce uno mayor a 100.</h3>";
                }else{
                    for($cont=2;$cont<$num;$cont++){
                        for($x=2;$x<$cont && $contDiv==0;$x++){
                            if($cont%$x==0){
                                $contDiv++;
                            }
                        }
                        if($contDiv==0){
                            echo "$cont, ";
                        }
                        $contDiv=0;
                    }
                }
            }


            

            /*
            $num=77232917;
            
                for($cont=2;$cont<$num && $contDiv==0;$cont++){
                    if($num%$cont==0){
                        $contDiv++;                        
                    }
                }
                if($contDiv==0){
                    echo "$num es Primo.<br>";
                }
                else{
                    echo "$num no es Primo.<br>";
                }

                $contDiv=0;
                $num=12;
                $cont=2;
                while($cont<$num && $contDiv==0){
                    if($num%$cont==0){
                        $contDiv++;
                    }                        
                    $cont++;
                }
                                    
                if($contDiv==0){
                    echo "$num es Primo.<br>";
                }
                else{
                    echo "$num no es Primo.<br>";
                }
                */
        ?>
    </body>
</html>