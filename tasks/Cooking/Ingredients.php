<?php

class Ingredients
{
    private array $ingridients;

    /**
     * Ingridients constructor.
     * @param array $ingridients
     */
    public function __construct(array $ingridients)
    {
        $this->ingridients = $ingridients;
    }

    public function getIngredients(): array
    {
        return $this->ingridients;
    }
}