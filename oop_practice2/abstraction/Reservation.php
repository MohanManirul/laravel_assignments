<?php

class Reservation{
    private $host = "Mohan" ; 
    private $guest = "Khairul" ; 

    public function cancel(){
        //Check whether cancellation is an option
        //Refund the guest .. if refund is applicable
        $this->sendCancelNotification();
        $this->refundGuest();
    }

    private function sendCancelNotification(){
        echo "Send Cancel Notification" .$this->host;
    }

    private function refundGuest(){
        echo "Refund Guest" . $this->guest;
    }
}

$reservation = new Reservation();
echo $reservation->cancel();


?>