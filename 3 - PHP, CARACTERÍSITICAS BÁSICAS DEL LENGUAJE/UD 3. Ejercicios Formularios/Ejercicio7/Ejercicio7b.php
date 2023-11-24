<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Ejercicio 4 - Resultados</title>
</head>

<body>
    <h2>Datos Recibidos:</h2>
    <?php
    $nombre = $_GET["nombre"];
    $sexo = $_GET["sexo"];
    $edad = $_GET["edad"];
    $peso = $_GET["peso"];
    $estadoCivil = $_GET["estadoCivil"];
    $aficiones = isset($_GET["aficiones"]) ? explode(",", $_GET["aficiones"]) : [];

    ?>
    <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
    <p><strong>Sexo:</strong> <?php echo $sexo; ?></p>
    <p><strong>Edad:</strong> <?php echo $edad; ?></p>
    <p><strong>Peso:</strong> <?php echo $peso; ?></p>
    <p><strong>Estado Civil:</strong> <?php echo $estadoCivil; ?></p>

    <p><strong>Aficiones:</strong>
        <?php
        if (!empty($aficiones)) {
            echo implode(', ', $aficiones);
        } else {
            echo "Ninguna seleccionada";
        }
        ?>
    </p>
    <button onclick="goBack()">Volver</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
