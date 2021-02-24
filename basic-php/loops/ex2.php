<?php

$i = readline('Input a number 1: ') . PHP_EOL;
$n = readline('Input a number 2: ');
echo PHP_EOL;
while ($n < 0) {
    echo 'You cannot do that!';
    $n = readline('Input a number 2: ');
    echo PHP_EOL;
}
$result = 1;
for ($j = 0; $j <= $n; $j++) {
    $result *= $i;
}
echo 'Result: ' . $result . ', multiplied ' . $n . ' times';