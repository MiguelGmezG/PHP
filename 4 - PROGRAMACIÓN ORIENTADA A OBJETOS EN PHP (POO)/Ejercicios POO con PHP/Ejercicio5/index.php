<?php

class Mamifero
{
    private $especie;
    private $sonido;
    protected  $familia;

    public function __construct($especie, $sonido)
    {
        $this->especie = $especie;
        $this->sonido = $sonido;
        $this->familia = "Mamífero";
    }

    public function getEspecie()
    {
        return $this->especie;
    }

    public function getFamilia()
    {
        return $this->familia;
    }

    public function sonido()
    {
        return "Sonido de " . $this->getEspecie() . ", de la familia " . $this->getFamilia() . ": " . $this->sonido;
    }
}

class Perro extends Mamifero
{
    public function __construct($especie, $sonido)
    {
        parent::__construct($especie, $sonido);
        $this->familia = "Cánidos";
    }
}

class Gato extends Mamifero
{
    public function __construct($especie, $sonido)
    {
        parent::__construct($especie, $sonido);
        $this->familia = "Felinos";
    }
}

$miPerro = new Perro("Yorshire", "ladrido");
$miGato = new Gato("Callejero", "maullido");

// Mostrar sus sonidos
echo $miPerro->sonido() . "<br>";
echo $miGato->sonido() . "<br>";
