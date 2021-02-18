<?php

$number = 5;
$counter = 0;
$result = 1;

for ($i = 1; $i <= $number; $i++) {
    $result *= $i;
}
echo $result;
return $result;