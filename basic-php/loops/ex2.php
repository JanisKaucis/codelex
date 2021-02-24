<?php

$i = readline('Input a number to multiply: ') . PHP_EOL;
$n = readline('Input a number for how many times to multiply first number: ');
echo PHP_EOL;
while ($n < 0) {
    echo 'You cannot do that!';
    $n = readline('Input a number for how many times to multiply first number: ');
    echo PHP_EOL;
}
$result = 1;
for ($j = 0; $j <= $n; $j++) {
    $result *= $i;
}
echo 'Result: ' . $result . ', multiplied ' . $n . ' times';