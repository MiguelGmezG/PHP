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
    public function getNombre(){
        return $this->nombre;
    }
    public function getSueldo(){
        return $this->sueldo;
    }
    public function getEmpleado(){
        return $this->nombre." tiene un sueldo de ".$this->sueldo."<br>";
    }
}

$empleado1= new Empleado("Manolo",1000);
echo $empleado1->getEmpleado();
$empleado2=new Empleado("Paco",500);
echo $empleado2->getEmpleado();
?>