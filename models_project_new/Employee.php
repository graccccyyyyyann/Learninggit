<?php

 abstract class Employee
{
    private $name;
    private $employeeId;


    public function __construct($name, $employeeId){
        $this->name-> $name;
        $this->employeeId-> $employeeId;

    }
    public function getname(): string{
        return this->name;
    }
    public function getemployeeId(): string{
        return this->employeeId;
    }
    abstract public function calculatePay(): float;

}