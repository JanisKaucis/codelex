<?php
require_once 'Flower.php';
require_once 'FlowerCollection.php';
require_once 'Warehouse.php';
require_once 'WarehouseCollection.php';
require_once 'FlowerShop.php';
//FlowerShop
//List of flowers and prices
//Option to purchase
//First question: male/female
//if female -> apply 20% discount at the end
//3 different warehouses where flowers come from
//flowerShop -> Warehouse1/warehouse2/warehouse3
//
//Warehouse 1 => flower('Tulip',20);
$warehouseCollection = new WarehouseCollection();
$warehouseCollection->addWarehouse(new Warehouse('warehouse1',['Tulip' => 20,'Red Rose' => 40,'White Rose' => 30]));
$warehouseCollection->addWarehouse(new Warehouse('warehouse2',['Daisy' => 20,'Red Rose' => 20,'Yellow Rose' => 20]));
$warehouseCollection->addWarehouse(new Warehouse('warehouse3',['Poppy' => 20,'Pink Rose' => 30,'White Rose' => 20]));
$flowerCollection = new FlowerCollection();
$flowerCollection->addFlower(new Flower('Tulip',1.20));
$flowerCollection->addFlower(new Flower('Red Rose',1.50));
$flowerCollection->addFlower(new Flower('White Rose', 2.20));
$flowerCollection->addFlower(new Flower('Pink Rose', 2.00));
$flowerCollection->addFlower(new Flower('Yellow Rose', 1.80));
$flowerCollection->addFlower(new Flower('Daisy', 0.80));
$flowerCollection->addFlower(new Flower('Poppy', 0.60));

$flowerShop = new FlowerShop();
$flowerShop->totalAmountOfFlowers($warehouseCollection,$flowerCollection);
var_dump($flowerShop->getFlowersInShop());
$gender = readline('Are you male of female?');
echo $flowerShop->getFlowerList($flowerCollection);
$flowerYouWant = readline('What flower you want to buy?');
$amount = intval(readline('How many you want to buy?: '));
echo 'Total price is: '.$flowerShop->sellFlowers($flowerCollection,$flowerYouWant,$amount,$gender);

