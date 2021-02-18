<?php

echo 'Geometry calculator:' . PHP_EOL . PHP_EOL;
echo 'Calculate the Area of a Circle' . PHP_EOL;
echo 'Calculate the Area of a Rectangle' . PHP_EOL;
echo 'Calculate the Area of a Triangle' . PHP_EOL;
echo 'Quit' . PHP_EOL;

$enteredNumber = readline('Enter your choice (1-4):');
if ($enteredNumber >= 1 && $enteredNumber <= 4) {
    if ($enteredNumber == 1) {
        $pi = 3.14159;
        $radiusOfCircle = readline('Enter circle radius');
        if ($radiusOfCircle >= 0) {
            $circleArea = $pi * $radiusOfCircle * 2;
            echo 'Circle area is: ' . $circleArea;
        } else {
            echo 'Error, negative value entered';
        }
    } elseif ($enteredNumber == 2) {
        $rectangleLength = readline('Enter rectangle length');
        $rectangleWidth = readline('Enter rectangle width');
        if ($rectangleLength >= 0 && $rectangleWidth >= 0) {
            $rectangleArea = $rectangleLength * $rectangleWidth;
            echo 'Rectangle area is: ' . $rectangleArea;
        } else {
            echo 'Error, negative value entered';
        }
    } elseif ($enteredNumber == 3) {
        $triangleBase = readline('Enter triangle base');
        $triangleHeight = readline('Enter triangle height');
        if ($triangleBase >= 0 && $triangleHeight >= 0) {
            $triangleArea = $triangleBase * $triangleHeight * 0.5;
            echo 'Triangle area is: ' . $triangleArea;
        } else {
            echo 'Error, negative value entered';
        }
    } elseif ($enteredNumber == 4) {
        exit('Program closing');
    }
} else {
    echo 'Entered number is outside the range of 1 through 4';
}