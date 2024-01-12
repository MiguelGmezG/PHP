<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Bienvenido</title>
</head>

<body>
    <?php
    if (isset($_COOKIE['nombre'])) {
        $nombre = $_COOKIE['nombre'];
        echo "<h1>Bienvenido de nuevo, $nombre!</h1>";
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST["nombre"];

            setcookie('nombre', $nombre, time() + (86400 * 30), "/");

            echo "<h1>Bienvenido, $nombre!</h1>";
        } else {
    ?>
            <form method="post" action="">
                <label>Introduce tu nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
                <button type="submit">Enviar</button>
            </form>
    <?php
        }
    }
    ?>
</body>

</html>
