<?php

class salaryCalc
{

    function Calc(float $basePay, float $hoursWorked)
    {
        $baseHours = 40;

        if ($basePay < 8) {
            echo 'Salary must be over $8.00';
        } elseif ($hoursWorked > 60) {
            echo 'Employee dont work more than 60 hours';
        } elseif ($hoursWorked > $baseHours) {
            $overHours = $hoursWorked - $baseHours;
            return $baseHours * $basePay + $overHours * $basePay * 1.5;
        } else {
            return $hoursWorked * $basePay;
        } return '';
    }
}

$person1 = new salaryCalc;
$person2 = new salaryCalc;
$person3 = new salaryCalc;

echo $person1->Calc(7.50, 35) . PHP_EOL;
echo $person2->Calc(8.20, 47) . PHP_EOL;
echo $person3->Calc(10, 73) . PHP_EOL;