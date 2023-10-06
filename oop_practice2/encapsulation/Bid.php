<?php

class Bid{
    private $minimumBid = 5 ;
    private $bidAmount ;

    public function setBidAmount($amount){
        if($amount < $this->minimumBid){
            $this->bidAmount = $this->minimumBid ;
            return;
        }
        return $this->bidAmount = $amount ;
    }

    public function getBidAmount(){
        return $this->bidAmount;
    }
}

$bid = new Bid();
$bid->setBidAmount(4);
print $bid->getBidAmount();

?>