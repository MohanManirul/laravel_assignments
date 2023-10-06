<?php

require 'CheckingAccount.php';
class PremiunAccount extends CheckingAccount{
    public $minimumBalance = 10000;
}

$premiumAccount = new PremiunAccount();
   $checkingAccount->deposit(100);
    $checkingAccount->withdraw(50);
    $checkingAccount->transfer(50);
echo $premiumAccount->minimumBalance ;
?>