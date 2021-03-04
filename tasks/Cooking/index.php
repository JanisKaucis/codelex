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

$recipes = new RecipeCollection();
$ingredients = new Ingredients(['tomato', 'cucumber', 'eggs', 'banana', 'sausage']);
$turboSalad = new Recipe('turboSalad', ['tomato', 'eggs', 'cucumber', 'banana']);
$cesarSalad = new Recipe('cesarSalad', ['tomato', 'cheese', 'cucumber', 'salad', 'oil']);
$recipes->addRecipe($turboSalad);
$recipes->addRecipe($cesarSalad);

$recipes->whatCanIMake();
$recipes->whatDoIMiss($ingredients);
