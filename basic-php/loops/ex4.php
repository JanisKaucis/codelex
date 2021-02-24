<?php

class FizzBuzz
{
    public $integer;

    public function __construct($integer)
    {
        $this->integer = $integer;
    }

}

$counter = 0;
$fizzBuzz = new FizzBuzz(readline('Please enter integer : '));
echo PHP_EOL;
if ($fizzBuzz->integer == 100) {
    echo 'Max value? 100' . PHP_EOL;
}
for ($i = 1; $i <= intval($fizzBuzz->integer); $i++) {
    $counter++;
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'FizzBuzz ';
    } elseif ($i % 3 == 0) {
        echo 'Fizz ';
    } elseif ($i % 5 == 0) {
        echo 'Buzz ';
    } else {
        echo $i . ' ';
    }
    if ($counter % 20 == 0) {
        echo PHP_EOL;
    }
}
echo PHP_EOL;