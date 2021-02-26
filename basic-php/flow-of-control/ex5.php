<?php

$userInputString = strtoupper(readline('Enter string: '));

//ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
$keypadArray = [2 => 'ABC', 3 => 'DEF', 4 => 'GHI', 5 => 'JKL', 6 => 'MNO', 7 => 'PQRS', 8 => 'TUV', 9 => 'WXYZ', 0=>' '];
if (preg_match('/^[a-zA-Z ]+$/', $userInputString)) {
    $stringArray = str_split($userInputString);

    foreach ($stringArray as $value) {
        foreach ($keypadArray as $key => $item) {
            switch ($value) {
                case  strpos($item, $value) !== false :
                    echo $key;
                    break;
            }
        }
    }
} else {
    echo 'Input contained non alphabetical character';
}