<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
        <?php
        if(isset($_COOKIE['visitas'])) {
            $visitas = $_COOKIE['visitas'] + 1;
        } else {
            $visitas = 1;
        }
        
        setcookie('visitas', $visitas, time() + 365 * 24 * 60 * 60);
        
        echo "<h1>Bienvenido a la página</h1>";
        echo "<p>Esta es tu visita número $visitas.</p>";
        ?>
        
</body>
</html>
