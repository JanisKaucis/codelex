<?php

class SavingsAccount
{
    private float $balance;
    private float $interestRate;
    private int $timeAccountExists;
    private float $monthlyInterestRate;
    private float $monthlyInterestEarned;
    private float $interestEarned = 0;
    private float $totalDeposit = 0;
    private float $totalWithdrawal = 0;

    /**
     * SavingsAccount constructor.
     * @param int $startingBalance
     */
    public function __construct(int $startingBalance)
    {
        $this->balance = $startingBalance;
    }
    public function getBalance(): float
    {
        return $this->balance;
    }
    public function timeAccountExists($timeAccountExists): void
    {
        $this->timeAccountExists = $timeAccountExists;
    }
    public function getTimeAccountExists(): int
    {
        return $this->timeAccountExists;
    }

    public function depositInMonth(float $depositAmount): void
    {
        $this->totalDeposit +=$depositAmount;
        $this->balance += $depositAmount;
    }
    public function getTotalDeposit(): float
    {
        return $this->totalDeposit;
    }

    public function withdrawalInMonth(float $withdrawnAmount): void
    {
        $this->totalWithdrawal += $withdrawnAmount;
        $this->balance -= $withdrawnAmount;
    }

    public function getTotalWithrawl(): float
    {
        return $this->totalWithdrawal;
    }

    public function interestRate(float $interestRate): void
    {
        $this->interestRate = $interestRate;
    }
    public function getInterestRate(): float
    {
        return $this->interestRate;
    }
    public function monthlyInterestRate(): void
    {
        $this->monthlyInterestRate = $this->getInterestRate()/100/12;

    }
    public function interestEarned(): void
    {
        $this->monthlyInterestEarned = $this->monthlyInterestRate*$this->balance;
        $this->interestEarned +=$this->monthlyInterestEarned;
    }

    public function getInterestEarned(): float
    {
        return $this->interestEarned;
    }
    public function balanceWithInterestEarnings(): void
    {
        $this->balance +=$this->monthlyInterestEarned;
    }
    public function main()
    {
        for ($i=1;$i<=$this->getTimeAccountExists();$i++)
        {
            $this->depositInMonth(floatval(readline('Enter amount deposited for month: '.$i.': ')));
            $this->withdrawalInMonth(floatval(readline('Enter amount withdrawn for '.$i.': ')));
            $this->interestEarned();
            $this->balanceWithInterestEarnings();
        }
    }
}

$savingsAccount = new SavingsAccount(floatval(readline('How much money is in the account?: ')));
$savingsAccount->interestRate(floatval(readline('Enter the annual interest rate: ')));
$savingsAccount->monthlyInterestRate();
$savingsAccount->timeAccountExists(intval(readline('How long has the account been opened? ')));
$savingsAccount->main();
echo 'Total deposited: $'.number_format($savingsAccount->getTotalDeposit(),2,'.',',').PHP_EOL;
echo 'Total withdrawn: $'.number_format($savingsAccount->getTotalWithrawl(),2,'.',',').PHP_EOL;
echo 'Interest earned: $'.number_format($savingsAccount->getInterestEarned(),2,'.',',').PHP_EOL;
echo 'Ending balance: $'.number_format($savingsAccount->getBalance(),2,'.',',').PHP_EOL;


