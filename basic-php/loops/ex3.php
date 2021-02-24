<?php

$firstWord = readline('Enter first word : ');
$secondWord = readline('Enter second word : ');
$firstWordLength = strlen($firstWord);
$secondWordLength = strlen($secondWord);

echo $firstWord . str_repeat('.', 30 - $firstWordLength - $secondWordLength) . $secondWord;