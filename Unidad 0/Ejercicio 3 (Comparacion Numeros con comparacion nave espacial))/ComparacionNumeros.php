<?php
$numero1 = 15;
$numero2 = 12;
switch ($numero1 <=> $numero2) {
    case 0:
        echo 'El ' . $numero1 . ' es igual que el ' . $numero2;
        break;
    case -1:
        echo 'El ' . $numero2 . ' es mayor';
        break;
    case 1:
        echo 'El ' . $numero1 . ' es mayor';
        break;
}
?>