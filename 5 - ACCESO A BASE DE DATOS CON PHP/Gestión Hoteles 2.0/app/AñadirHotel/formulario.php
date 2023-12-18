<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $estrellas = $_POST['estrellas'];
    $habitaciones = $_POST['habitaciones'];
    $poblacion = $_POST['poblacion'];
    $direccion = $_POST['direccion'];

    $imagen = $_FILES['imagen'];
    $imagen_nombre = $imagen['name'];
    $imagen_temp = $imagen['tmp_name'];
    $imagen_ruta = '../../database/img/' . $imagen_nombre;

    move_uploaded_file($imagen_temp, $imagen_ruta);

    $datos = "$nombre,$estrellas,$habitaciones,$poblacion,$direccion,$imagen_ruta\n";

    $archivo_csv = fopen('../../database/hoteles.csv', 'a');
    fwrite($archivo_csv, $datos);
    fclose($archivo_csv);

    exit(); 
}
?>

