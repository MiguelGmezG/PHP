<?php
session_start();

if (!isset($_SESSION['esAdmin']) || $_SESSION['esAdmin'] !== true) {
    header('Location: ejercicio11a.html');
    exit();
}

$usuario = $_SESSION['usuario'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Información del Usuario</title>
</head>
<body>
    <h2>Información del Usuario</h2>
    <p>¡Bienvenido, <?php echo $usuario; ?>!</p>
    <p>Aquí puedes mostrar más detalles sobre el usuario administrador.</p>
    <p><a href="ejercicio11a.html">Cerrar Sesión</a></p>
</body>
</html>
