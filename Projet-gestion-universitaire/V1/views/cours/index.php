<!DOCTYPE html>
<html>
<head>
    <title>Liste des cours</title>
</head>
<body>
    <h1>Liste des cours</h1>
    <a href="index.php?action=create">Ajouter un cours</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom du cours</th>
            <th>Code du cours</th>
            <th>Nombre d'heures</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($cours as $coursItem): ?>
        <tr>
            <td><?= $coursItem['id'] ?></td>
            <td><?= $coursItem['nom_cours'] ?></td>
            <td><?= $coursItem['code_cours'] ?></td>
            <td><?= $coursItem['nombre_heures'] ?></td>
            <td>
                <a href="index.php?action=edit&id=<?= $coursItem['id'] ?>">Modifier</a>
                <a href="index.php?action=delete&id=<?= $coursItem['id'] ?>" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
