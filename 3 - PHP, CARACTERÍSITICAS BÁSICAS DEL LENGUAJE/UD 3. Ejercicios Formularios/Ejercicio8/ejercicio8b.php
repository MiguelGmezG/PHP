<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dato = $_POST["dato"];
    $filtro = $_POST["filtro"];

    $resultado = validarDato($dato, $filtro);

    echo "<p>El dato \"$dato\" es un $resultado.</p>";
}

function validarDato($dato, $filtro)
{
    switch ($filtro) {
        case "email":
            return filter_var($dato, FILTER_VALIDATE_EMAIL) !== false ? "email válido" : "email inválido";

        case "numeros":
            return is_numeric($dato) ? "números válidos" : "no son números";

        case "nif":
            return strlen($dato) == 9 ? "NIF válido" : "NIF inválido";

        case "texto":
            return preg_match("/^[a-zA-Z\s]+$/", $dato) ? "texto válido" : "texto inválido";

        default:
            return "Tipo de filtro no reconocido";
    }
}
?>
