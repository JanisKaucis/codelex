<?php

class CoolGardenSuplier implements Suplier
{

    private ProductCollection $products;

    /**
     * AmazingGardenSuplier constructor.
     * @param ProductCollection $products
     */
    public function __construct()
    {
        $this->products = new ProductCollection();
        $this->products->add(
            new Product(
                new Flower('Tulips Yellow'),12
            ),300
        );
        $this->products->add(
            new Product(
                new Flower('Tulips Red'),15
            ),400
        );
    }

    public function products(): ProductCollection
    {
        return new ProductCollection();
    }
}