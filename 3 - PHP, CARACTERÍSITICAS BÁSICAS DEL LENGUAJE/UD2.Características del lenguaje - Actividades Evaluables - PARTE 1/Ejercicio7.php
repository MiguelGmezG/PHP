<?php
$nomina=1000;
if ($nomina<800) {
    $incremento=21;
    $resultado=$nomina*1.21;
}if ($nomina<1200 && $nomina>800) {
    $incremento=0;
    $resultado=$nomina;
}if ($nomina>1200) {
    $incremento=15;
    $resultado=$nomina*1.15;
}
echo 'La nómina que tienes es '.$nomina.' se le a sumado un incremento del '.$incremento.'% y se a quedado en '.$resultado;
?>