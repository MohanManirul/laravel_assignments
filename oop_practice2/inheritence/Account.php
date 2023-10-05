<?php
 
class Account{
    public $accountNumber ;
    public $balance ;

    public function deposit($amount){
        echo "depositing $amount into account";
    }

    public function withdraw($amount){
        echo "withdrawing $amount from account";
    }

    public function getBalance($amount){
        return $this->balance;
    }




}

?>