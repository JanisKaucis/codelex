<?php
namespace App;

class RacerCollection
{
    private array $racerCollection = [];

    public function addRacer($car): void
    {
        $this->racerCollection[] = $car;
    }
    public function getRacerCollection(): array
    {
        return $this->racerCollection;
    }
}