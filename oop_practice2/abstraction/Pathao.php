<?php

abstract class Vehicle{
    abstract public function getBaseFare();
    abstract public function getPerKiloFare();

    public function getTotal($kilo){
        return $this->getBaseFare() + $this->getPerKiloFare() * $kilo ;
    }

    
}
class Car extends Vehicle{
    public function getBaseFare(){
        return 300;
    }

    public function getPerKiloFare(){
        return 30;
    }
}

class Bike extends Vehicle{
    public function getBaseFare(){
        return 200;
    }

    public function getPerKiloFare(){
        return 20;
    }
}

$carFare = new Car();
echo $carFare->getTotal(10);

$bikeFare = new Bike();
echo $bikeFare->getTotal(10);

?>