<?php

class WarehouseCollection
{
    public array $warehouses = [];

    public function addWarehouse($warehouse)
    {
        $this->warehouses[] = $warehouse;
    }
    public function getWarehouses()
    {
        return $this->warehouses;
    }
}