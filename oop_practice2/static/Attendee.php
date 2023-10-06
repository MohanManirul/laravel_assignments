<?php

    class Attendee{
        private static int $count = 0 ;

        public function __construct()
        {
            self::$count++ ;
        }
        public static function getCount(){
            return self::$count;
        }

        
    }

    $mohan = new Attendee();
    $rakib = new Attendee();
    print_r(Attendee::getCount());

?>