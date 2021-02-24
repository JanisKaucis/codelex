<?php


$Wallet = [
    1 => 10,
    2 => 5,
    5 => 3,
    10 => 4,
    20 => 3,
    50 => 2,
    100 => 3,
    200 => 1
];

function walletTotal(array $array): int
{
    $total = 0;
    foreach ($array as $key => $value) {
        $total += $key * $value;
    }

    echo 'Balance wallet: ';
    return $total;
}

class Coffee
{
    public $number;
    public $name;
    public $price;


    public function __construct($number, $name, $price)
    {
        $this->number = $number;
        $this->name = $name;
        $this->price = $price;
    }

}

$menuChoicesArray = [1, 2, 3];
$menu = [
    new Coffee(1, 'Latte', 204),
    new Coffee(2, 'Black Coffee', 188),
    new Coffee(3, 'White Coffee', 199)
];

echo walletTotal($Wallet) . PHP_EOL;

$customerChoice = readline('What coffee will you drink? 1 : Latte, 2 : Black_coffee, 3 : White_coffee');
while (!in_array($customerChoice, $menuChoicesArray)) {
    echo 'Enter valid number' . PHP_EOL;
    $customerChoice = readline('What coffee will you drink? 1 : Latte, 2 : Black_coffee, 3 : White_coffee');
}
for ($i = 0; $i < count($menu); $i++) {
    if ($customerChoice == $menu[$i]->number) {
        $leftToPay = $menu[$i]->price;
        echo $menu[$i]->name . ' Price: ' . $menu[$i]->price . PHP_EOL;
        $Wallet = pay($leftToPay, $Wallet);
        echo walletTotal($Wallet) . PHP_EOL;
    }
}

function pay(int $change, array $array): array
{

    while ($change != 0) {
        foreach ($array as $key => $item) {
            echo $key . ' : ' . $item . ' | ';
        }
        echo PHP_EOL;
        $customerPays = readline(PHP_EOL . 'Add money: ');

        while (!array_key_exists($customerPays, $array)) {
            echo 'Insert the correct coin!' . PHP_EOL;
            $customerPays = readline(PHP_EOL . 'Add money: ');
        }

        foreach ($array as $key => $money) {
            if ($customerPays == $key && $money == 0) {
                echo 'This coin is over. Choose another coin!' . PHP_EOL;
                break;
            }
            if ($customerPays == $key && $money > 0) {
                $array[$key] -= 1;

                $change -= intval($customerPays);
                if ($change < 0) {
                    echo 'Here is your change: +' . abs($change) . PHP_EOL;
                    while ($change < 0) {
                        switch ($change) {
                            case $change <= -200 :
                                $array[200] += 1;
                                $change += 200;
                                break;
                            case $change <= -100 :
                                $array[100] += 1;
                                $change += 100;
                                break;
                            case $change <= -50 :
                                $array[50] += 1;
                                $change += 50;
                                break;
                            case $change <= -20 :
                                $array[20] += 1;
                                $change += 20;
                                break;
                            case $change <= -10 :
                                $array[10] += 1;
                                $change += 10;
                                break;
                            case $change <= -5 :
                                $array[5] += 1;
                                $change += 5;
                                break;
                            case $change <= -2 :
                                $array[2] += 1;
                                $change += 2;
                                break;
                            case $change <= -1 :
                                $array[1] += 1;
                                $change += 1;
                                break;
                        }
                    }
                } else {
                    echo 'Left to pay: ' . $change . PHP_EOL;
                }
            }
        }
    }
    echo('Please take your coffee' . PHP_EOL);
    foreach ($array as $key => $item) {
        echo $key . ' : ' . $item . ' | ';
    }
    echo PHP_EOL;
    return $array;
}