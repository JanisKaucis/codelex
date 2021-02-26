<?php

$dayNumber = readline('Enter day from 0 to 6: ');
if ($dayNumber >= 0 && $dayNumber <= 6) {
    switch ($dayNumber) {
        case $dayNumber == 0 :
            echo 'Monday';
            break;
        case $dayNumber == 1 :
            echo 'Tuesday';
            break;
        case $dayNumber == 2 :
            echo 'Wednesday';
            break;
        case $dayNumber == 3 :
            echo 'Thursday';
            break;
        case $dayNumber == 4 :
            echo 'Friday';
            break;
        case $dayNumber == 5 :
            echo 'Saturday';
            break;
        case $dayNumber == 6 :
            echo 'Sunday';
            break;
    }

} else {
    echo('Not a valid day');
}


