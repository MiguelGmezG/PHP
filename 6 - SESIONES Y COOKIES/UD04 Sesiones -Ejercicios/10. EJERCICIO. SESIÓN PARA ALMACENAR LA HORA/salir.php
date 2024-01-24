<?php
session_start();

if (!isset($_SESSION['horaEntrada'])) {
    header('Location: index.php');
    exit();
}

$_SESSION['horaSalida'] = time();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Saliendo...</title>
</head>
<body>
    <h2>Hasta luego</h2>
    <?php
    $tiempoTranscurrido = $_SESSION['horaSalida'] - $_SESSION['horaEntrada'];
    echo '<p>Ha estado accediendo durante ' . gmdate("H:i:s", $tiempoTranscurrido) . '</p>';
    ?>

    <p><a href="index.php">Volver a la Página Principal</a></p>

    <?php
    session_unset();
    session_destroy();
    ?>
</body>
</html>
