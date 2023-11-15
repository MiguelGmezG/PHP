<?php
$producto='Entrada del row x blackworks';
const IVA = 1.21;
$cantidad = 3;
$precio= 100;
echo 'El precio base de '.$producto.' es de '.$precio.'€ mas un 21% de IVA se quedaria en '.($precio*IVA).' y al ser '.$cantidad.' productos, el precio final se queda en '.(($precio*$cantidad)*IVA).'€ IVA incluido.';
?>