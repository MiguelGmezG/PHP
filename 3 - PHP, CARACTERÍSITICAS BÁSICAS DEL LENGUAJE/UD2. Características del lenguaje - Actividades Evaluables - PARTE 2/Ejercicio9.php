<?php
$facturas = [
    [1234, 20, 11],
    [2345, 40, 5.2],
    [3567, 25, 2],
    [4567, 89, 2],
    [5678, 24, 3]
];
$faturacionTotal = 0;
$cantidadLitrosFactura1 = $facturas[1][1];
$factura600 = 0;

for ($i = 0; $i < count($facturas); $i++) {
    $faturacionTotal += $facturas[$i][1] * $facturas[$i][2];
    if (($facturas[$i][1] * $facturas[$i][2]) > 600) {
        $factura600++;
    }
}
echo "Faturación Total: " . $faturacionTotal . "€<br>";
echo "Cantidad de litros de la Factura 1: " . $cantidadLitrosFactura1 . " litros<br>";
echo "Número de facturas con faturación mayor a 600: " . $factura600 . "<br>";
?>
