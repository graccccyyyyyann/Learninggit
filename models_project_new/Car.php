<?php

class Car extends Vehicle
{
    private $fuelEfficiency;


    public function __construct($vehicleId, $model, $initialfuelLevel, $fuelEfficiency){
        $this->fuelEfficiency = $fuelEfficiency;
    }

    public function calculateRange(): flaot
    {
        return $this->fuelEfficiency * $this->getFuelLevel();
    }
}