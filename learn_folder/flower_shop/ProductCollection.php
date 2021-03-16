<?php

class ProductCollection
{
private array $products = [];

    /**
     * ProductCollection constructor.
     * @param array $products
     */
//    public function __construct(array $products)
//    {
//        $this->products = []
//    }
    public function add(Product $product,int $amount = 1): void
    {
        $barCode = $product->barCode();
        if (isset($this->products[$product->barCode()]))
        {
            $this->products[$barCode]['amount']+= $amount;
            return;
        }
        $this->products[$barCode] = [
            'product' => $product,
            'amount' => 1
        ];
    }
    public function all(): array
    {
        return $this->products;
    }
}