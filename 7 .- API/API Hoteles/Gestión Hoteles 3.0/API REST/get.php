<?php
include './servidor.php';

try {
    $conexion = new ConexionBD('localhost', 'root', '', 'hoteles');
    $hoteles = $conexion->getHoteles();

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        header('Content-Type: application/json');
        echo json_encode($hoteles);
    }
} catch (Exception $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
