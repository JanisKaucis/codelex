<?php

function nameFruits(): void
{
    $fruits =['apple', 'banana','mango','pineaple','peach'];
    foreach ($fruits as $fruit) {
        echo $fruit.PHP_EOL;
    }
}
function numbers(): void{
    for ($i=0;$i<10;$i++){
        echo $i.' ';
    }
    echo PHP_EOL;
}

function names(): void{
    $nameArray = ['Janis','Peteris','Dainis','Marta'];
    foreach ($nameArray as $value){
        echo 'My name is '.$value.PHP_EOL;
    }
}