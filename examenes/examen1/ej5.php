<!DOCTYPE html>
<html lang="es">

<head>
    <title>Ejercicio 5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<?php

    function verFicha($name, $image, $email, $date, $lenguajes){
        //Pinta una tabla con los datos que hemos pasado por el formulario
        ?>
<div class="container mt-5">
    <table border='3' bordercolor='orange' cellpadding='4' align='center'>
        <tr>
            <td>
                <table align='center' cellpadding='4' cellspacing='4' border=0>
                    <tr>
                        <td><b>Nombre</b></td>
                        <td><?php echo $name ?></td>
                        <td colspan='2' rowspan='3' align='center'>
                            <?php
                            if($image[0]==null){
                                echo "<img src='".$image[1]."' width='80px' height='80px' class='rounded'>".PHP_EOL;
                            }else{
                                echo "<font class='text-danger'>".$image[0]."</font>".PHP_EOL;

                            }
                        ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Email: </b></td>
                        <td><?php echo $email ?></td>
                    </tr>
                    <tr>
                        <td><b>Fecha:</b></td>
                        <td><?php echo $date ?></td>
                    </tr>
                    <tr>
                        <td><b>Estudios :</b></td>
                        <td>
                            <?php
                                if($lenguajes==null){
                                    echo "<font class='text-info'>Sin estudios</font>".PHP_EOL;
                                }else{
                                    echo "<ol>".PHP_EOL;
                                    for($i=0;$i<count($lenguajes);$i++){
                                        echo "<li>".$lenguajes[$i]."</li>".PHP_EOL;
                                    }
                                    echo "</ol>".PHP_EOL;
                                }
                                ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <?php
    }

    function btnVolver(){
        //Nos permite volver a atrás y pintar de nuevo el formulario
        ?>
    <div class='container text-center mt-4'>
        <a href='<?php echo $_SERVER['PHP_SELF']; ?>' class='btn btn-success'>Volver</a>
    </div>
    <?php
    }


?>

        <?php
            if(isset($_POST['enviar'])){

                echo "<body style='background-color:aqua'>";

                //Declaracion de variables
                $name="";
                //image[0] si es distinto de null guarda el error
                $image[0]=null;
                $email="";
                $date="";
                $lenguajes=null;

                //Recogemos los datos enviados por el formulario

                $name=$_POST['nombre'];
                $email=$_POST['email'];
                $date=$_POST['fecha'];

                if(isset($_POST['cono'])){
                    $lenguajes=$_POST['cono'];
                }

                if(!$_FILES['foto']['error']==2){
                    if(is_uploaded_file($_FILES['foto']['tmp_name'])){
                        $mimeImagen=[
                            'image/jpeg',
                            'image/png',
                            'image/tiff',
                            'image/bmp',
                            'image/gif',
                            'image/x-icon',
                            'image/svg+xml'
                        ];
                        if(in_array($_FILES['foto']['type'],$mimeImagen)){
                            $nombreActual = $_FILES['foto']['name'];
                            $id=time();
                            //image[1] guarda la ruta
                            $image[1]=$id.$nombreActual;
                            move_uploaded_file($_FILES['foto']['tmp_name'], $image[1]);
                        }else{
                            $image[0]="Tipo no válido.";
                        }
                    }else{
                        $image[0]="Falta archivo.";
                    }
                }else{
                    $image[0]="Tamaño máximo superado.";
                }

                //Mostramos la ficha con los datos
                verFicha($name,$image,$email,$date,$lenguajes);
                //Nos permite volver atrás y pintar el formulario
                btnVolver();

            }else{         
                //Pintamos el formulario
                echo "<body style='background-color:antiquewhite'>";
        ?>

        <div class="container mt-5">
            <p class='text-xl-center font-weight-bold mt-2'>Formulario</p>
            <form name='uno' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST' ENCTYPE='multipart/form-data'
                class='mt-2 border border-success rounded p-4'>
                <div class='form-group row' style='display:flex; align-items:center'>
                    <div class="col-1">
                        <label for='name'><b>Nombre</b></label>
                    </div>
                    <div class='col-3'>
                        <input type='text' class='form-control' name='nombre' id='name' placeholder='Nombre' required />
                    </div>
                    <div class='col-1'>
                        <label for='email'><b>E-Mail</b></label>
                    </div>
                    <div class='col-3'>
                        <input type='email' class='form-control' name='email' id='email' placeholder='Email' required />
                    </div>
                    <div class='col-1'>
                        <label for='fecha'><b>Fecha:</b></label>

                    </div>
                    <div class='col-3'>
                        <input type='date' class='form-control' name='fecha' id='fecha' required />
                    </div>

                </div>
                <div class='form-group'>
                    <label><b>Conocimientos</b></label>
                    <table cellpadding='6' cellspacing='3'>
                        <tr>
                            <td>C++</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='C++'></td>
                            <td>Python</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='Python'></td>
                            <td>Java</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='Java'></td>
                            <td>Php</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='Php'></td>
                            <td>C#</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='C#'></td>
                            <td>JavaScript</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='JavaScript'></td>
                        </tr>
                        <tr>
                            <td>SQL</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='SQL'></td>
                            <td>PL/SQL</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='PL/SQL'></td>
                            <td>Angular</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='Angular'></td>
                            <td>Laravel</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='Laravel'></td>
                            <td>Css</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='Css'></td>
                            <td>Html</td>
                            <td><input type='checkbox' name='cono[]' class='form-control' value='Html'></td>
                        </tr>
                    </table>

                </div>
                <div class="form-group">

                    <label for="estudios"><b>Estudios</b></label>

                    <select class="custom-select" id="estudios" multiple name='estudios[]'>
                        <option value='0' selected>Elige...</option>
                        <option>ESO</option>
                        <option>Bachillerato</option>
                        <option>Grado Medio</option>
                        <option>Grado Superior</option>
                        <option>Universitarios</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label for='file'><b>Foto Pérfil (2MB máximo):</b>&nbsp;&nbsp;</label>
                    <input type='hidden' name='MAX_FILE_SIZE' value='2000000' />
                    <input type='file' name='foto' required>
                </div>
                <div class='form-group text-center'>
                    <input type='submit' value='Enviar' class='btn btn-info' name='enviar'>
                    <input type='reset' value='Limpiar' class='btn btn-warning'>
                </div>

            </form>
        </div>
        <?php } ?>
    </body>

</html>