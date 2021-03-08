<?php
require_once 'Ingredients.php';
require_once 'RecipeCollection.php';
require_once 'Recipes.php';
//X: 2
//tomato
//cucumber

//Recipe - Tomato, eggs, cucumber, banana/ turboSalad
// Recipe - Tomato, nuts /NotTurboSalad

//With Tomato I can make turboSalad, NotTurboSalad
//turboSalad: Missing- eggs, banana
//NotTurboSalad: missing - nuts
//['tomato', 'cucumber', 'eggs', 'banana', 'sausage']
$recipes = new RecipeCollection();
$ingredients = new Ingredients();
$turboSalad = new Recipe('turboSalad', ['tomato', 'eggs', 'cucumber', 'banana']);
$cesarSalad = new Recipe('cesarSalad', ['tomato', 'cheese', 'cucumber', 'salad', 'oil']);
$recipes->addRecipe($turboSalad);
$recipes->addRecipe($cesarSalad);
$ingredientAmount = intval(readline('How many ingredients will you add?'));
do{
$addedIngredient = readline('Add ingredient: ');
$ingredients->addIngredients($addedIngredient);
$ingredientAmount--;
}while($ingredientAmount != 0);
echo $recipes->whatCanIMake($ingredients);
echo $recipes->whatDoIMiss($ingredients);

//todo partaisit lai metodes neizvada echo un ieteicams iznemt readline no metodem.