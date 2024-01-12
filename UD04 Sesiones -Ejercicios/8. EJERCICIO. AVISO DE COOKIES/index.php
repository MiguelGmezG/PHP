<?php
$cookieAceptada = isset($_COOKIE['cookieAceptada']) && $_COOKIE['cookieAceptada'] === 'true';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">

    <title>Tu Página Web</title>
    <style>
        #aviso-cookies {
            display: <?php echo $cookieAceptada ? 'none' : 'block'; ?>;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #f0f0f0;
            padding: 10px;
            text-align: center;
            box-shadow: 0px -5px 10px rgba(0, 0, 0, 0.2);
        }

        #aviso-cookies button {
            padding: 5px 10px;
            background: #3498db;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        #cookies-aceptadas {
            display: <?php echo $cookieAceptada ? 'block' : 'none'; ?>;
            color: #2ecc71;
            font-weight: bold;
            text-align: center;
            padding: 10px;
            background: #f0f0f0;
            margin-top: 20px;
        }
    </style>
    <script>
        function aceptarCookies() {
            document.cookie = "cookieAceptada=true; expires=Thu, 01 Jan 2030 00:00:00 UTC; path=/";

            document.getElementById('aviso-cookies').style.display = 'none';

            document.getElementById('cookies-aceptadas').style.display = 'block';
        }
    </script>
</head>
<body>
    <h1>Bienvenido</h1>

    <div id="aviso-cookies">
        <p>Este sitio web utiliza cookies para mejorar la experiencia de navegación. Al continuar, acepta el uso de cookies.</p>
        <button onclick="aceptarCookies()">Aceptar</button>
        <a href="informacion_cookies.php">Más información</a>
    </div>

    <div id="cookies-aceptadas">Cookies aceptadas</div>
</body>
</html>
