<?php

class Product
{
    private string $name;
    public float $price_at_start;
    public int $amount_at_start;

    /**
     * Product constructor.
     * @param string $name
     * @param float $price_at_start
     * @param int $amount_at_start
     */
    public function __construct(string $name, float $price_at_start, int $amount_at_start)
    {
        $this->name = $name;
        $this->price_at_start = $price_at_start;
        $this->amount_at_start = $amount_at_start;
    }

    public function callProduct(): void
    {
        echo $this->name . ', ' . $this->price_at_start . ' EUR' . ', ' . $this->amount_at_start . ' units' . PHP_EOL;
    }

    public function getName(): string
    {
        return $this->name;
    }

}

class Store
{
    public array $products;


    public function addProducts(Product $product): void
    {
        $this->products[] = $product;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function changeQuantity(string $productInputString, int $newAmount)
    {
        return array_map(function (Product $product) use ($newAmount, $productInputString) {
            if ($product->getName() == $productInputString) {
                $product->amount_at_start = $newAmount;
            }
        }, $this->products);
    }

    public function changePrice(string $productInputString, int $newPrice)
    {
        return array_map(function (Product $product) use ($newPrice, $productInputString) {
            if ($product->getName() == $productInputString) {
                $product->price_at_start = $newPrice;
            }
        }, $this->products);
    }
}

$storeProducts = new Store();
$storeProducts->addProducts(new Product('Logitech mouse', 70.00, 14));
$storeProducts->addProducts(new Product('iPhone 5s', 999.99, 3));
$storeProducts->addProducts(new Product('Epson EB-U05', 440.46, 1));

foreach ($storeProducts->getProducts() as $product) {
    $product->callProduct();
}
$storeProducts->changeQuantity('Logitech mouse', 12);
$storeProducts->changePrice('iPhone 5s', 1200);
echo PHP_EOL;
foreach ($storeProducts->getProducts() as $product) {
    $product->callProduct();
}