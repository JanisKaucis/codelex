<?php

$validOptions = ['R', 'P', 'S'];

$userInput = strtoupper(readline('Enter R or P or S'));
echo $userInput . PHP_EOL;
if (! in_array($userInput, $validOptions)){
    exit('Not Valid input');
}
$pcArrayKey = array_rand($validOptions);
$pcChoice = $validOptions[$pcArrayKey];
echo $pcChoice . PHP_EOL;
 if (($userInput === 'R' && $pcChoice === 'S') ||
     ($userInput === 'P' && $pcChoice === 'R') ||
     ($userInput === 'S' && $pcChoice === 'P')){
     echo 'You win';
 } elseif ($userInput === $pcChoice) {
     echo 'Its a draw';
 }else {
     echo 'PC Wins!';
 }
