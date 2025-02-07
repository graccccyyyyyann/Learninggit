<?php

class FullTimeEmployee extends Employee
{
    private $salary;

    public function __construct($name, $employeeId, $salary)
    {
        parent::__construct($name, $employeeId);
        $this->salary = $salary;

    }
    public function calculatePay(): float
    {
        return $this->salary;
        echo "FullTimeEmployee Pay:" .$this->salary;

    }
    public function getSalary(): float{
        return $this->salary;
            }

}
$fullTimeEmployee1 = new FullTimeEmployee("Ann", "22023", 300);
   $fullTimeEmployee1->calculatePay();{
    echo $fullTimeEmployee1;
    echo $fullTimeEmployee1->getSalary();
}
$fullTimeEmployee2 = new FullTimeEmployee("Afia", "23343", 450);
    $fullTimeEmployee2->calculatePay();{
        echo $fullTimeEmployee2;
        echo$fullTimeEmployee2-getSalary();
}


