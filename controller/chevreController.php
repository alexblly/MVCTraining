<?php

require_once ('model/ChevreManager.php');

function listChevres()
{
	$chevreManager = new \MVCTraining\Blog\Model\ChevreManager();
	$chevres = $chevreManager->getChevreList();

	require('view/frontend/listChevreView.php');
}

function chevre($recipeId)
{
	$chevreManager = new \MVCTraining\Blog\Model\ChevreManager();
	$chevres = $chevreManager->getChevre($recipeId);

	require('view/frontend/chevreView.php');
}

function addRecipe($recipeName, $recipe)
{
	$chevreManager = new \MVCTraining\Blog\Model\ChevreManager();
	$addNewRecipe = $chevreManager->setRecipe($recipeName, $recipe);

    if ($addNewRecipe === false) {
        throw new Exception('Impossible d\'ajouter la recette !');
    }
    else {
        header('Location: index.php?action=listChevres');
    }
}

function updateRecipe($recipeId, $recipeName, $recipe)
{
	$chevreManager = new \MVCTraining\Blog\Model\ChevreManager();
	$updateRecipe = $chevreManager->updateChevre($recipeId, $recipeName, $recipe);

	if ($updateRecipe === false) {
        throw new Exception('Impossible de modifier la recette !');
    }
    else {
        header('Location: index.php?action=listChevres');
    }
}

function removeRecipe($recipeId)
{
	$chevreManager = new \MVCTraining\Blog\Model\ChevreManager();
	$removeRecipe = $chevreManager->deleteRecipe($recipeId);

	if ($removeRecipe === false) {
        throw new Exception('Impossible de supprimer la recette !');
    }
    else {
        header('Location: index.php?action=listChevres');
    }

}