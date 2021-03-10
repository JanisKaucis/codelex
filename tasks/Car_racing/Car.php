<?php

class Car
{
    private string $car;
    private string $crashedCar;
    private string $carNumber;
    private int $minSpeed;
    private int $maxSpeed;
    private int $racePosition = 0;
    private int $carCrashStatus = 0;
    private int $carFinnishStatus = 0;
    private float $carFinnishTime = 0;
    private int $crashRate;

    /**
     * Car constructor.
     * @param int $carNumber
     */
    public function __construct(string $carNumber,int $minSpeed,int $maxSpeed)
    {
        $this->carNumber = $carNumber;
        $this->minSpeed = $minSpeed;
        $this->maxSpeed = $maxSpeed;
        $this->createCar();
        $this->createCrashedCar();
    }
    public function getCarNumber(): string
    {
        return $this->carNumber;
    }

    public function createCar():void
    {
        $this->car = '['.$this->carNumber.'.]';
    }
    public function getCar(): string
    {
        return $this->car;
    }
    public function createCrashedCar(): void
    {
        $this->crashedCar = 'X'.$this->carNumber.'.X';
    }
    public function getCrashedCar(): string
    {
        return $this->crashedCar;
    }
    public function getMinSpeed(): int
    {
        return $this->minSpeed;
    }
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }
    public function increaseRacePosition(): void
    {
        $this->racePosition += rand($this->getMinSpeed(),$this->getMaxSpeed());
    }
    public function setPosition($position): void
    {
        $this->racePosition = $position;
    }
    public function getRacePosition(): int
    {
        return $this->racePosition;
    }
    public function setFinnishTime($time): void
    {
        $this->carFinnishTime += $time;
    }
    public function getFinnishTime(): float
    {
        return $this->carFinnishTime;
    }
    public function setCrashStatus($value): void
    {
        $this->carCrashStatus = $value;
    }
    public function getCrashStatus(): int
    {
        return $this->carCrashStatus;
    }
    public function setFinnishStatus($value): void
    {
        $this->carFinnishStatus = $value;
    }
    public function getFinnishStatus(): int
    {
        return $this->carFinnishStatus;
    }
    public function setCrashRate($value)
    {
        $this->crashRate = $value;
    }
    public function getCrashRate(): int
    {
        return $this->crashRate;
    }
}