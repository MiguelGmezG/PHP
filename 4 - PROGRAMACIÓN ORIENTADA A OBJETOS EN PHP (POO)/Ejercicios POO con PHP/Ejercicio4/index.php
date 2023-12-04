<?php
class Empleado
{
    private $nombre;
    private $sueldo;
    public function __construct($nombre, $sueldo)
    {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getSueldo()
    {
        return $this->sueldo;
    }
    public function getEmpleado()
    {
        return $this->getNombre() . " tiene un sueldo de " . $this->getSueldo() . "<br>".$this->getPagaImpuestos();
    }
    public function getPagaImpuestos(){
        $cadena="";
        if ($this->pagaImpuestos()) {
            $cadena .= $this->nombre . " tiene que pagar impuestos<br>";
        } else {
            $cadena .= $this->nombre . " no tiene que pagar impuestos<br>";
        }
        return $cadena;
    }
    public function pagaImpuestos()
    {
        if ($this->sueldo > 1200) {
            return true;
        } else {
            return false;
        }
    }
}

$empleado1 = new Empleado("Manolo", 1000);
echo $empleado1->getEmpleado();
$empleado2 = new Empleado("Paco", 500);
echo $empleado2->getEmpleado();
