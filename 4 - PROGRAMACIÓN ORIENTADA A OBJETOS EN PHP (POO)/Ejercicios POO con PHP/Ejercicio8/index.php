<?php
abstract class Trabajador
{
    protected $nombre;
    protected $sueldo;

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    abstract public function calcularSueldo();
}

class Empleado extends Trabajador
{
    public function __construct($nombre)
    {
        parent::__construct($nombre);
    }

    public function calcularSueldo()
    {
        $horasTrabajadas = 40;
        $this->sueldo = $horasTrabajadas * 9.50;
        return $this->sueldo;
    }
}

class Gerente extends Trabajador
{
    private $sueldoBase;
    private $porcentajeBeneficio;

    public function __construct($nombre, $sueldoBase, $porcentajeBeneficio)
    {
        parent::__construct($nombre);
        $this->sueldoBase = $sueldoBase;
        $this->porcentajeBeneficio = $porcentajeBeneficio;
    }

    public function calcularSueldo()
    {
        $beneficioEmpresa = 100000;
        $this->sueldo = $this->sueldoBase + ($beneficioEmpresa * $this->porcentajeBeneficio / 100);
        return $this->sueldo;
    }
}

$empleado = new Empleado("Juan");
$sueldoEmpleado = $empleado->calcularSueldo();
echo "El sueldo de ".$empleado->getNombre() ."es $sueldoEmpleado.<br>";


$gerente = new Gerente("Ana", 2500, 5);
$sueldoGerente = $gerente->calcularSueldo();
echo "El sueldo de ".$empleado->getNombre() ."es $sueldoGerente.<br>";
?>