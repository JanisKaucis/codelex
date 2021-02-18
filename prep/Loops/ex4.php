<?php

$values = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];

foreach ($values as $value) {
    if ($value%3 === 0){
        echo $value.' ';
    }
}