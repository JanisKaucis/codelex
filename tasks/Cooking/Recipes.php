<?php
//Recipe - Tomato, eggs, cucumber, banana/ turboSalad
// Recipe - Tomato, nuts /NotTurboSalad
class Recipe
{
    private string $name;
    private array $ingredients;

    /**
     * Recipe constructor.
     * @param array $ingredients
     */
    public function __construct(string $name, array $ingredients)
    {
        $this->name = $name;
        $this->ingredients = $ingredients;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getName(): string
    {
        return $this->name;
    }

}

