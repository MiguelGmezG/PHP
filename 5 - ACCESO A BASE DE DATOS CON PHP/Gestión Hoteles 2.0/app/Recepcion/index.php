<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
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
                <li><a href="../RestaurarBD/index.html">Restaurar</a></li>
                <li><a href="../AñadirHotel/index.html">Añadir Hotel</a></li>
                <li><a href="../BorrarHotel/index.html">Borrar Hotel</a></li>
                <li><a href="../ModificarHotel/index.html">Modificar Hotel</a></li>
            </ul>
        </nav>
    </header>
    <div class="main-content">
        <div class="content-box">
            <a href="../NuestrosHoteles/index.php"><img src="../../src/unete.jpg" alt="Imagen 1"></a>
            <p>¿Volvemos a empezar?</p><br>
            <a href="../RestaurarBD/index.html" class="boton">Unete</a>
        </div>

        <div class="content-box">
            <a href="../AñadirHotel/index.html"><img src="../../src/nuestros.jpg" alt="Imagen 2"></a>
            <p>¡Unete a nosotros!</p><br>
            <a href="../AñadirHotel/index.html" class="boton">Añadir</a>
        </div>

        <div class="content-box">
            <a href=""><img src="../../src/tevas.jpg" alt="Imagen 3"></a>
            <p>¿Te vas?</p><br>
            <a href="../BorrarHotel/index.html" class="boton">Borrar</a>
        </div>
        <div class="content-box">
            <a href=""><img src="../../src/tevas.jpg" alt="Imagen 3"></a>
            <p>¿Has hecho reforma?</p><br>
            <a href="../ModificarHotel/index.html" class="boton">Modificar</a>
        </div>
    </div>
    <div class="table-container">
        <h1>Lista de hoteles</h1>
        <table class="styled-table">
            <?php
            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "hoteles";

            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar la conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Consulta SQL para obtener datos de la base de datos
            $sql_select_data = "SELECT * FROM `hoteles`";
            $result = $conn->query($sql_select_data);

            // Verificar si se obtuvieron resultados
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';

                    foreach ($row as $key => $value) {
                        echo "<td>";

                        if ($key === 'Imagen') {
                            echo "<img src='$value' class='image-container'>";
                        } else {
                            echo $value;
                        }

                        echo "</td>";
                    }

                    echo '</tr>';
                }
            } else {
                echo "No se encontraron resultados en la base de datos.";
            }

            // Cerrar la conexión
            $conn->close();
            ?>
        </table>
        <br>
    </div>
    <footer>
        <p>Author: Miguel Gómez ©Copyright </p>
    </footer>
</body>

</html>