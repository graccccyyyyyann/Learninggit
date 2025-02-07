<?php

abstract class Vehicle
{
    abstract public function calculateRange(): flaot;

    private  $vehicleId;
    private $model;
    private $fuelLevel;

    public function __construct($vehicleId, $model, $initialfuelLevel){
        $this->vehicleId = $vehicleId;
        $this->model = $model;
        $this->fuelLevel = $initialfuelLevel;
    }
    public function refuel(float $fuelAmount): void
    {
        $this->fuelLevel += $fuelAmount;
        echo "Vehicle refueled with" .$fuelAmount." liters\n";
    }
    public function getFuelLevel(): float
    {
        return $this->fuelLevel;
    }

}