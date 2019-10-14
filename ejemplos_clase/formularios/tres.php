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
        if(isset($_POST['btnEnviar'])){
            //hemos pulsado Enviar
            echo "Tu nombre es: ".$_POST['nombre'];
            echo "<br>Tu mail por lo visto es: ".$_POST['email'];
            echo "<br>La fecha es: ".$_POST['fecha'];
            echo "<p class='text-center mt-5'>";
            echo "<a href='tres.php' class='btn btn-primary'>Volver</a>";
            echo "</p>";
        }else {

    ?>
        <div class='container mt-5'>
            <form name='name' action='tres.php' method='POST'>
                <input type='text' placeholder='Tu Nombre' name='nombre' required>
                <br>
                <input type='email' placeholder='Tu e-mail' name='email' required>
                <br><br>
                Fecha Nacimiento:&nbsp;&nbsp;&nbsp;<input type='date' name='fecha'>
                <p class='text-center mt-10'>
                    <input type='submit' value='Enviar' name='btnEnviar' class='btn btn-primary'>
                    <input type='reset' value='Limpiar' class='btn btn-primary'>
                </p>
            </form>
        </div>
        <?php
        }
    ?>
    </body>
</html>