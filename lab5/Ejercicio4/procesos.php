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
    <title>Ejercicio4</title>
</head>
<body>
    
    <div class="container">
    <?php
            $icompra = $precio * $cantidad;
            $idescuento = ($icompra * 0.05) + (($icompra - ($icompra * 0.05)) * 0.05);
            $ipagar = $icompra - $idescuento;

            echo '<div class="alert alert-primary my-5" role="alert">¡Buena! <br> El importe de compra es de: S/' . $icompra . '. <br> El descuento es de: S/' . $idescuento . '. <br> El total a pagar es de: S/' . $ipagar . '.</div>';
        ?>
    </div>

</body>
</html>

