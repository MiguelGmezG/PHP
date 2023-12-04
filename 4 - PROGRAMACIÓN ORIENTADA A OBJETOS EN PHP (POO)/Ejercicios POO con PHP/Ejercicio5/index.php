<?php
class Calculadora
{
    public static function sumar($valor1, $valor2)
    {
        return $valor1 + $valor2;
    }

    public static function restar($valor1, $valor2)
    {
        return $valor1 - $valor2;
    }

    public static function multiplicar($valor1, $valor2)
    {
        return $valor1 * $valor2;
    }

    public static function dividir($valor1, $valor2)
    {
        if ($valor2 != 0) {
            return $valor1 / $valor2;
        } else {
            throw new Exception("Error: No se puede dividir por cero.");
        }
    }
}

try {
    echo "Suma: " . Calculadora::sumar(5, 3) . "<br>";
    echo "Resta: " . Calculadora::restar(8, 2) . "<br>";
    echo "Multiplicación: " . Calculadora::multiplicar(4, 6) . "<br>";
    echo "División: " . Calculadora::dividir(10, 2) . "<br>";
    echo "División: " . Calculadora::dividir(10, 0) . "<br>";
} catch (Exception $e) {
    echo $e->getMessage();
}
