<?php

$a = -9.81;
$t = 10;
$vi = 0;
$xi = 0;

$result = $xi = 0.5 * $a * pow($t, 2) + $vi * $t + $xi;

echo $result.'m';