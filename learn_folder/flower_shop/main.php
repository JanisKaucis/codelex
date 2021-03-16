<?php
require_once 'Sellable.php';
require_once 'Sellables/Flower.php';
require_once 'Sellables/Toy.php';
require_once 'Product.php';
require_once 'ProductCollection.php';
require_once 'Shop.php';
require_once 'Suplier.php';
require_once 'Supplies/AmazingGardenSuplier.php';
require_once 'Supplies/CoolGardenSuplier.php';
//O: shop, flower,flowerCollection,XSupplier,YSupplier,ZSupplier
// I: Supplies

$products = new ProductCollection();
$products->add(new Product(new Flower('Tulip'),10),200);
$products->add(new Product(new Toy('Teddy',3),200),5);
//var_dump($products);

$shop = new Shop();
$shop->addSupplier(new AmazingGardenSuplier());
$shop->addSupplier(new CoolGardenSuplier());

var_dump($shop);