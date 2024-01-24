<?php
include './servidor.php';

try {
    $conexion = new ConexionBD('localhost', 'root', '', 'hoteles');

    $id = isset($_GET['id']) ? $_GET['id'] : null;

    $hotel = $conexion->getHotelById($id);

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        header('Content-Type: application/json');
        echo json_encode($hotel);
    }
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
