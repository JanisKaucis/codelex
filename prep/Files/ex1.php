<?php


function nameFruits(): void
{
    $fruits =['apple', 'banana','mango','pineaple','peach'];
    foreach ($fruits as $fruit) {
        echo $fruit.PHP_EOL;
    }
}