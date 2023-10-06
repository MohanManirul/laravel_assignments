<?php
//titghtly coupled
// class Driver{
//     protected Vehicle $vehicle ;
//     public function __construct()
//     {
//         $this->vehicle = new Vehicle();
//     }
// }

// class Vehicle{
//     protected Engine $engine;

//     public function __construct()
//     {
//         $this->engine = new Engine();
//     }
// }

// class Engine{

// }

//loosely coupled
class Driver{
    protected Vehicle $vehicle ;
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }

    public function setVehicle(Vehicle $vehicle){
        $this->vehicle = $vehicle;
    }
}
class Vehicle{
    protected Engine $engine ;
    public function __construct(Engine $engine)
    {
        $this->engine = $engine;
    }

    public function setEngine(Engine $engine){
        $this->engine = $engine;
    }
}
class Engine{
   
}
$engine     = new Engine();
$vehicle    = new Vehicle($engine);
$driver     = new Driver($vehicle);
?>