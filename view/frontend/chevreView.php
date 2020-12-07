
<?php ob_start(); ?>
<h1>Modification de la recette</h1>
<p>Modifier cette recette</p>


<?php
while ($data = $chevres->fetch())
{
?>

<form action="index.php?action=updateRecipe&amp;id=<?= $data['id'] ?>" method="post">
    <div class="news">
        <h3>        
            <textarea id="name" name="name"><?= htmlspecialchars($data['nom']) ?></textarea>
        </h3>
        
        <p>
            <textarea id="recipe" name="recipe"><?= htmlspecialchars($data['recette']) ?></textarea>
            <br/>
        </p>
        <div>
            <input type="submit" value="Valider"/>
            <form>
                <input type="button" value="Annuler" onclick="history.back()">
            </form>
        </div>
    </div>
</form>

<?php
}
$chevres->closeCursor();
?>

<?php $content = ob_get_clean(); ?>

<?php require('header.php'); ?>

