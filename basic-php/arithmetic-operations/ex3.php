<?php

$lowestValue = 1;
$highestValue = 100;
$sum = 0;
$counter = 0;

for ($i = $lowestValue; $i <= $highestValue; $i++) {
    $sum += $i;
    $counter += 1;
}
$average = $sum / $counter;
echo 'The sum of ' . $lowestValue . ' to ' . $highestValue . ' is ' . $sum . PHP_EOL;
echo 'The average is ' . $average;