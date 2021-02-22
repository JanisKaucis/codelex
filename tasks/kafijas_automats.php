<?php

//kafijas automats
//nauda - 1,2 ,5, 10, 20, 50, 100, 200;
// 99 -> 50 -> 2x 20 -> 5 -> 2x2 ->1;
//---------------
//Wallet:
//Wallet total:
//Latte, Melna kafija, Balta kafija
//[1] Latte 2.04
// [2] melna kafija 1.80
// [3] balta kafija; 2.20
//200,10
//6 ->5,1
//------------------------------------
//Wallet;
//Wallet total;
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

function walletTotal(array $arr): int
{
    foreach ($arr as $key => $value) {
        $sums[] = $key * $value;

    }
    $total = 0;
    foreach ($sums as $sum) {
        $total += $sum;
    }
    echo 'Atlikums maka: ';
    return $total;
}



$coffee = new stdClass();
$coffee->Latte = 204;
$coffee->Black_coffee = 188;
$coffee->White_coffee = 199;
again:
echo walletTotal($Wallet) . PHP_EOL;
$customerChoice = readline('Kadu kafiju dzersiet? 1 : Latte, 2 : Black_coffee, 3 : White_coffee');
if ($customerChoice == 1) {
    $leftToPay = $coffee->Latte;
    echo 'Latte, Cena 204'.PHP_EOL;
    $Wallet = pay($leftToPay, $Wallet);
    echo walletTotal($Wallet) . PHP_EOL;
} elseif ($customerChoice == 2){
    $leftToPay = $coffee->Black_coffee;
    echo 'Melna Kafija, Cena 188'.PHP_EOL;
    $Wallet = pay($leftToPay, $Wallet);
    echo walletTotal($Wallet) . PHP_EOL;
}elseif ($customerChoice == 3){
    $leftToPay = $coffee->White_coffee;
    echo 'Balta Kafija, Cena 199'.PHP_EOL;
    $Wallet = pay($leftToPay, $Wallet);
    echo walletTotal($Wallet) . PHP_EOL;
}else {
    echo 'Ievadiet pareizu izveli!'.PHP_EOL;
    goto again;
}
    echo ('Ludzu panemiet savu kafiju'.PHP_EOL);
    $ask = readline('Vai gribat vel kafiju? y:press y, or no:press any other key'.PHP_EOL);
if ($ask == 'y'){
    goto again;
} else {
    exit('Bye!');
}

    function pay(int $change,array $arr): array
    {

        retry:
        while ($change != 0) {
            $customerPays = readline(PHP_EOL . 'Iemetiet naudu: ');
            foreach ($arr as $key => $money) {
                if (!array_key_exists($customerPays, $arr)) {
                    echo 'Ieliec pareizu monetu!' . PHP_EOL;
                    goto retry;
                } elseif ($customerPays == $key && $money > 0) {
                    $arr[$key] -= 1;

                    $change -= intval($customerPays);
                    if ($change < 0) {
                        echo 'Jums pienakas atlikums: +' . abs($change) . PHP_EOL;
                        while ($change < 0) {
                            switch ($change) {
                                case $change <= -200 :
                                    $arr[200] += 1;
                                    $change += 200;
                                    break;
                                case $change <= -100 :
                                    $arr[100] += 1;
                                    $change += 100;
                                    break;
                                case $change <= -50 :
                                    $arr[50] += 1;
                                    $change += 50;
                                    break;
                                case $change <= -20 :
                                    $arr[20] += 1;
                                    $change += 20;
                                    break;
                                case $change <= -10 :
                                    $arr[10] += 1;
                                    $change += 10;
                                    break;
                                case $change <= -5 :
                                    $arr[5] += 1;
                                    $change += 5;
                                    break;
                                case $change <= -2 :
                                    $arr[2] += 1;
                                    $change += 2;
                                    break;
                                case $change <= -1 :
                                    $arr[1] += 1;
                                    $change += 1;
                                    break;
                            }
                        }
                    } else {
                        echo 'Atlicis maksat: ' . $change . PHP_EOL;
                    }

                } elseif ($customerPays == $key && $money == 0) {
                    echo 'Sis monetas ir beigusas. Izvelies citu monetu!';
                    goto retry;
                }
            }
        }
        return $arr;
    }