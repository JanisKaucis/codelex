<?php

$person1 = new stdClass();
$person1->name = 'Janis';
$person1->surname = 'Kaucis';
$person1->age = 28;
$person1->birthday = '19.06.1992';

$person2 = new stdClass();
$person2->name = 'Peteris';
$person2->surname = 'Koks';
$person2->age = 30;
$person2->birthday = '12.11.1988';

$person3 = new stdClass();
$person3->name = 'Valdis';
$person3->surname = 'Abele';
$person3->age = 48;
$person3->birthday = '17.08.1968';

$persons = [$person1, $person2, $person3];

foreach ($persons as $person){
    echo $person->name.' '.$person->surname.' '.$person->age.' '.$person->birthday.PHP_EOL;
}