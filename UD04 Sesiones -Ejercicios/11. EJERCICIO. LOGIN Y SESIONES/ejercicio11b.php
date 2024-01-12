<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    if ($usuario === 'usuario' && $clave === 'clave') {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['esAdmin'] = true;

        header('Location: informacion_usuario.php');
        exit();
    } else {
        $mensaje = "Acceso denegado. Usuario no autorizado.";
    }
}
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
    <?php
    if (isset($mensaje)) {
        echo "<p>$mensaje</p>";
    } else {
        if (isset($_SESSION['esAdmin']) && $_SESSION['esAdmin'] === true) {
            echo "<h2>Información del Usuario</h2>";
            echo "<p>Usuario: " . $_SESSION['usuario'] . "</p>";
        } else {
            echo "<p>Acceso denegado. Usuario no autorizado.</p>";
        }
    }
    ?>
</body>
</html>
