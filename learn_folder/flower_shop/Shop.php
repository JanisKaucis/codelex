<?php

class Shop
{
private array $suppliers = [];

public function addSupplier(Suplier $suplier): void
{
    $this->suppliers[] = $suplier;
}
public function products(): ProductCollection
{
    $products = new ProductCollection();
    foreach ($this->suppliers as $supplier)
    {
       $supplierProducts = $supplier->products()->all();

       foreach ($supplierProducts as $barCode => ['product' => $product, 'amount' => $amount])
       {
//           $p = $supplierProduct['product'];
//           $amount = $supplierProduct['amount'];

           $products->add(
               new Product(
                   $product->sellable(),
                   $product->price() +
                   ($product->price() * 0.2)
               )
           );
       }
    }
    return $products;
}
}