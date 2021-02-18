<?php

$person1 = new stdClass();
$person1->name = 'Janis';
$person1->surname = 'Kaucis';
$person1->age = 28;

$person2 = new stdClass();
$person2->name = 'Peteris';
$person2->surname = 'Koks';
$person2->age = 12;

$person3 = new stdClass();
$person3->name = 'Valdis';
$person3->surname = 'Abele';
$person3->age = 18;

function validateAge(int $a): void
{
    if ($a >= 18){
        echo 'Has reached 18'.PHP_EOL;
    } else {
        echo 'Has not reached 18'.PHP_EOL;
    }
}
$persons = [$person1, $person2, $person3];
foreach ($persons as $person)
{
    validateAge($person->age);
}