<?php

$groceries = [
    [
        'name' => 'meat',
        'price' => 6],
    [
        'name' => 'sausage',
        'price' => 3],
    [
        'name' => 'bread',
        'price' => 0.5],
    [
        'name' => 'butter',
        'price' => 1],
    [
        'name' => 'salad',
        'price' => 0.7]
];
$chosenProduct = readline('What will you buy?');
$productAmount = readline('How many will you buy?');

function order(string $input, string $product, int $amount,float $price): void
{   if ($product == $input) {
    echo 'Your order is to buy' . $amount . ' '
        . $product . 's. Price: $' . $price;
}
}

foreach ($groceries as $grocery) {

    order($chosenProduct,$grocery['name'], $productAmount, $grocery['price'] * $productAmount);
}
