<?php

class RecipeCollection
{
    private $recipes = [];

    public function addRecipe($recipe): void
    {
        $this->recipes[] = $recipe;
    }

    public function whatCanIMake(): void
    {   /* @var $recipe Recipe */
        $name = readline('Enter ingredient: ');
        foreach ($this->recipes as $recipe) {
            if (!in_array($name, $recipe->getIngredients())) {
                echo 'I wont make ' . $recipe->getName() . ' out of that' . PHP_EOL;
            } else {
                echo 'With ' . $name . ' I can make ' . $recipe->getName() . PHP_EOL;
            }
        }
    }

    public function whatDoIMiss(Ingredients $ingredients): void
    {   /* @var $recipe Recipe */
        foreach ($this->recipes as $recipe) {
            $existingIngredients = array_intersect($recipe->getIngredients(), $ingredients->getIngredients());
            $missingIngredients = array_diff($recipe->getIngredients(), $ingredients->getIngredients());
            if (count($existingIngredients) == count($recipe->getIngredients())) {
                echo $recipe->getName() . ': You have all ingredients' . PHP_EOL;
            } else {
                echo $recipe->getName() . ': You are missing :';
                foreach ($missingIngredients as $missingIngredient) {
                    echo $missingIngredient . ', ';
                }
                echo PHP_EOL;
            }
        }
    }

}

