<?php
start:
$wordsArray = ['song', 'giraffe', 'straw', 'railway', 'request', 'wreck'];
$misses = [];
$counter = 0;
foreach ($wordsArray as $word) {
    $count = strlen($word);
    $linesArray[] = str_repeat('-', $count);
}
$randomKey = array_rand($wordsArray);
$usedWord = $wordsArray[$randomKey];
$usedLines = $linesArray[$randomKey];
$usedCharacters = str_split($usedWord);
$guessArray = str_split($usedLines);
echo '=============================' . PHP_EOL;
echo 'Word: ' . $usedLines . PHP_EOL;
echo 'Misses: ' . PHP_EOL;

while ($usedWord != $usedLines) {
    retry:
    $userInput = strtolower(readline('Guess: ' . PHP_EOL));
    if (!preg_match("/^[a-zA-Z]+$/", $userInput) || strlen($userInput) != 1) {
        echo 'Please enter one alphabet character!' . PHP_EOL;
        goto retry;
    }
    $matchCount = substr_count($usedWord, $userInput);
    echo '=============================' . PHP_EOL;
    if ($matchCount == 0) {
        $counter++;
        $misses[] = $userInput;
        echo 'Word: ' . $usedLines . PHP_EOL;
        echo 'Misses: ';
        foreach ($misses as $miss) {
            echo $miss;
        }
        echo PHP_EOL;
        if ($counter == 4) {
            echo 'Sorry you lose' . PHP_EOL;
            $playAgain = strtoupper(readline('Play Again? Yes : press y, No : press any other key ' . PHP_EOL));
            if ($playAgain != 'Y') {
                exit('Goodbye!');
            } else {
                goto start;
            }
        }

    } elseif (in_array($userInput, $guessArray)) {
        echo 'You already guessed this character. Guess again!';
        goto retry;
    } else {
        for ($i = 0; $i < strlen($usedWord); $i++) {
            if ($usedCharacters[$i] == $userInput) {
                $guessArray[$i] = $userInput;
            }
        }
        $usedLines = implode('', $guessArray);
        echo 'Word: ' . $usedLines . PHP_EOL;
        if (!isset($misses)) {
            echo 'Misses: ';
            echo PHP_EOL;
        } else {
            echo 'Misses: ';
            foreach ($misses as $miss) {
                echo $miss;
            }
            echo PHP_EOL;
        }
    }

}
echo 'Congratulations, you guessed the word!' . PHP_EOL;
$playAgain = strtoupper(readline('Play Again? Yes : press y, No : press any other key ' . PHP_EOL));
if ($playAgain != 'Y') {
    exit('Goodbye!');
} else {
    goto start;
}