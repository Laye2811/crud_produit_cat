<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier une Catégorie</title>
</head>
<body>
    <h1>Modifier une Catégorie</h1>
    <form method="POST" action="">
        <label for="libelle">Libellé :</label>
        <input type="text" id="libelle" name="libelle" value="<?= $category['libelle'] ?>" required><br>
        <button type="submit">Modifier</button>
    </form>
    <a href="index.php?action=listCategories">Retour</a>
</body>
</html>
