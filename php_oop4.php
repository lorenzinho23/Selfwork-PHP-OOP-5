<?php

// CODICE DI PARTENZA
class Car
{
    private $num_telaio;
    protected function setCarTelaio($stringa)
    {
        return $this->num_telaio = $stringa;
    }
    protected function getCarTelaio()
    {
        return $this->num_telaio;
    }
}


class Fiat extends Car
{
    protected $license;
    protected $name;

    public function __construct($targa, $nome)
    {
        $this->license = $targa;
        $this->name = $nome;
    }

    public function setMyCarTelaio($stringa)
    {
        return $this->setCarTelaio($stringa);
    }

    public function getMyCarTelaio()
    {
        return $this->getCarTelaio();
    }

    public function printMessage()
    {
        echo "La mia macchina è $this->name, la targa è $this->license e il numero di telaio è " . $this->getMyCarTelaio() . "\n";
    }
}

$car = new Fiat("AB123CD", "Fiat Punto");
$car->setMyCarTelaio("1234567890");
$car->printMessage();
