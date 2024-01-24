<?php
include './servidor.php';

$conexion = new ConexionBD();

    $nombre = $_GET['nombre'];
    $categoria = $_GET['categoria'];
    $habitacion = $_GET['habitacion'];
    $poblacion = $_GET['poblacion'];
    $direccion = $_GET['direccion'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($nombre !== null && $categoria !== null && $habitacion !== null && $poblacion !== null && $direccion !== null) {
        $hotel = $conexion->añadeHotel($nombre, $categoria, $habitacion, $poblacion, $direccion);
        $hoteles = $conexion->getHoteles();
        header('Content-Type: application/json');
        echo json_encode($hoteles);
    } else {
        echo json_encode(['error' => 'Faltan datos necesarios para añadir el hotel.']);
    }
}