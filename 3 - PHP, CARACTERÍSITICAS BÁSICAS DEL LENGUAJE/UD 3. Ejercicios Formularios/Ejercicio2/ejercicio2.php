<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Ejercicio 2</title>
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
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $operacion = $_POST['operacion'];
        if ($operacion == '*') {
            echo $numero1 * $numero2;
        }
        if ($operacion == '+') {
            echo $numero1 + $numero2;
        }
        if ($operacion == '-') {
            echo $numero1 - $numero2;
        }
        if ($operacion == '/') {
            echo $numero1 / $numero2;
        }
    }
    ?>
</body>

</html>