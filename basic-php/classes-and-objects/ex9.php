<?php

class BankAccount
{
    private string $name;
    private float $balance;

    /**
     * BankAccount constructor.
     * @param $name
     * @param $balance
     */
    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    function show_user_name_and_balance(): string
    {
        if ($this->balance < 0) {
            $sign = '-';
        } else {
            $sign = '';
        }
        return $this->name . ', ' . $sign . '$' . number_format(abs($this->balance), 2, '.', ',');
    }
}

$account = new BankAccount('Benson', '-17.50');
echo $account->show_user_name_and_balance();
