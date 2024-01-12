<?php
session_start();

if (!isset($_SESSION['horaEntrada'])) {
    $_SESSION['horaEntrada'] = time();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Página Principal</title>
</head>
<body>
    <h2>Bienvenido a la Página Principal</h2>
    <p>Contenido de la página principal...</p>
    <p><a href="salir.php">Salir</a></p>
</body>
</html>
