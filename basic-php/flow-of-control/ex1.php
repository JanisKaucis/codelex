<?php

$numberArray[] = readline('Input the 1st number: ');
$numberArray[] = readline('Input the 2nd number: ');
$numberArray[] = readline('Input the 3rd number: ');

$largestNumber = max($numberArray);
$largestNumberKey = array_search($largestNumber, $numberArray);

echo 'Largest number entered is: ' . $largestNumber . '. It was ' . ($largestNumberKey + 1) . '. input number which is unique';

