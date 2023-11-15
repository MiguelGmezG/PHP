<?php
$codigo =1;
$nombre="Tom";
$apellidos="Smith";
$puesto="Vendedor";
$sueldo=75000;
$edad=26;
$num_hijos=0;
$sucursal="New York";
if ($sueldo>70000) {
    $sueldo=$sueldo/1.10;
} else {
    $sueldo=$sueldo/1.20;
}
if ($edad>50 || $num_hijos>2) {
    $sueldo=$sueldo/1.05;
} else {
    $sueldo=$sueldo/1.10;
}
if ($sueldo>50000 && $sueldo<80000) {
    $sueldo=$sueldo/1.05;
} else {
    $sueldo=$sueldo/1.12;
}
if ($num_hijos<=2) {
    $sueldo=$sueldo/1.10;
} else {
    $sueldo=$sueldo/1.05;
}
echo 'Se le queda un sueldo de '.round($sueldo,2). '€';
?>