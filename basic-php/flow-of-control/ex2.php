<?php

$number = readline('Enter number : ');

if ($number > 0) {
    echo 'Number is positive';
} elseif ($number < 0) {
    echo 'Number is negative';
} else {
    echo 'Number is 0';
}