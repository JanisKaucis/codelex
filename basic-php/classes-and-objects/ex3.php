<?php

class FuelGauge
{
    public $amountOfFuel;

    /**
     * FuelGauge constructor.
     * @param $amountOfFuel
     */
    public function __construct($amountOfFuel)
    {
        $this->amountOfFuel = $amountOfFuel;
    }

    public function getAmountOfFuel()
    {
        return $this->amountOfFuel;
    }

    public function addFuel()
    {
        do {
            $amount = readline('Add fuel please. Max 70 liters') . PHP_EOL;
            echo 'Max fuel you can fill is: ' .(70 - round($this->amountOfFuel)).PHP_EOL;

        } while ($amount >= 70 - $this->amountOfFuel);

        while ($this->amountOfFuel < intval($amount)-1) {
            $this->amountOfFuel++;
            echo 'Fuel refilling: ' . round($this->amountOfFuel).PHP_EOL;
            usleep(200000);
        }
    }
}

class Odometer
{
    public $mileage;

    /**
     * Odometer constructor.
     * @param $mileage
     */
    public function __construct($mileage)
    {
        $this->mileage = $mileage;
    }

    public function getMileage()
    {
        return $this->mileage;
    }

    public function drive(FuelGauge $fuelGauge)
    {
        while (true) {
            while ($this->mileage <= 999999) {

                echo 'Miles: '.$this->mileage.', Fuel: '.round($fuelGauge->amountOfFuel).PHP_EOL;
                $this->mileage++;
                $fuelGauge->amountOfFuel -=0.1;
                usleep(50000);
                if ($fuelGauge->amountOfFuel <= 0){
                    $fuelGauge->addFuel();
                }
            }
            $this->mileage = 0;
        }
    }
}

$odometer = new Odometer(999900);
$fuelGauge = new FuelGauge(15);

$odometer->drive($fuelGauge);
