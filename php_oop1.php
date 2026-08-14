<?php

class Company
{
    public $name;
    public $location;
    public $tot_employees;
    public static $avg_salary = 1500;
    public static $total = 0;

    public function __construct($nome, $sede, $dipendenti)
    {
        $this->name = $nome;
        $this->location = $sede;
        $this->tot_employees = $dipendenti;
    }

    public function checkIfGreater($int1, $int2)
    {
        if ($int1 > $int2) {
            return true;
        } else {
            return false;
        }
    }

    public function printCheckEmployees($num = 0)
    {
        if ($this->checkIfGreater($this->tot_employees, $num)) {
            echo "L'azienda $this->name con sede in $this->location ha ben $this->tot_employees dipendenti\n";
        } else {
            echo "L’ufficio $this->name con sede in $this->location non ha dipendenti\n";
        }
    }

    public function calculateAnnualCost($int)
    {
        return $this->tot_employees * (self::$avg_salary * $int);
    }

    public function printCalculatedAnnualCost($month = 12)
    {
        echo "-----$this->name -----\n";
        echo "Costo annuale dell'azienda $this->name: " . $this->calculateAnnualCost($month) . " euro\n";
    }

    public function calculateProgressiveCost($month = 12)
    {
        return self::$total += $this->calculateAnnualCost($month);
    }

    public static function printCalculatedFinalTotal()
    {
        echo "La holding ha una previsione di spesa pari a: " . self::$total . " euro\n";
    }
}

$company1 = new Company("Aulab", "Italia", 100);
$company1->printCheckEmployees();
//$company1->printCalculatedAnnualCost();
$company2 = new Company("Apple", "USA", 10);
$company2->printCheckEmployees();
$company2->calculateProgressiveCost();
$company1->calculateProgressiveCost();
Company::printCalculatedFinalTotal();
