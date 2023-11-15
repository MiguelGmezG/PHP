<?php
$alumnos = [
    [1, 'Alumno1', 19, 1.68],
    [2, 'Alumno2', 21, 1.10],
    [3, 'Alumno3', 26, 1],
    [4, 'Alumno4', 22, 2.5],
    [5, 'Alumno5', 30, 2]
];
$mediaEdad = 0;
$alumnosMayores18 = 0;
$alumnosAlturaMayor175 = 0;
for ($i = 0; $i < count($alumnos); $i++) {
    $edad = $alumnos[$i][2];
    $altura = $alumnos[$i][3];
    $mediaEdad += $edad;
    if ($edad > 18) {
        $alumnosMayores18++;
    }
    if ($altura > 1.75) {
        $alumnosAlturaMayor175++;
    }
}
$mediaEdad /= count($alumnos);
echo "Edad media: " . $mediaEdad . '<br>';
echo "Cantidad de alumnos mayores de 18 años: " . $alumnosMayores18 . '<br>';
echo "Cantidad de alumnos que miden más de 1.75 metros: " . $alumnosAlturaMayor175 . '<br>';
?>