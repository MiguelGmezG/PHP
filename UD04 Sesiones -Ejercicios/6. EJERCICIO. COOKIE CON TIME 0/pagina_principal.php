<?php
    if (!isset($_COOKIE['usuarioValidado']) || $_COOKIE['usuarioValidado'] !== 'true') {
        header('Location: index.php');
        exit();
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
    <ul>
        <li><a href="#">Empresa</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
    </ul>
</body>
</html>
