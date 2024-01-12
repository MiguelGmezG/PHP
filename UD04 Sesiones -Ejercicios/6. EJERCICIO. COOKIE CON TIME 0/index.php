<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Página de Inicio de Sesión</title>
</head>
<body>
    <?php
        function validarCredenciales($usuario, $clave) {
            return ($usuario === 'usuario' && $clave === 'clave');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'];
            $clave = $_POST['clave'];

            if (validarCredenciales($usuario, $clave)) {
                setcookie("usuarioValidado", "true", 0, "/");
                
                header('Location: pagina_principal.php');
                exit();
            } else {
                echo '<p style="color: red;">Usuario o contraseña incorrectos. Inténtelo de nuevo.</p>';
            }
        }
    ?>

    <h2>Iniciar Sesión</h2>
    <form method="post" action="">
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
