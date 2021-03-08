<?php

interface Payment
{
    public function pay():void;
}
class PaypalPayment implements Payment
{
    public function pay(): void
    {
        // TODO: Implement pay() method.
        var_dump('Pay with Paypal');
    }
}
class Creditcard implements Payment
{
    public function pay(): void
    {
        // TODO: Implement pay() method.
        var_dump('Pay with Credit card');
    }
}
class Application
{
    public function run():void
    {
        $paymentMethod = readline('Enter payment method');
        switch ($paymentMethod)
        {
            case 'paypal':
                $payment = new PaypalPayment();
                break;
            case 'cc':
                $payment = new Creditcard();
                break;
        }
        $this->execute($payment);
    }
    private function execute(Payment $payment)
    {
        $payment->pay();
    }
}

(new Application())->run();