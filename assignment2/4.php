<?php
function printFibonacci($count)
{
    if ($count < 1) {
        echo "Count should be greater than or equal to 1.";
        return;
    }

    $fibonacci_numbers = [];
    $fibonacci_numbers[0] = 0;
    $fibonacci_numbers[1] = 1;

    for ($i = 2; $i < $count; $i++) {
        $fibonacci_numbers[$i] = $fibonacci_numbers[$i - 1] + $fibonacci_numbers[$i - 2];
    }

    echo "The first $count Fibonacci numbers:\n";
    echo implode(", ", $fibonacci_numbers) . "\n";
}

printFibonacci(15);
?>