<?php
const MAX = 100;
for ($i = 5; $i <= MAX; ($i = $i + 5)) {
    echo $i . '<br>';
}
echo '<br>';
$a = 5;
while ($a <= MAX) {
    echo $a . '<br>';
    $a = $a + 5;
}
echo '<br>';
$c = 0;
do {
    echo $c . '<br>';
    $c = $c + 5;
} while ($c <= MAX);
?>
