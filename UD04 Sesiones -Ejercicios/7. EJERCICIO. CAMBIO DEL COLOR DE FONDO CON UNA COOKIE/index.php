<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Selección de Color</title>
    <script>
        function aplicarColor() {
            var colorSeleccionado = document.getElementById('colorSelector').value;
            document.body.style.backgroundColor = colorSeleccionado;

            document.cookie = "colorFondo=" + encodeURIComponent(colorSeleccionado) + "; path=/";
        }

        function eliminarCookie() {
            document.cookie = "colorFondo=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";

            document.body.style.backgroundColor = '';
        }
    </script>
</head>
<body>
    <h2>Seleccionar Color de Fondo</h2>
    
    <label for="colorSelector">Selecciona un color:</label>
    <select id="colorSelector">
        <option value="red">Rojo</option>
        <option value="green">Verde</option>
        <option value="blue">Azul</option>
    </select>
    
    <button onclick="aplicarColor()">Enviar</button>
    <button onclick="eliminarCookie()">Eliminar Cookie</button>

    <p><a href="mostrar_color.php">Ver color seleccionado</a></p>
</body>
</html>
