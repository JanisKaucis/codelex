<?php


$grid = [[' ', ' ', ' ', '|', ' ', ' ', ' ', '|', ' ', ' ', ' '], ['-', '-', '-', '+', '-', '-', '-', '+', '-', '-', '-'],
    [' ', ' ', ' ', '|', ' ', ' ', ' ', '|', ' ', ' ', ' '], ['-', '-', '-', '+', '-', '-', '-', '+', '-', '-', '-'],
    [' ', ' ', ' ', '|', ' ', ' ', ' ', '|', ' ', ' ', ' ']];
$pcChoiceArray = ['1 1', '1 2', '1 3', '2 1', '2 2', '2 3', '3 1', '3 2', '3 3'];
$counter = 0;
foreach ($grid as $value) {
    echo PHP_EOL;
    foreach ($value as $item) {
        echo $item . ' ';
    }
}
while ($counter != 9) {

    $counter++;

    echo PHP_EOL;
    tryAgain:
    if ($counter % 2 !== 0) {
        $input = readline('choose your location (row, column): ');

        $char = 'O';
        $user = 'Player1';
        if ($input != '1 1' && $input != '1 2' && $input != '1 3' && $input != '2 1' &&
            $input != '3 1' && $input != '2 2' && $input != '2 3' && $input != '3 2' && $input != '3 3') {
            echo 'Enter valid location! Try Again' . PHP_EOL;
            goto tryAgain;
        }
        switch ($input) {
            case ($input === '1 1' && $grid[0][1] == ' '):
                $grid[0][1] = $char;
                break;
            case ($input === '1 2' && $grid[0][5] == ' '):
                $grid[0][5] = $char;
                break;
            case ($input === '1 3' && $grid[0][9] == ' '):
                $grid[0][9] = $char;
                break;
            case ($input === '2 1' && $grid[2][1] == ' '):
                $grid[2][1] = $char;
                break;
            case ($input === '2 2' && $grid[2][5] == ' '):
                $grid[2][5] = $char;
                break;
            case ($input === '2 3' && $grid[2][9] == ' '):
                $grid[2][9] = $char;
                break;
            case ($input === '3 1' && $grid[4][1] == ' '):
                $grid[4][1] = $char;
                break;
            case ($input === '3 2' && $grid[4][5] == ' '):
                $grid[4][5] = $char;
                break;
            case ($input === '3 3' && $grid[4][9] == ' '):
                $grid[4][9] = $char;
                break;
            default:
                echo 'This space is taken. Try Again' . PHP_EOL;
                goto tryAgain;
        }
    } else {
        PCretry:
        $char = 'X';
        $user = 'PC';
        $pcChoiceKey = array_rand($pcChoiceArray);
        $pcChoice = $pcChoiceArray[$pcChoiceKey];

        switch ($pcChoice) {
            case ($pcChoice === '1 1' && $grid[0][1] == ' '):
                $grid[0][1] = $char;
                break;
            case ($pcChoice === '1 2' && $grid[0][5] == ' '):
                $grid[0][5] = $char;
                break;
            case ($pcChoice === '1 3' && $grid[0][9] == ' '):
                $grid[0][9] = $char;
                break;
            case ($pcChoice === '2 1' && $grid[2][1] == ' '):
                $grid[2][1] = $char;
                break;
            case ($pcChoice === '2 2' && $grid[2][5] == ' '):
                $grid[2][5] = $char;
                break;
            case ($pcChoice === '2 3' && $grid[2][9] == ' '):
                $grid[2][9] = $char;
                break;
            case ($pcChoice === '3 1' && $grid[4][1] == ' '):
                $grid[4][1] = $char;
                break;
            case ($pcChoice === '3 2' && $grid[4][5] == ' '):
                $grid[4][5] = $char;
                break;
            case ($pcChoice === '3 3' && $grid[4][9] == ' '):
                $grid[4][9] = $char;
                break;
            default:
                goto PCretry;
        }
    }


    foreach ($grid as $value) {
        echo PHP_EOL;
        foreach ($value as $item) {
            echo $item . ' ';
        }
    }

    if ($grid[0][1] === $char && $grid[0][5] === $char && $grid[0][9] === $char ||
        $grid[2][1] === $char && $grid[2][5] === $char && $grid[2][9] === $char ||
        $grid[4][1] === $char && $grid[4][5] === $char && $grid[4][9] === $char ||
        $grid[0][1] === $char && $grid[2][1] === $char && $grid[4][1] === $char ||
        $grid[0][5] === $char && $grid[2][5] === $char && $grid[4][5] === $char ||
        $grid[0][9] === $char && $grid[2][9] === $char && $grid[4][9] === $char ||
        $grid[0][1] === $char && $grid[2][5] === $char && $grid[4][9] === $char ||
        $grid[0][9] === $char && $grid[2][5] === $char && $grid[4][1] === $char) {
        exit(PHP_EOL . $user . ' Wins!');
    } elseif ($counter == 9) {
        exit(PHP_EOL . 'The game is a tie.');
    }
}