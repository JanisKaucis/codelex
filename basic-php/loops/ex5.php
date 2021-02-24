<?php

class Piglet
{
    public $userInput;

    public function __construct($userInput)
    {
        $this->userInput = $userInput;
    }

}

$sum = 0;
$piglet = new Piglet('y');
echo 'Welcome to Piglet!' . PHP_EOL;

while ($piglet->userInput == 'y') {
    $diceRoll = rand(1, 6);
    echo 'You rolled a ' . $diceRoll . '!' . PHP_EOL;

    if ($diceRoll != 1) {
        $sum += $diceRoll;
        $piglet = new Piglet(readline('Roll again? Type : y for Yes and any other for No : '));

    } else {
        die('You got 0 points.' . PHP_EOL);
    }
}
echo 'You got ' . $sum . ' points.' . PHP_EOL;