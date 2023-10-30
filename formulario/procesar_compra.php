<!DOCTYPE html>
<html>
<head>
    <title>Recibo de Compra</title>
</head>
<body>
    <h1>Recibo de Compra</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $prendas = $_POST["prendas"];
        $valorTotal = $_POST["valor_total"];
        $metodoPago = $_POST["metodo_pago"];
        $correo = $_POST["correo"];
        $numero = $_POST["numero"];
    ?>
    <p><strong>Cliente:</strong> <?php echo $nombre; ?></p>
    <p><strong>Prendas:</strong> <?php echo $prendas; ?></p>
    <p><strong>Valor Total:</strong> $<?php echo $valorTotal; ?></p>
    <p><strong>Método de Pago:</strong> <?php echo $metodoPago; ?></p>
    <p><strong>Correo:</strong> <?php echo $correo; ?></p>
    <p><strong>Número de Contacto:</strong> <?php echo $numero; ?></p>
    <?php
    } else {
        echo "No se recibieron datos de compra.";
    }
    ?>
</body>
</html>
