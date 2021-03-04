<?php

class RecipeCollection
{
    private $recipes = [];

    public function addRecipe($recipe): void
    {
        $this->recipes[] = $recipe;
    }

    public function whatCanIMake(Ingredients $ingredients): void
    {   /* @var $recipe Recipe */
        foreach ($this->recipes as $recipe) {
            $existingIngredients = array_intersect($recipe->getIngredients(), $ingredients->getIngredients());
            foreach ($existingIngredients as $ingredient){
                if (!in_array($ingredient,$recipe->getIngredients())) {
                    echo 'I wont make ' . $recipe->getName() . ' out of '.$ingredient. PHP_EOL;
                } else {
                    echo 'With '.$ingredient.' I can make ' . $recipe->getName() . PHP_EOL;
                    }
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
                    echo $missingIngredient . ' ';
                }
                echo PHP_EOL;
            }
        }
    }

}

