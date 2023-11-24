<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title>Ejercicio 4</title>
</head>

<body>
    <form action="" method="post">
        Escibe tu nombre: <input type="text" name="nombre"><br>

        Sexo:
        <input type="radio" name="Sexo" value="Hombre">Hombre
        <input type="radio" name="Sexo" value="Mujer">Mujer
        <br><br>

        Edad:
        <select id="edad" name="edad">
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
        </select><br><br>

        Peso kg: <input type="number" name="Peso"><br><br>

        Estado civil:
        <input type="radio" name="estado_civil" value="Soltero">Soltero
        <input type="radio" name="estado_civil" value="Casado">Casado
        <input type="radio" name="estado_civil" value="Otro">Otro
        <br><br>

        Selecciona tus aficiones:
        <br>
        <input type="checkbox" id="cine" name="aficiones[]" value="cine"> Cine
        <br>
        <input type="checkbox" id="literatura" name="aficiones[]" value="literatura"> Literatura
        <br>
        <input type="checkbox" id="tebeos" name="aficiones[]" value="tebeos"> Tebeos
        <br>
        <input type="checkbox" id="deporte" name="aficiones[]" value="deporte"> Deporte
        <br>
        <input type="checkbox" id="musica" name="aficiones[]" value="musica"> Música
        <br>
        <input type="checkbox" id="television" name="aficiones[]" value="television"> Televisión
        <br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </form>
</body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $sexo = $_POST["Sexo"];
    $edad = $_POST["edad"];
    $peso = $_POST["Peso"];
    $estadoCivil = $_POST["estado_civil"];
    $aficiones = isset($_POST["aficiones"]) ? $_POST["aficiones"] : [];

    header("Location: Ejercicio7b.php?nombre=$nombre&sexo=$sexo&edad=$edad&peso=$peso&estadoCivil=$estadoCivil&aficiones=" . implode(",", $aficiones));
    exit();
}
?>
</body>

</html>