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
                <a href="../Recepcion/index.html"><img src="../../src/logo1.png" alt="Logo"></a>
                <a href="../Recepcion/index.html"><img src="../../src/logo.png" alt="Logo"></a>
            </div>
            <ul class="nav-links">
                <li><a href="../Recepcion/index.html">Recepción</a></li>
                <li><a href="../AñadirHotel/index.html">Restaurar</a></li>
                <li><a href="../NuestrosHoteles/index.php">Añadir Hotel</a></li>
                <li><a href="borrar_hotel.html">Borrar Hotel</a></li>
                <li><a href="borrar_hotel.html">Modificar Hotel</a></li>
            </ul>
        </nav>
    </header>
    <div class="main-content">
        <div class="content-box">
            <a href="../NuestrosHoteles/index.php"><img src="../../src/unete.jpg" alt="Imagen 1"></a>
            <p>¡Unete a nosotros!</p><br>
            <a href="../NuestrosHoteles/index.php" class="boton">Unete</a>
        </div>

        <div class="content-box">
            <a href="../AñadirHotel/index.html" ><img src="../../src/nuestros.jpg" alt="Imagen 2"></a>
            <p>Añadir Hotel</p><br>
            <a href="../AñadirHotel/index.html" class="boton">Añadir</a>
        </div>

        <div class="content-box">
            <a href="" ><img src="../../src/tevas.jpg" alt="Imagen 3"></a>
            <p>Borrar Hotel</p><br>
            <a href="" class="boton">Borrar</a>
        </div>
        <div class="content-box">
            <a href="" ><img src="../../src/tevas.jpg" alt="Imagen 3"></a>
            <p>Modificar Hotel</p><br>
            <a href="" class="boton">Modificar</a>
        </div>
    </div>
    <div class="table-container">
        <h1>Lista de hoteles</h1>
        <table class="styled-table">
            <?php
            $start_row = 1;
            if (($csv_file = fopen("../../database/hoteles.csv", "r")) !== FALSE && $_SERVER['REQUEST_METHOD'] === 'GET') {
                while (($read_data = fgetcsv($csv_file, 1000, ",")) !== FALSE) {
                    echo '<tr>';
                    $start_row++;

                    for ($i = 0; $i < count($read_data); $i++) {
                        echo "<td>";

                        if ($i === 5) {
                            $image_path = $read_data[$i];
                            echo "<img src='$image_path' class='image-container'>";
                        } else {
                            echo $read_data[$i];
                        }

                        echo "</td>";
                    }

                    echo '</tr>';
                }

                fclose($csv_file);
            }
            ?>
        </table>
        <br>
    </div>
    <footer>
        <p>Author: Miguel Gómez ©Copyright </p>
    </footer>
</body>
</html>
