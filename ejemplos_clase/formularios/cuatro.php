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

            $words=[
                $_POST['p1'],
                $_POST['p2'],
                $_POST['p3'],
                $_POST['p4']
            ];

            sort($words);

            print_r($words);

            echo "<p class='text-center mt-5'>";
            echo "<a href='cuatro.php' class='btn btn-primary'>Volver</a>";
            echo "</p>";
        }else {

    ?>
        <div class='container mt-5'>
            <form name='name' action='cuatro.php' method='POST'>
                <input type='text' placeholder='Palabra 1' name='p1' required>
                <br>
                <input type='text' placeholder='Palabra 2' name='p2' required>
                <br>
                <input type='text' placeholder='Palabra 3' name='p3' required>
                <br>
                <input type='text' placeholder='Palabra 3' name='p4' required>
                <br>
                <p class='text-center mt-10'>
                    <input type='submit' value='Ordenar' name='btnEnviar' class='btn btn-primary'>
                    <input type='reset' value='Limpiar' class='btn btn-primary'>
                </p>
            </form>
        </div>
        <?php
        }
    ?>
    </body>
</html>