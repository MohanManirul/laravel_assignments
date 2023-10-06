<?php

class GeneralCalculator{

   final public function calculatePercentage($part , $whole){
        return ($part / $whole) * 100 ;
    }
}

class financeCalculator extends GeneralCalculator{
    public function calculatePercentage($part , $whole){
        return $part / ($whole * 100) ;
    }
}

$part = 5 ;
$whole = 10 ;

$generalCalculator = new financeCalculator();
echo $generalCalculator->calculatePercentage($part , $whole)



?>