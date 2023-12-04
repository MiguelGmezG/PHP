<?php

class Calculadora
{
    private static $valor1 = 8;

    public static function sumar($valor2)
    {
        return self::$valor1 + $valor2;
    }

    public static function restar($valor2)
    {
        return self::$valor1 - $valor2;
    }

    public static function multiplicar($valor2)
    {
        return self::$valor1 * $valor2;
    }

    public static function dividir($valor2)
    {
        if ($valor2 != 0) {
            return self::$valor1 / $valor2;
        } else {
            throw new Exception("Error: No se puede dividir por cero.");
        }
    }
}

try {
    echo "Suma: " . Calculadora::sumar(5) . "<br>";
    echo "Resta: " . Calculadora::restar(3) . "<br>";
    echo "Multiplicación: " . Calculadora::multiplicar(6) . "<br>";
    echo "División: " . Calculadora::dividir(2) . "<br>";
    echo "División: " . Calculadora::dividir(0) . "<br>";
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
