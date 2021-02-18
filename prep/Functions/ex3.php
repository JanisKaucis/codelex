<?php

$person = new stdClass();
$person->name = 'Janis';
$person->surname = 'Kaucis';
$person->age = 28;

function validateAge(int $a): void {
    if ($a >= 18){
        echo 'Has reached 18';
    }
}
validateAge($person->age);