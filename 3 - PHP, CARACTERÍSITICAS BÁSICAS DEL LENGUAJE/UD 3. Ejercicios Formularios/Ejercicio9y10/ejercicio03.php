<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $confirmar_password = $_POST["confirmar_password"];
    $bloqueado = isset($_POST["bloqueado"]) ? $_POST["bloqueado"] : "";
    $departamentos = isset($_POST["departamento"]) ? $_POST["departamento"] : [];
    $foto = $_FILES["foto"];

    $errores = [];

    if (empty($nombre)) {
        $errores[] = "ERROR: Debe introducir un nombre válido.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "ERROR: Debe introducir un email válido.";
    }

    if (empty($usuario)) {
        $errores[] = "ERROR: Debe introducir un nombre de usuario válido.";
    }

    if ($password != $confirmar_password) {
        $errores[] = "ERROR: Las contraseñas no coinciden.";
    }

    $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];


    if (!in_array($foto['type'], $allowed_types)) {
        $errores[] = "ERROR: Archivo de foto no válido. Asegúrate de que sea una imagen.";
    }

    if (!empty($errores)) {
        foreach ($errores as $error) {
            echo "<p>$error</p>";
        }
    } else {
        echo "Nombre: $nombre<br><br>";
        echo "E-mail: $email<br><br>";
        echo "Usuario: $usuario<br><br>";
        echo "Contraseña: (oculta por seguridad)<br><br>";
        echo "Bloqueado: " . ($bloqueado == "si" ? "Sí" : "No") . "<br><br>";
        echo "Departamentos: " . implode(", ", $departamentos) . "<br><br>";
        echo "Foto: <br><img src=\"data:" . $foto['type'] . ";base64," . base64_encode(file_get_contents($foto['tmp_name'])) . "\">";
    }
}
?>

