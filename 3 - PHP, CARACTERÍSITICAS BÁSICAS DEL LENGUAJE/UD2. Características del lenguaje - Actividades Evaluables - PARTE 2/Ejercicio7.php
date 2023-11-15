<?php
$array=[5,8,74,75,14,-85,-75,-875,0,0];
$mediaP=0;
$mediaN=0;
$cantidad0=0;
for ($i=0; $i < count($array); $i++) { 
    if ($array[$i]<0) {
        $mediaN=$array[$i]+$mediaP;
    }if ($array[$i]>0) {
        $mediaP=$array[$i]+$mediaP;
    }if ($array[$i]==0) {
        $cantidad0++;
    }
    
}
echo 'La media de numeros positivos es '.$mediaP.'<br>La media de numeros negativos es '.$mediaN.'<br>El numero de ceros es '.$cantidad0;
?>