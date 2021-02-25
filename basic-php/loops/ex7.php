<?php

class RollTwoDice
{
    public $firstDice;
    public $secondDice;
    public $sumOfDices;

    private function rollDices()
    {
        $this->firstDice = rand(1, 6);
        $this->secondDice = rand(1, 6);
        $this->sumOfDices = $this->firstDice + $this->secondDice;
    }

    public function gameofDices(): void
    {

        $input = intval(readline('Enter desired sum of dices (2-12) : '));
        if ($input < 2 || $input > 12) {
            die('Wrong input');
        }
        while ($input != $this->sumOfDices) {
            $this->rollDices();
            echo $this->firstDice . ' and ' . $this->secondDice . ' = ' . $this->sumOfDices . PHP_EOL;
        }
    }
}

$game = new RollTwoDice();
$game->gameofDices();