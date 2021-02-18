<?php
$one = 1;
$hundred = 100;
$number = rand($one, $hundred);

$userInput = readline('I\'m thinking of a number between 1-100.  Try to guess it.');

if ($userInput < $number) {
    echo 'Sorry, you are too low.  I was thinking of ' . $number . '.';
} elseif ($userInput > $number) {
    echo 'Sorry, you are too high.  I was thinking of ' . $number . '.';
} else {
    echo 'You guessed it!  What are the odds?!?';
}