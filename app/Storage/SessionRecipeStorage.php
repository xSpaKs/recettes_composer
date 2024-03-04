<?php

require_once("Contracts/RecipeStorageInterface.php");

/*namespace App\Storage\Contracts;
use App\Models\Recipe;*/

class SessionRecipeStorage implements RecipeStorageInterface
{
    public function all()
    {
       

        return $_SESSION["recipes"];
    }

    public function delete($id)
    {
        

        foreach ($_SESSION["recipes"] as $key => $recipe) 
        {
            if ($recipe->getId() == $id) 
            {
                unset($_SESSION["recipes"][$key]);
            }
        }
    }
    
    public function get($id)
    {
       

        foreach ($_SESSION["recipes"] as $key => $recipe) 
        {
            if ($recipe->getId() == $id) 
            {
                return $_SESSION["recipes"][$key];
            }
        }
    }

    public function store(Recipe $recipe)
    {
        array_push($_SESSION["recipes"], $recipe);
    }  

    public function update(Recipe $recipe)
    {
        
        foreach ($_SESSION["recipes"] as $key => $recipe_) 
        {
            if ($recipe_->getId() == $id) 
            {
                $_SESSION["recipes"][$key] = $recipe;
            }
        }
    }

    public function getPDO()
    {
        return $this->pdo;
    }

    public function setPDO($pdo)
    {
        $this->pdo = $pdo;
        return $this->pdo;
    }
}