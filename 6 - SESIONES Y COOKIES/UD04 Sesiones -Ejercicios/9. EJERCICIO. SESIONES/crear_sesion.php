<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    if ($usuario === 'usuario' && $clave === 'clave') {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['logueado'] = true;

        header('Location: bienvenida.php');
        exit();
    } else {
        echo 'Usuario o contraseña incorrectos. Inténtelo de nuevo.';
    }
}
?>
