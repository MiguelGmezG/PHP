<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>

<body>
    <?php
    // Verificar si la cookie 'nombre' está
    if (isset($_COOKIE['nombre'])) {
        // Si está establecida, obtener el nombre almacenado 
        $nombre = $_COOKIE['nombre'];
        echo "<h1>Bienvenido de nuevo, $nombre!</h1>";
    } else {
        // Si la cookie no está establecida,  se ha enviado en el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener el valor del formulario
            $nombre = $_POST["nombre"];

            // Establecer la cookie con el nombre ingresado
            setcookie('nombre', $nombre, time() + (86400 * 30), "/");

            echo "<h1>Bienvenido, $nombre!</h1>";
        } else {
            // Si el formulario no se ha enviado, mostrar el formulario para ingresar el nombre
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
