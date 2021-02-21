<?php

$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers
$sumOfNumbers = array_sum($numbers);
$countOfNumbers = count($numbers);
$averageOfNumbers = $sumOfNumbers / $countOfNumbers;

echo $averageOfNumbers;