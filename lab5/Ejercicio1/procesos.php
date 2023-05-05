<?php
    $nom = $_POST['noap'];
?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio1-1</title>
</head>
<body>
    <div class="container">
        <?php
            echo '<h1 class="mb-3 my-4">Bienvenido ' . $nom . '!</h1>';
        ?>
        <form method="post" action="resultado.php">
            <div class="mb-3">
                <label class="form-label">Importe total vendido del mes</label>
                <input required id="itvm" name="itvm" type="number" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Cuántos hijos tiene?</label>
                <input required id="hjo" name="hjo" type="number" class="form-control">
            </div>    

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>