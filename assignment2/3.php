<?php
function fibonacci($n)
{
    if ($n == 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$count = 10;
$fibonacci_numbers = [];

for ($i = 0; $i < $count; $i++) {
    $fibonacci_number = fibonacci($i);

    if ($fibonacci_number > 100) {
        break;
    }

    $fibonacci_numbers[] = $fibonacci_number;
}

echo "The first 10 Fibonacci numbers (up to 100):\n";
echo implode(", ", $fibonacci_numbers) . "\n";
?>