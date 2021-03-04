<?php

class Ingredients
{
    private array $ingridients = [];

    public function getIngredients(): array
    {
        return $this->ingridients;
    }
    public function addIngredients(): void
    {
        $ingredientAmount = intval(readline('How many ingredients will you add?'));
        do{
            $addedIngredient = readline('Add ingredient: ');
            $this->ingridients[] =  $addedIngredient;
            $ingredientAmount--;
        }while($ingredientAmount != 0);
    }
}