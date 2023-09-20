<p>Using for loop</p>
<?php

function printNumberUsingForLoop($min , $max) {

    for ($i = $min; $i <= $max; $i = $i + 2) {
        echo "The number is : " .$i . ' <br/> ';
    }

}
printNumberUsingForLoop(2 , 20);
?>

<hr/>
<p>Using while loop</p>
<hr/>
<?php 


function printNumberUsingWhileLoop($min , $max) {

    $x = $min;
 
    while($x <= $max) {
      echo "The numbers are: $x <br>";
      $x+=2;
    }

}
printNumberUsingWhileLoop(2,20);
?>


<hr/>
<p>Using do while loop</p>
<hr/>
<?php 


function printNumberUsingDoWhileLoop($min , $max) {

    $x = $min;
    do {
    echo "The number is: $x <br>";
        $x = $x + 2;
        } while ($x <= $max);

    }
printNumberUsingDoWhileLoop(2,20);
?>