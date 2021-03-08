<?php

class RecipeCollection
{
    private $recipes = [];

    public function addRecipe($recipe): void
    {
        $this->recipes[] = $recipe;
    }

    public function whatCanIMake(Ingredients $ingredients): string
    {   /* @var $recipe Recipe */
        $output = '';
        foreach ($this->recipes as $recipe) {
            $existingIngredients = array_intersect($recipe->getIngredients(), $ingredients->getIngredients());
            foreach ($existingIngredients as $ingredient){
                if (!in_array($ingredient,$recipe->getIngredients())) {
                    $output .= 'I wont make ' . $recipe->getName() . ' out of '.$ingredient. PHP_EOL;
                } else {
                    $output .= 'With '.$ingredient.' I can make ' . $recipe->getName() . PHP_EOL;
                    }
            }
        }
        return $output;
    }

    public function whatDoIMiss(Ingredients $ingredients): string
    {   /* @var $recipe Recipe */
        $output = '';
        foreach ($this->recipes as $recipe) {
            $existingIngredients = array_intersect($recipe->getIngredients(), $ingredients->getIngredients());
            $missingIngredients = array_diff($recipe->getIngredients(), $ingredients->getIngredients());
            if (count($existingIngredients) == count($recipe->getIngredients())) {
                $output .= $recipe->getName() . ': You have all ingredients' . PHP_EOL;
            } else {
                $output .= $recipe->getName() . ': You are missing :';
                foreach ($missingIngredients as $missingIngredient) {
                    $output .=$missingIngredient . ' ';
                }
                $output .= PHP_EOL;
            }
        }
        return $output;
    }

}

