<?php
$array=[10,15,20,50,14,18,54,56,435,-1,123,4,5,2,1,54,5,75,41,687,0];
$media=0;
for ($i=0; $i < count($array); $i++) { 
    if ($array[$i]<0) {
        echo 'Se a encontrado un numero negarivo, en la posicion del array numero '.$i.' la media de todos los numeros anteriores es '.$media/$i.', redondeando '.round($media/$i);
        break;
    }
    $media=$array[$i]+$media;
}
if ($i==count($array)) {
    echo 'La media de todos los numeros es '.$media/$i;;
}
?>