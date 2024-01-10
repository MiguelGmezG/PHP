<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>

<body>
    <?php
    // Verificar si la cookie 'email' está establecida
    if (isset($_COOKIE['email'])) {
        // Si está establecida, obtener el nombre almacenado
        $email = $_COOKIE['email'];
        echo "<h1>Bienvenido de nuevo, $email!</h1>";
    } else {
        // Si la cookie no está establecida, se ha enviado el formulario
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener el valor del formulario
            $email = $_POST["email"];
            
            if (isset($_POST["alm"]) && $_POST["alm"]) {
                // Si la casilla de verificación está marcada, guardar la cookie
                setcookie('email', $email, time() + (86400 * 30), "/");
                echo "<h1>Bienvenido, $email! Tu email ha sido guardado.</h1>";
            } else {
                echo "<h1>Bienvenido, $email! Tu email no ha sido guardado.</h1>";
            }
        } else {
            // Si el formulario no se ha enviado, mostrar el formulario para ingresar el nombre
    ?>
            <form method="post" action="">
                <label>Introduce tu email:</label>
                <input type="text" id="email" name="email" required>
                <br><label>¿Quieres que lo guardemos?</label>
                <input type="checkbox" id="alm" name="alm">
                <br><button type="submit">Enviar</button>
            </form>
    <?php
        }
    }
    ?>
</body>

</html>

