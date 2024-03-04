<?php

/*namespace App\Storage\Contracts;
use App\Models\Recipe;*/

interface RecipeStorageInterface
{
    public function all();
    public function delete($id);
    public function get($id);
    public function store(Recipe $recipe);
    public function update(Recipe $recipe);
}

class MySqlDatabaseRecipeStorage implements RecipeStorageInterface
{
    protected $pdo;

    function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function all()
    {
        $request = "SELECT * FROM recipes";
        $requestPrepare = $this->pdo->prepare($request);

        $requestPrepare->execute();

        return $requestPrepare->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $request = "DELETE recipes WHERE id = ?";
        $requestPrepare = $this->pdo->prepare($request);

        $requestPrepare->execute($id);
    }
    
    public function get($id)
    {
        $request = "SELECT * FROM recipes WHERE id = ?";
        $requestPrepare = $this->pdo->prepare($request);

        $requestPrepare->execute($id);

        return $requestPrepare->fetch();
    }

    public function store(Recipe $recipe)
    {
        $request = "INSERT INTO recipes (`name`, `description`, `people`, `preparation_time`) VALUES (?, ?, ?, ?)";
        $requestPrepare = $this->pdo->prepare($request);

        $requestPrepare->execute([
            $recipe->name,
            $recipe->description,
            $recipe->people,
            $recipe->prep_time
        ]);
    }  

    public function update(Recipe $recipe)
    {
        $request = "UPDATE recipes SET `name` = ?, `description` = ?, `people` = ?, `preparation_time` = ?) WHERE id = ?";
        $requestPrepare = $this->pdo->prepare($request);

        $requestPrepare->execute([
            $recipe->name,
            $recipe->description,
            $recipe->people,
            $recipe->prep_time,
            $recipe->id
        ]);
    }

    public function getPDO()
    {
        return $this->pdo;
    }

    public function setPDO($pdo)
    {
        $this->pdo = $pdo;
        return $this;
    }
}

?>
