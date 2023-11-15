<?php
$a=0;
$b=1;
do {
    if ($a%2==0) {
        echo $a.'<br>';
        $b++;
    }
    $a++;
} while ($b <= 5);
?>