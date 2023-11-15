<?php
for ($i = 1; $i <= 10; $i++) {
    echo 'Tabla del ' . $i . '<br>**************<br>';
    for ($b = 1; $b <= 10; $b++) {
        echo $i . ' x ' . $b . ' = ' . $i * $b . '<br>';
    }
    echo '<br>';
}
