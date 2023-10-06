<?php

class Cart{
    public $itemTotal;
    public $shippingCost;
    public $discount;

    public function calculateTotal(){
        $subTotal = $this->itemTotal + $this->shippingCost - $this->discount ;
        return "Sub Total Is : " .$subTotal;
    }
}

$cart = new Cart();
$cart->itemTotal = 100 ;
$cart->shippingCost = 200 ;
$cart->discount = 50 ;

$result = $cart->calculateTotal();
echo $result ;
?>