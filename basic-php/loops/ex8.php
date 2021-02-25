<?php

class NumberSquare
{
    public function squareGame(): void
    {
        $min = intval(readline('Enter min integer : '));
        $max = intval(readline('Enter max integer : '));

        if ($min > $max) {
            die('Invalid input');
        }
            for ($i = $min; $i <= $max; $i++) {
                for ($j = $min; $j <= $max; $j++) {
                    echo $j;
                }
                for ($j = null; $j < $min; $j++) {
                    echo $j;
                }
                $min += 1;
                echo PHP_EOL;
            }
        }

}

$game = new NumberSquare();
$game->squareGame();