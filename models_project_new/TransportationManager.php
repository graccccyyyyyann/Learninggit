<?php

class TransportationManager
{
    public function operateVehicle(Vehicle $vehicle): void{
        $range = $vehicle->calculateRange();
        echo "Operating vehicle with range: $range";

    }

}
$car = new Car(COO1, "Sedan", 50, 10);
$car->refuel(50);
$truck = new Car(T002, "Kia", 400, 23);
$truck->refuel(100);
$motorcycle= new Car(M009, "Yamaha", 90,10);
$motorcycle->refuel(30);

$transportationManager = new TransportationManager();
$transportationManager->operateVehicle($car);
$transportationManager->operateVehicle($truck);
$transportationManager->operateVehiclee($motorcycle);




