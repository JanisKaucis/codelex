<?php

class FlowerCollection
{
    public array $collection =[];

    public function addFlower($flower)
    {
        $this->collection[] = $flower;
    }
    public function getFlowers(): array
    {
        return $this->collection;
    }
}