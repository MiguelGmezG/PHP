<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <form action="crear_sesion.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" required>
        <br>
        <label for="clave">Contraseña:</label>
        <input type="password" name="clave" required>
        <br>
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
