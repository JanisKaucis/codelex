<?php

class Ingredients
{
    private array $ingridients = [];

    public function getIngredients(): array
    {
        return $this->ingridients;
    }
    public function addIngredients($addedIngredient): void
    {
            $this->ingridients[] =  $addedIngredient;
    }
}