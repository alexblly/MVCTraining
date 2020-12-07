
<?php ob_start(); ?>
<h1>Mes supers recettes !</h1>
<p>Dernières recettes de la chèvre:</p>


<?php
while ($data = $chevres->fetch())
{
?>
    <div class="news">
        <h3>
        	<a class="modifier" href="index.php?action=displayModifRecipe&amp;id=<?= $data['id'] ?>">Modifier</a>
            <?= htmlspecialchars($data['nom']) ?>
            <a class="supprimer" href="index.php?action=removeRecipe&amp;id=<?= $data['id'] ?>">Supprimer</a>
        </h3>
        
        <p>
            <?= nl2br(htmlspecialchars($data['recette'])) ?>
            <br />
        </p>
    </div>
<?php
}
$chevres->closeCursor();
?>

<h4> Ajoutez une recette! </h4>
<form action="index.php?action=addRecipe" method="post">
    <div>
        <label for="name">Nom</label><br />
        <input type="text" id="name" name="name" />
    </div>
    <div>
        <label for="recipe">Recette</label><br />
        <textarea id="recipe" name="recipe"></textarea>
    </div>
    <div>
        <input type="submit" />
    </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('header.php'); ?>

