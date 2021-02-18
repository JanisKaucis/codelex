<?php

$weight = readline('Please enter your weight in kg');
$height = readline('Please enter your height in cm');

$weightInPounds = $weight * 2.20462;
$heightInInches = $height * 0.393701;

$BMI = $weightInPounds * 703 / pow($heightInInches, 2);

if ($BMI >= 18.5 && $BMI <= 25) {
    echo 'Your weight is considered optimal. Your BMI is: ' . $BMI;
} elseif ($BMI < 18.5) {
    echo 'You are considered underweight. Your BMI is: ' . $BMI;
} elseif ($BMI > 25) {
    echo 'You are considered overweight. Your BMI is: ' . $BMI;
}