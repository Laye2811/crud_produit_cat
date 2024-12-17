<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Produits</title>
</head>
<body>
    <h1>Liste des Produits</h1>
    <a href="index.php?action=addProduct">Ajouter un produit</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Catégorie</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['id'] ?></td>
                    <td><?= $product['nom'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><?= $product['prix'] ?></td>
                    <td><?= $product['quantite'] ?></td>
                    <td><?= $product['categorie'] ?></td>
                    <td>
                        <a href="index.php?action=editProduct&id=<?= $product['id'] ?>">Modifier</a>
                        <a href="index.php?action=deleteProduct&id=<?= $product['id'] ?>" onclick="return confirm('Supprimer ce produit ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
