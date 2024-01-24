<?php
include './servidor.php';

$conexion = new ConexionBD();

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $idHotel = isset($_GET['ID']) ? $_GET['ID'] : null;

    if ($idHotel !== null) {
        $conexion->borraHotel($idHotel);

        $hoteles = $conexion->getHoteles();

        header('Content-Type: application/json');
        echo json_encode($hoteles);
    } else {
        echo json_encode(['error' => 'Falta el ID del hotel a borrar.']);
    }
}
