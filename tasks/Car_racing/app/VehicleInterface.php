<?php
namespace App;

interface VehicleInterface
{
    public function getRideNumber(): string;
    public function createRide():void;
    public function getRide(): string;
    public function createCrashedRide(): void;
    public function getCrashedRide(): string;
    public function getMinSpeed(): int;
    public function getMaxSpeed(): int;
    public function increaseRacePosition(): void;
    public function setPosition($position): void;
    public function getRacePosition(): int;
    public function setFinnishTime($time): void;
    public function getFinnishTime(): float;
    public function setCrashStatus($value): void;
    public function getCrashStatus(): int;
    public function setFinnishStatus($value): void;
    public function getFinnishStatus(): int;
    public function setCrashRate($value): void;
    public function getCrashRate(): int;
}