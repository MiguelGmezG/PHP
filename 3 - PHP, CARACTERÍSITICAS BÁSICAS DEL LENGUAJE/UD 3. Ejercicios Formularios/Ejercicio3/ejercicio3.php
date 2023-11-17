<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Ejercicio 3</title>
</head>

<body>
    <form action="" method="post">
        Número 1: <input type="number" name="numero1"><br>
        Número 2: <input type="number" name="numero2"><br>
        <label><input type="radio" name="operacion" value="*">*</label>
        <label><input type="radio" name="operacion" value="+">+</label>
        <label><input type="radio" name="operacion" value="-">-</label>
        <label><input type="radio" name="operacion" value="/">/</label><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        try {
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacion = $_POST['operacion'];
            switch ($operacion) {
                case '*':
                    echo $numero1 * $numero2;
                    break;
                case '+':
                    echo $numero1 + $numero2;
                    break;
                case '-':
                    echo $numero1 - $numero2;
                    break;
                case '/':
                    if ($numero2 != 0) {
                        echo $numero1 / $numero2;
                    } else {
                        throw new Exception("Error: División por cero.");
                    }
                    break;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    ?>
</body>

</html>