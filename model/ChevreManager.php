<?php

namespace MVCTraining\Blog\Model;

require_once("model/RecipeManager.php");

Class ChevreManager extends RecipeManager
{
	public function getChevreList()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, nom, recette FROM lachevre');

		return $req;
	}

	public function getChevre($chevreId)
	{
		$db = $this->dbConnect();
		$reqGC = $db->prepare('SELECT id, nom, recette FROM lachevre WHERE id = ?');
		$returnreqGC = $reqGC->execute(array($chevreId));

		return $reqGC;
	}

	public function setRecipe($name, $recipe)
	{
		$db = $this->dbConnect();
		$response = $db->prepare('INSERT INTO lachevre(nom, recette) VALUES (?, ?)');
		$addNewRecipe = $response->execute(array($name, $recipe));

		return $addNewRecipe;
	}

	public function updateChevre($recipeId, $recipeName, $recipe)
	{
		$db = $this->dbConnect();
		$reqUC = $db->prepare('UPDATE lachevre SET nom = ? , recette = ? WHERE id = ?');
		$returnreqUC = $reqUC->execute(array($recipeName, $recipe, $recipeId));

		return $returnreqUC;

	}

	public function deleteRecipe($recipeId)
	{
		$db = $this->dbConnect();
		$reqDR = $db->prepare('DELETE FROM lachevre WHERE id = ?');
		$deleteStatus = $reqDR->execute(array($recipeId));

		return $deleteStatus;
	}

}