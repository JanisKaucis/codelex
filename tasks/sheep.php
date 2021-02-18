<?php

$animals = ['sheep', 'sheep', 'sheep', 'wolf','sheep','wolf','sheep', 'sheep', ];

//output: happy, happy, OMG, HEHE, OMG, HEHE, OMG, happy;

for ($i=0;$i<count($animals);$i++){
    if ($animals[$i] === 'wolf'){
        echo 'HEHE'.PHP_EOL;
    } elseif ((isset($animals[$i-1]) && $animals[$i-1] === 'wolf') || (isset($animals[$i+1]) && $animals[$i+1] === 'wolf')){
        echo 'OMG'.PHP_EOL;
    } else {
        echo 'Happy'.PHP_EOL;
    }
}
