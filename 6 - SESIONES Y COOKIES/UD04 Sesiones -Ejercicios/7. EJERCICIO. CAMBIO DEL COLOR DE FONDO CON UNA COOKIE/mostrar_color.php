<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Color Seleccionado</title>
</head>
<body>
    <h2>Color Seleccionado</h2>

    <?php
        if (isset($_COOKIE['colorFondo'])) {
            $colorSeleccionado = $_COOKIE['colorFondo'];
            echo '<p style="background-color:' . $colorSeleccionado . ';">Color de fondo: ' . $colorSeleccionado . '</p>';
        } else {
            echo '<p>No se ha seleccionado ningún color.</p>';
        }
    ?>

    <p><a href="index.php">Volver a la página inicial</a></p>
</body>
</html>
