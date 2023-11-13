<?php
const LIMITE = 100;
$aleatorio = rand(0, LIMITE);
echo 'El numero es '.$aleatorio. ' es un numero '.($aleatorio%2==0?'par':'impar').'<br> El limite es '.LIMITE;
?>
