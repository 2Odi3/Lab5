<?php
    $tarifa = $_POST['tar'];
    $dalquiler = $_POST['dalq'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio 3-1</title>
</head>
<body>
    <div class="container">
    <?php
        $ibruto = $tarifa * $dalquiler;
        $descuento = $ibruto * 0.15;
        $ineto = $ibruto - $descuento;
        $lapiceros = $dalquiler * 3;

        echo '<div class="alert alert-primary my-5" role="alert">¡Buena! <br> El importe bruto es de: S/' . $ibruto . '. <br> El descuento es de: S/' . $descuento . '. <br> El importe a pagar (con descuento) es de: S/' . $ineto . '. <br> Y tendrás un obsequio de: ' . $lapiceros . ' lapieceros.</div>';
    ?>
    </div>
</body>
</html>