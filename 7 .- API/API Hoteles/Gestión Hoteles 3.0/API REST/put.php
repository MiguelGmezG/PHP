<?php
include './servidor.php';

$conexion = new ConexionBD();

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $idHotel = isset($_GET['ID']) ? $_GET['ID'] : null;

    if ($idHotel !== null) {
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : null;
        $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : null;
        $habitacion = isset($_GET['habitacion']) ? $_GET['habitacion'] : null;
        $poblacion = isset($_GET['poblacion']) ? $_GET['poblacion'] : null;
        $direccion = isset($_GET['direccion']) ? $_GET['direccion'] : null;

        if ($nombre !== null && $categoria !== null && $habitacion !== null && $poblacion !== null && $direccion !== null) {
            $conexion->modificaHotel($idHotel, $nombre, $categoria, $habitacion, $poblacion, $direccion);

            $hoteles = $conexion->getHoteles();

            header('Content-Type: application/json');
            echo json_encode($hoteles);
        } else {
            echo json_encode(['error' => 'Faltan datos necesarios para modificar el hotel.']);
        }
    } else {
        echo json_encode(['error' => 'Falta el ID del hotel a modificar.']);
    }
}
