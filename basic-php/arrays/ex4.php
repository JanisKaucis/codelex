<?php

for ($i = 0; $i < 10; $i++) {
    $firstArray[] = rand(1, 100);
}

$secondArray = $firstArray;
for ($i = 0; $i < count($firstArray); $i++) {
    $firstArray[count($firstArray) - 1] = -7;
}
foreach ($firstArray as $value) {
    echo $value . ' ';
}
echo PHP_EOL;
foreach ($secondArray as $value) {
    echo $value . ' ';
}