<?php

class CarCollection
{
    private array $carCollection = [];

    public function addCar($car): void
    {
        $this->carCollection[] = $car;
    }
    public function getCarCollection(): array
    {
        return $this->carCollection;
    }
}