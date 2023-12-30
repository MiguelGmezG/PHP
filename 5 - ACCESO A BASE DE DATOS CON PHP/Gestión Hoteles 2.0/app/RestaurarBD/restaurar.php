<?php
$mensaje = "";

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hoteles";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Consulta SQL para eliminar la tabla si existe
$dropTableQuery = "DROP TABLE IF EXISTS `hoteles`";

// Consulta SQL para crear la tabla
$createTableQuery = "
CREATE TABLE `hoteles` (
  `Nombre` varchar(255) DEFAULT NULL,
  `Categoria` int(11) DEFAULT NULL,
  `Habitacion` int(11) DEFAULT NULL,
  `Poblacion` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
";

// Consulta SQL para insertar datos en la tabla
$insertDataQuery = "
INSERT INTO `hoteles` (`Nombre`, `Categoria`, `Habitacion`, `Poblacion`, `Direccion`, `Imagen`) VALUES
('Abashiti (NA)', 3, 168, '46013 Valencia', 'Avenida Ausias March, 59', '../../database/img/hotel1.jpg'),
('Abba Acteon (Abba Hoteles)', 4, 189, '46023 Valencia', 'Escultor Vicente Bertrán Grimal, 2', '../../database/img/hotel2.jpg'),
('Acta Atarazanas', 4, 42, '46011 Valencia', 'Plaza tribunas de las aguas, 4', '../../database/img/hotel3.jpg'),
('Acta del Carmen', 3, 25, '46003 Valencia', 'Blanquerías,11', '../../database/img/hotel4.jpg'),
('AC Valencia (AC hotels)', 4, 183, '46023 Valencia', 'Avenida Francia, 67', '../../database/img/hotel5.jpg'),
('Ad Hoc Monumental Valencia', 3, 28, '46003 Valencia', 'Boix, 4', '../../database/img/hotel6.jpg'),
('Alkazar', 1, 18, '46002 Valencia', 'Mosen Femades, 11', '../../database/img/hotel1.jpg');
";

// Ejecutar la consulta para eliminar la tabla
$conn->query($dropTableQuery);

// Ejecutar la consulta para crear la tabla
if ($conn->query($createTableQuery) === TRUE) {
    // Ejecutar la consulta para insertar datos en la tabla
    if ($conn->query($insertDataQuery) === TRUE) {
        $mensaje = "Base de datos restaurada correctamente.";
    } else {
        $mensaje = "Error al insertar datos en la base de datos: " . $conn->error;
    }
} else {
    $mensaje = "Error al crear la tabla: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

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