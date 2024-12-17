<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des Catégories</title>
</head>
<body>
    <h1>Liste des Catégories</h1>
    <a href="index.php?action=addCategory">Ajouter une catégorie</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Libellé</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $category['id'] ?></td>
                    <td><?= $category['libelle'] ?></td>
                    <td>
                        <a href="index.php?action=editCategory&id=<?= $category['id'] ?>">Modifier</a>
                        <a href="index.php?action=deleteCategory&id=<?= $category['id'] ?>" onclick="return confirm('Supprimer cette catégorie ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
