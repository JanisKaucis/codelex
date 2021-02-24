<?php

$firstWord = readline('Enter first word : ');
$secondWord = readline('Enter second word : ');
$firstWordLength = strlen($firstWord);
$secondWordLength = strlen($secondWord);

echo $firstWord;
for ($i=0;$i<30-$firstWordLength-$secondWordLength;$i++){
    echo '.';
}
echo $secondWord;
//echo $firstWord . str_repeat('.', 30 - $firstWordLength - $secondWordLength) . $secondWord;