<?php

function calculatePi($iterations) {
    $pi = 0;
    $sign = 1;

    for ($i = 1; $i <= $iterations; $i++) {
        $term = 2 * $i - 1;
        $pi += $sign * (4 / $term);
        $sign *= -1;
    }

    return $pi;
}

function main() {
    $iterations = 1;
    while (true) {
        echo "Current value of PI after $iterations iterations: " . calculatePi($iterations) . PHP_EOL;
        $choice = readline("Enter the number of iterations (0 to quit): ");

        if (ctype_digit($choice)) {
            $iterations = (int)$choice;

            if ($iterations === 0) {
                break;
            }
        } else {
            echo "Invalid input. Please enter a positive integer or 0 to quit." . PHP_EOL;
        }
    }
}

main();

?>
