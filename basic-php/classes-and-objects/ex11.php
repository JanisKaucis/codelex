<?php

class Account
{
    private string $accountName;
    private float $accountBalance;

    /**
     * Account constructor.
     * @param string $accountName
     * @param float $accountBalance
     */
    public function __construct(string $accountName, float $accountBalance)
    {
        $this->accountName = $accountName;
        $this->accountBalance = $accountBalance;
    }

    public function __toString(): string
    {
        return $this->accountName . ' ' . $this->accountBalance;
    }

    public function deposit(float $deposit): void
    {
        $this->accountBalance += $deposit;
    }

    public function withdrawal(float $withdrawal): void
    {
        $this->accountBalance -= $withdrawal;
    }

    public function moneyTransfer(Account $from, Account $to, float $amount): void
    {
        echo $from->accountName . ' balance was: ' . $from->accountBalance . PHP_EOL;
        echo $to->accountName . ' balance was: ' . $to->accountBalance . PHP_EOL;
        $from->withdrawal($amount);
        $to->deposit($amount);
        echo $from->accountName . ' new balance is: ' . $from->accountBalance . PHP_EOL;
        echo $to->accountName . ' new balance is: ' . $to->accountBalance . PHP_EOL;
    }

}

$matts_account = new Account("Matt's account", 1000.00);
$my_account = new Account("My account", 0);
$account_A = new Account('A', 100);
$account_B = new Account('B', 0);
$account_C = new Account('C', 0);

$matts_account->moneyTransfer($matts_account, $my_account, 100.0);
$account_A->moneyTransfer($account_A, $account_B, 50);
$account_B->moneyTransfer($account_B, $account_C, 25);
