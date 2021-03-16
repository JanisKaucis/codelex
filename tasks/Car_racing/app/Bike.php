<?php
namespace App;
require_once 'VehicleInterface.php';

class Bike implements VehicleInterface
{
    private string $ride;
    private string $crashedRide;
    private string $rideNumber;
    private int $minSpeed;
    private int $maxSpeed;
    private int $racePosition = 0;
    private int $rideCrashStatus = 0;
    private int $rideFinnishStatus = 0;
    private float $rideFinnishTime = 0;
    private int $crashRate;
    /**
     * Car constructor.
     * @param string $rideNumber
     * @param int $minSpeed
     * @param int $maxSpeed
     */
    public function __construct(string $rideNumber, int $minSpeed, int $maxSpeed)
    {
        $this->rideNumber = $rideNumber;
        $this->minSpeed = $minSpeed;
        $this->maxSpeed = $maxSpeed;
        $this->createRide();
        $this->createCrashedRide();
    }

    public function getRideNumber(): string
    {
        return $this->rideNumber;
    }

    public function createRide():void
    {
        $this->ride = '['.$this->rideNumber.'.o';
    }
    public function getRide(): string
    {
        return $this->ride;
    }
    public function createCrashedRide(): void
    {
        $this->crashedRide = 'X'.$this->rideNumber.'.x';
    }
    public function getCrashedRide(): string
    {
        return $this->crashedRide;
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
        $this->rideFinnishTime += $time;
    }
    public function getFinnishTime(): float
    {
        return $this->rideFinnishTime;
    }
    public function setCrashStatus($value): void
    {
        $this->rideCrashStatus = $value;
    }
    public function getCrashStatus(): int
    {
        return $this->rideCrashStatus;
    }
    public function setFinnishStatus($value): void
    {
        $this->rideFinnishStatus = $value;
    }
    public function getFinnishStatus(): int
    {
        return $this->rideFinnishStatus;
    }
    public function setCrashRate($value): void
    {
        $this->crashRate = $value;
    }
    public function getCrashRate(): int
    {
        return $this->crashRate;
    }
}