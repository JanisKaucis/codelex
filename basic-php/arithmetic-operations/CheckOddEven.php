<?php

function oddOrEven(int $number): void
{
    if ($number % 2 !== 0) {
        echo 'Odd Number' . PHP_EOL;
    } else {
        echo 'Even Number' . PHP_EOL;
    }
}

$input = readline('Ievadi skaitli');

oddOrEven($input);
echo 'Bye' . PHP_EOL;