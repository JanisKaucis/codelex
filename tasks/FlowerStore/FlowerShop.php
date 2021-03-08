<?php

class FlowerShop
{
    public array $flowersInShop = [];

    public function totalAmountOfFlowers(WarehouseCollection $collection, FlowerCollection $flowerCollection)
    {
        /* @var $warehouse Warehouse */
        /* @var $flower Flower */
        $amount = 0;
        foreach ($flowerCollection->getFlowers() as $flower) {
            foreach ($collection->getWarehouses() as $warehouse) {
                foreach ($warehouse->getFlowersAndQuantity() as $name => $quantity) {
                    if ($flower->getName() == $name) {
                        $amount += $quantity;
                        $this->flowersInShop[$name] = $amount;
                    }
                }
            }
            $amount = 0;
        }
    }
    public function getFlowersInShop(): array
    {
        return $this->flowersInShop;
    }
    public function getFlowerList(FlowerCollection $flowerCollection): string
    {
        /* @var $flower Flower */
        /* @var $warehouse Warehouse */
        $output = '';
        foreach ($flowerCollection->getFlowers() as $flower){
            foreach ($this->flowersInShop as $flowerName => $quantity){
                if ($flower->getName() == $flowerName){
                    $output .= 'Flower: '.$flowerName.'| Price: '.$flower->getPrice().'| Quantity: '.$quantity.PHP_EOL;
                }
            }
        }
        return $output;
    }
    public function sellFlowers(FlowerCollection $flowers, $flowerName,$amount,$gender): float
    {
        /* @var $flower Flower */
        foreach ($this->flowersInShop as $keyName => $quantity){
            if ($keyName == $flowerName){
                $quantity -= $amount;
                $this->flowersInShop[$keyName] = $quantity;
            }
        }
        foreach ($flowers->getFlowers() as $flower){
            if ($gender == 'female' && $flower->getName() == $flowerName){
                $price = $flower->getPrice()*$amount*0.8;
            }elseif ($gender == 'male' && $flower->getName() == $flowerName){
                $price = $flower->getPrice()*$amount;
            }
        }
        var_dump($this->flowersInShop);
        return $price;
    }
}