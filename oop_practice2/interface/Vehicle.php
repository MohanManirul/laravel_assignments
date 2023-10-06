<?php
// abstract class start
abstract class Vehicle{
    abstract public function getBaseFare();
    abstract public function getPerKiloFare();

    public function getTotal($kilo){
        return $this->getBaseFare() + $this->getPerKiloFare() * $kilo ;
    }
    
}

// abstract class ends

// interface class start
interface HourlyRentable{
    public function getHourlyRate($hours);
}

interface DailyRentable{
    public function getDailyRate($days);
}
// interface class ends

class Car extends Vehicle implements HourlyRentable , DailyRentable
{
    public function getBaseFare(){
        return 300;
    }

    public function getPerKiloFare(){
        return 30;
    }
    public function getHourlyRate($hours){
        return 50 * $hours ;
    }

    public function getDailyRate($days){
        return 500 * $days ;
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
// echo $carFare->getTotal(10);
// echo $carFare->getHourlyRate(3);
echo $carFare->getDailyRate(2);

// $bikeFare = new Bike();
// echo $bikeFare->getTotal(10);

?>