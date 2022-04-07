<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$nombre = $_POST['nombre'];    
$precio = $_POST['precio'];

$precioDescuento = $precio - ($precio * 0.25);

echo "<h1>Compra realizada</h1>";
echo "<h2>Precio Original</h2>";
echo "Prenda: $nombre | Precio: $" . $precio;
echo "<h2>Precio de Descuento</h2>";
echo "Prenda: $nombre | Precio: $" . $precioDescuento;
?>
</body>
</html>