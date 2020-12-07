<?php
require('controller/chevreController.php');

try {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'listChevres') {
            listChevres();
        }

        elseif ($_GET['action'] == 'addRecipe') {
            if (!empty($_POST['name']) && !empty($_POST['recipe'])) {

                addRecipe($_POST['name'], $_POST['recipe']);
            }
            else {
                throw new Exception('Tous les champs ne sont pas remplis !');
            }       
        }

        elseif ($_GET['action'] == 'removeRecipe') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                removeRecipe($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de recette envoyé');
            }
        }
        elseif ($_GET['action'] == 'displayModifRecipe') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                chevre($_GET['id']);
            }
            else {
                throw new Exception('Aucun identifiant de recette envoyé');
            }
        }
        elseif ($_GET['action'] == 'updateRecipe') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['name']) && !empty($_POST['recipe'])) {
                    updateRecipe($_GET['id'], $_POST['name'], $_POST['recipe']);
                }
                else {
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            }
            else {
                throw new Exception('Aucun identifiant de recette envoyé');
            }
        }
    }
    else {
        
        listChevres();
    }
}

catch(Exception $e) {
    echo 'Erreur : ' . $e->getMessage();
}
