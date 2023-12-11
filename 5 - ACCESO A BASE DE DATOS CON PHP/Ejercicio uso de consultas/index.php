<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" type="text/css" href="tienda.css">
</head>

<body>

    <h2>Seleccionar Fabricante</h2>
    <div class="form-ctn">
        <form method="get" action="">
            <label for="id">Seleccionar ID del fabricante:</label>

            <select name="id" id="id">

                <?php
                // Conexión a la base de datos 
                $server = 'mysql:host=localhost;dbname=tienda;charset=utf8';
                $user = 'root';
                $password = '';

                try {
                    $pdo = new PDO($server, $user, $password);
                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    $query = "SELECT codigo FROM fabricante";
                    $stmt = $pdo->query($query);

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        $selected = (isset($_GET['id']) && $_GET['id'] == $row['id']) ? 'selected' : '';
                        echo '<option value="' . $row['codigo'] . '" ' . $selected . '>' . htmlspecialchars($row['codigo']) . '</option>';
                    }
                } catch (PDOException $e) {
                    echo 'Error de conexión a la base de datos: ' . $e->getMessage();
                }
                ?>
            </select>
            <input type="submit" value="Mostrar Fabricante">
        </form>
    </div>
    <p>##########################################################################</p>

    <?php
    if (isset($_GET['id'])) {
        // Mostrar los datos del fabricante seleccionado
        $selectedid = $_GET['id'];

        try {
            $query = "SELECT codigo, nombre FROM fabricante WHERE codigo = $selectedid";
            $stmt = $pdo->query($query);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                echo '<h2>' . htmlspecialchars($row['codigo']) . '</h2>';
                echo '<p><strong>Nombre:</strong> ' . htmlspecialchars($row['nombre']) . '</p>';
            } else {
                echo '<p>No se encontró el fabricante seleccionado.</p>';
            }
        } catch (PDOException $e) {
            echo 'Error al obtener el fabricante: ' . $e->getMessage();
        }
    }

    // Cerrar la conexión a la base de datos
    $pdo = null;
    ?>

</body>

</html>