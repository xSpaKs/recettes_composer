<?php

require_once("../app/Models/Recipe.php");
require_once("../app/Storage/Contracts/RecipeStorageInterface.php");
require_once("../app/Storage/SessionRecipeStorage.php");
session_start();

$_SESSION["recipes"] = [];

$dsn = 'mysql:dbname=recipes;host=127.0.0.1';
$user = 'aranhiblot';
$password = 'Bm1vx3;I';

$db = new PDO($dsn, $user, $password);

$storage = new SessionRecipeStorage();
print_r($storage->all());
// Delete a recipe
$storage->delete(1);
// Get a recipe
$storage->get(1);
// Create a recipe
$recipe = new Recipe;
$recipe->setCreatedAt(new DateTime())
 ->setName('Fondant au chocolat mi-cuit')
 ->setDescription('La recette du fameux fondant au chocolat mi-cuit.')
 ->setPeople(4)
 ->setPrepTime(40);
$recipeId = $storage->store($recipe);
print_r($storage->get($recipeId));
// Update a recipe
$recipe = $storage->get(1);
$recipe->setComplete();
$storage->update($recipe);

