<?php

class AmazingGardenSuplier implements Suplier
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
                new Flower('Tulips Yellow'),10
            ),200
        );
        $this->products->add(
            new Product(
                new Flower('Tulips Red'),12
            ),300
        );
    }

    public function products(): ProductCollection
    {
        return new ProductCollection();
    }
}