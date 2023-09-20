<?php

function printNumberUsingDoWhileLoop($min , $max) {

    for ($i = $min; $i <= $max; $i ++) {
        if($i % 5 != 0){
            echo "The number is : " . $i . ' <br/> ';
            continue;
           
        }
       
    }

    }
printNumberUsingDoWhileLoop(1,50);

?>