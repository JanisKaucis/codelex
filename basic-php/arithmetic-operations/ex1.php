<?php

$firstInt = readline('Ievadi pirmo integer:');
$secondInt = readline('Ievadi otro integer:');

if ($firstInt === 15 || $secondInt === 15 ||
    $firstInt + $secondInt === 15 ||
    abs($firstInt - $secondInt) === 15) {
    echo 'true';
    return true;
}
echo 'false';
return false;
