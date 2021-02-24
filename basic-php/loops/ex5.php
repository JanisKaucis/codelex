<?php

class Piglet
{
    public $userInput;
    public $diceRoll;

    public function __construct($userInput,$diceRoll)
    {
        $this->userInput = $userInput;
        $this->diceRoll = $diceRoll;
    }

}

$sum = 0;
$piglet = new Piglet('y',rand(1,6));
echo 'Welcome to Piglet!' . PHP_EOL;

while ($piglet->userInput == 'y') {
    echo 'You rolled a ' . $piglet->diceRoll . '!' . PHP_EOL;

    if ($piglet->diceRoll != 1) {
        $sum += $piglet->diceRoll;
        $piglet = new Piglet(readline('Roll again? Type : y for Yes and any other for No : '),rand(1,6));

    } else {
        die('You got 0 points.' . PHP_EOL);
    }
}
echo 'You got ' . $sum . ' points.' . PHP_EOL;