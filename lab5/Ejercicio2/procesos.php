<?php
    $precio = $_POST['pre'];
    $cantidad = $_POST['cant'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Ejercicio2-1</title>
</head>
<body>
    <div class="container">
        <?php
            $nprecio = $precio - ($precio * 0.05);
            $importe = $nprecio * $cantidad;
            $descuento = $importe * 0.07;
            $pimporte = $importe - $descuento;
            $obsequio = $cantidad * 2;

            echo '<div class="alert alert-primary my-5" role="alert">¡Buena! <br> El nuevo precio es de: S/' . $nprecio . ' cada unidad. <br> El importe es de: S/' . $importe . ' <br> El descuento es de: S/' . $descuento . '. <br> El importe a pagar (con descuento) es de: S/' . $pimporte . '. <br> Y tendrás un obsequio de: ' . $obsequio . '.</div>';
        ?>
    </div>
</body>
</html>