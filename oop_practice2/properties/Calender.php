<?php

class Calender{
    public string $name;
    public ?int $days = null;
}

$calender = new Calender();
var_dump($calender->days)

?>