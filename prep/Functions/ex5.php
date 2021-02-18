<?php

$fruits =[[
    'name' => 'Apple',
    'weight' => 1
],[
    'name' => 'Pineapple',
    'weight' => 3
    ],[
      'name' => 'Banana',
    'weight' => 11
],[
    'name' => 'Orange',
    'weight' => 20
]
];

function weightTest(int $weight): int
{   $costs = [
    'over_10' => 2,
    'below_10' => 1
];
    if ($weight >=10){
        return $costs['over_10'];
    } else {
        return $costs['below_10'];
    }
}
foreach ($fruits as $fruit){
    echo $fruit['name'].' shipping cost is '.weightTest($fruit['weight']).PHP_EOL;
}