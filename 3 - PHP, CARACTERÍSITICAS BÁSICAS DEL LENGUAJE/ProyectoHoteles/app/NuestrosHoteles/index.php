<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ver Hoteles</title>
    <link rel="stylesheet" href="styles.css">
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
                <li><a href="../AñadirHotel/index.html">Unete a nosotros</a></li>
                <li><a href="../NuestrosHoteles/index.php">Nuestros Hoteles</a></li>
                <li><a href="borrar_hotel.html">¿Te separas?</a></li>
            </ul>
        </nav>
    </header>

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
        <button href="../Recepcion/index.html" class="boton">Volver al Inicio</button>
    </div>
<br>
<footer>
        <p>Author: Miguel Gómez ©Copyright </p>
    </footer>
</body>

</html>