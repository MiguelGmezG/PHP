<?php 
$nombre= "Miguel";
$edad= 16;
if ($nombre!=null) {
    if ($edad!=null) {
        echo 'Hola '.$nombre.', tienes '.$edad.' años';
    }else{
        echo 'Hola '.$nombre.', no se tu edad';
    }
}else{
    echo 'Hola desconocido';
}
?>