<?php
session_start();

if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header('Location: index.php');
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
    <title>Bienvenida</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $usuario; ?>!</h2>
    <p>Contenido de la página de bienvenida...</p>
    <p><a href="cerrar_sesion.php">Cerrar Sesión</a></p>
</body>
</html>
