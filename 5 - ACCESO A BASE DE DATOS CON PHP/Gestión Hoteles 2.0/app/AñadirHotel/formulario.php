<?php
$mensaje = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $estrellas = $_POST['estrellas'];
    $habitaciones = $_POST['habitaciones'];
    $poblacion = $_POST['poblacion'];
    $direccion = $_POST['direccion'];

    $imagen = $_FILES['imagen'];
    $imagen_nombre = $imagen['name'];
    $imagen_temp = $imagen['tmp_name'];
    $imagen_ruta = '../../database/img/' . $imagen_nombre;

    move_uploaded_file($imagen_temp, $imagen_ruta);

    // Conectar a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hoteles";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar la consulta SQL
    $sql = "INSERT INTO hoteles (Nombre, Categoria, Habitacion, Poblacion, Direccion, Imagen) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("siiiss", $nombre, $estrellas, $habitaciones, $poblacion, $direccion, $imagen_ruta);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        $mensaje = "Datos insertados correctamente en la base de datos.";
    } else {
        $mensaje = "Error al insertar datos en la base de datos: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="://cdn.jsdelivr.net/npm/sweetalert2@10">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Tu Sitio</title>
</head>

<body>
    <header>
    <nav>
        <div class="logo">
            <a href="../Recepcion/index.php"><img src="../../src/logo1.png" alt="Logo"></a>
            <a href="../Recepcion/index.php"><img src="../../src/logo.png" alt="Logo"></a>
        </div>
        <ul class="nav-links">
            <li><a href="../Recepcion/index.php">Recepción</a></li>
            <li><a href="../RestaurarBD/index.html">Restaurar</a></li>
            <li><a href="../AñadirHotel/index.html">Añadir Hotel</a></li>
            <li><a href="../BorrarHotel/index.html">Borrar Hotel</a></li>
            <li><a href="../ModificarHotel/index.html">Modificar Hotel</a></li>
        </ul>
    </nav>
    </header>
    </div>
    <div class="table-container">
        <?php
        if (!empty($mensaje)) {
            echo "<p>$mensaje</p>";
        }
        ?>
    </div>
    <footer>
        <p>Author: Miguel Gómez ©Copyright </p>
    </footer>
</body>

</html>