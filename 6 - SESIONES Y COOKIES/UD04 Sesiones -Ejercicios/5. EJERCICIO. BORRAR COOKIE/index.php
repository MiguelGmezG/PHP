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
    if (isset($_COOKIE['email'])) {
        $email = $_COOKIE['email'];
        echo "<h1>Bienvenido de nuevo, $email!</h1>";
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            
            if (isset($_POST["alm"]) && $_POST["alm"]) {
                setcookie('email', $email, time() + (86400 * 30), "/");
                echo "<h1>Bienvenido, $email! Tu email ha sido guardado.</h1>";
            } else {
                echo "<h1>Bienvenido, $email! Tu email no ha sido guardado.</h1>";
            }
        } else {
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

