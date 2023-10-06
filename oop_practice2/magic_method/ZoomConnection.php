<?php

class ZoomConnection{
    private static int $count = 0;

    public function __construct()
    {
        self::$count++ ;
    }

    public function __destruct()
    {
        self::$count-- ;
    }

    public function getCount(){
        return self::$count;
    }
}

$connection1 = new ZoomConnection();
$connection2 = new ZoomConnection();
unset($connection2);
print $connection1->getCount();
?>