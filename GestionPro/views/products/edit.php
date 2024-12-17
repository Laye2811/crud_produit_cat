<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un Produit</title>
</head>
<body>
    <h1>Modifier un Produit</h1>
    <form method="POST" action="">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($product['nom']) ?>" required><br>

        <label for="description">Description :</label>
        <textarea id="description" name="description" required><?= htmlspecialchars($product['description']) ?></textarea><br>

        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" value="<?= htmlspecialchars($product['prix']) ?>" step="0.01" required><br>

        <label for="quantite">Quantité :</label>
        <input type="number" id="quantite" name="quantite" value="<?= htmlspecialchars($product['quantite']) ?>" required><br>

        <label for="id_categorie">Catégorie :</label>
        <select id="id_categorie" name="id_categorie" required>
            <?php foreach ($categories as $category): ?>
                <option value="<?= htmlspecialchars($category['id']) ?>" <?= $category['id'] == $product['id_categorie'] ? 'selected' : '' ?>>
                    <?= htmlspecialchars($category['libelle']) ?>
                </option>
            <?php endforeach; ?>
        </select><br>

        <button type="submit">Modifier</button>
    </form>
    <a href="index.php?action=listProducts">Retour</a>
</body>
</html>
