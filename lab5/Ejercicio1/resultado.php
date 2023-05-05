<?php
    $itvm = $_POST['itvm'];
    $hijos = $_POST['hjo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio1-2</title>
</head>
<body>
    <div class="container">
        <?php
            $boni = $hijos * 50;
            $sbruto = 600 + ($itvm * 0.075);
            $dsc = $sbruto * 0.11;
            $paga = ($boni + $sbruto) - $dsc;
            
            echo '<div class="alert alert-primary my-5" role="alert">¡Buena! <br> Tu bonificación es de: S/' . $boni . ' soles <br> Tu sueldo es de: S/' . $sbruto . '  soles <br> El descuento del mes es de S/' . $dsc . ' soles <br> Y finalmente, el total de tu paga es de: S/' . $paga . ' soles!</div>';
        ?>
    </div>
</body>
</html>