<?php

class Warehouse
{
    public string $warehouseName;
    public array $flowersAndQuantity = [];
    public array $quantity = [];
    public array $flowerNames = [];

    /**
     * Warehouse constructor.
     * @param string $warehouseName
     * @param array $flowersAndQuantity
     */
    public function __construct(string $warehouseName, array $flowersAndQuantity)
    {
        $this->warehouseName = $warehouseName;
        $this->flowersAndQuantity = $flowersAndQuantity;
    }
    public function getFlowersAndQuantity(): array
    {
        return $this->flowersAndQuantity;
    }
    public function getQuantityAndName(): void
    {
        foreach ($this->flowersAndQuantity as $name => $quantity)
        {
         $this->quantity[] = $quantity;
         $this->flowerNames[] = $name;
        }
    }
}