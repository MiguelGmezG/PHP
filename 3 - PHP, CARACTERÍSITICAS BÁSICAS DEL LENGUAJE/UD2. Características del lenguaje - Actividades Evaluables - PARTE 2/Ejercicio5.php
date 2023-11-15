<?php
$array=[10,15,20,50,14,18,54,56,435,123,4,5,2,1,54,5,75,41,687,0];
for ($i=0; $i < count($array); $i++) { 
    if ($array[$i]==0) {
        echo 'Se a encontrado un 0, en la posicion del array numero '.$i;
        break;
    }
}
if ($i==count($array)) {
    echo 'No hay ningun 0 en el array';
}
?>